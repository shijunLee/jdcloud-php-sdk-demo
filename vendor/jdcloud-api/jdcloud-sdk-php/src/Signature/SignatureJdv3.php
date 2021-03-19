<?php
namespace Jdcloud\Signature;

use Jdcloud\Credentials\CredentialsInterface;
use Jdcloud\Exception\CouldNotCreateChecksumException;
use GuzzleHttp\Psr7;
use Psr\Http\Message\RequestInterface;

/**
 * Jdcloud Signature Version 3
 * @link https://docs.jdcloud.com/cn/common-declaration/api/authorization-rules
 */
class SignatureJdv3 implements SignatureInterface
{
    use SignatureJdv3Trait;
    const ISO8601_BASIC = 'Ymd\THis\Z';
    const UNSIGNED_PAYLOAD = 'UNSIGNED-PAYLOAD';

    /** @var string */
    private $service;

    /** @var string */
    private $region;

    /** @var bool */
    private $unsigned;

    /**
     * @param string $service Service name to use when signing
     * @param string $region  Region name to use when signing
     * @param array $options Array of configuration options used when signing
     *      - unsigned-body: Flag to make request have unsigned payload.
     *        Unsigned body is used primarily for streaming requests.
     */
    public function __construct($service, $region, array $options = [])
    {
        $this->service = $service;
        $this->region = $region;
        $this->unsigned = isset($options['unsigned-body']) ? $options['unsigned-body'] : false;
    }

    public function signRequest(
        RequestInterface $request,
        CredentialsInterface $credentials
        ) {
        $ldt = gmdate(self::ISO8601_BASIC);
        $parsed = $this->parseRequest($request);
        $parsed['headers']['x-jdcloud-algorithm'] = ['JDCLOUD3-HMAC-SHA256'];
        
        if (!isset($parsed['headers']['x-jdcloud-date'])) {
            $parsed['headers']['x-jdcloud-date'] = [$ldt];
        }
        
        if (!isset($parsed['headers']['x-jdcloud-nonce'])) {
            $parsed['headers']['x-jdcloud-nonce'] = [uniqid('php', true)];
        }
        
        if ($token = $credentials->getSecurityToken()) {
            $parsed['headers']['x-jdcloud-security-token'] = [$token];
        }
        $sdt = substr($parsed['headers']['x-jdcloud-date'][0], 0, 8);
        $cs = $this->createScope($sdt, $this->region, $this->service);
        $payload = $this->getPayload($request);

        if ($payload == self::UNSIGNED_PAYLOAD) {
            $parsed['headers']['x-jdcloud-content-sha256'] = [$payload];
        }

        $context = $this->createContext($parsed, $payload);

        $toSign = $this->createStringToSign($parsed['headers']['x-jdcloud-date'][0], $cs, $context['creq']);
//         print ("************toSign**********");
//         var_dump($toSign);
        $signingKey = $this->getSigningKey(
            $sdt,
            $this->region,
            $this->service,
            $credentials->getSecretKey()
            );
        
        
//         var_dump($signingKey);
        $signature = hash_hmac('sha256', $toSign, $signingKey);
//         var_dump($signature);

        $parsed['headers']['authorization'] = [
            "JDCLOUD3-HMAC-SHA256 "
            . "Credential={$credentials->getAccessKeyId()}/{$cs}, "
            . "SignedHeaders={$context['headers']}, Signature={$signature}"
        ];

        return $this->buildRequest($parsed);
    }

    public function presign(
        RequestInterface $request,
        CredentialsInterface $credentials,
        $expires = 0,
        array $options = []
    ) {

        $startTimestamp = isset($options['start_time'])
                            ? $this->convertToTimestamp($options['start_time'], null)
                            : time();
                            
        $expiresTimestamp = $this->convertToTimestamp($expires, $startTimestamp);

        $parsed = $this->createPresignedRequest($request, $credentials);
        $payload = $this->getPresignedPayload($request);
        $httpDate = gmdate(self::ISO8601_BASIC, $startTimestamp);
        $shortDate = substr($httpDate, 0, 8);
        $scope = $this->createScope($shortDate, $this->region, $this->service);
        $credential = $credentials->getAccessKeyId() . '/' . $scope;
        $parsed['query']['x-jdcloud-algorithm'] = 'JDCLOUD3-HMAC-SHA256';
        $parsed['query']['x-jdcloud-credential'] = $credential;
        $parsed['query']['x-jdcloud-date'] = gmdate('Ymd\THis\Z', $startTimestamp);
        $parsed['query']['x-jdcloud-signedHeaders'] = 'host';
//         $parsed['query']['x-jdcloud-expires'] = $this->convertExpires($expiresTimestamp, $startTimestamp);
        $context = $this->createContext($parsed, $payload);
        $stringToSign = $this->createStringToSign($httpDate, $scope, $context['creq']);
        $key = $this->getSigningKey(
            $shortDate,
            $this->region,
            $this->service,
            $credentials->getSecretKey()
        );
        $parsed['query']['x-jdcloud-signature'] = hash_hmac('sha256', $stringToSign, $key);

        return $this->buildRequest($parsed);
    }

    /**
     * Converts a POST request to a GET request by moving POST fields into the
     * query string.
     *
     * Useful for pre-signing query protocol requests.
     *
     * @param RequestInterface $request Request to clone
     *
     * @return RequestInterface
     * @throws \InvalidArgumentException if the method is not POST
     */
    public static function convertPostToGet(RequestInterface $request)
    {
        if ($request->getMethod() !== 'POST') {
            throw new \InvalidArgumentException('Expected a POST request but '
                . 'received a ' . $request->getMethod() . ' request.');
        }

        $sr = $request->withMethod('GET')
            ->withBody(Psr7\stream_for(''))
            ->withoutHeader('Content-Type')
            ->withoutHeader('Content-Length');

        // Move POST fields to the query if they are present
        if ($request->getHeaderLine('Content-Type') === 'application/x-www-form-urlencoded') {
            $body = (string) $request->getBody();
            $sr = $sr->withUri($sr->getUri()->withQuery($body));
        }

        return $sr;
    }

    protected function getPayload(RequestInterface $request)
    {
        if ($this->unsigned && $request->getUri()->getScheme() == 'https') {
            return self::UNSIGNED_PAYLOAD;
        }
        // Calculate the request signature payload
        if ($request->hasHeader('x-jdcloud-content-sha256')) {
            // Handle streaming operations (e.g. Glacier.UploadArchive)
            return $request->getHeaderLine('x-jdcloud-content-sha256');
        }

        if (!$request->getBody()->isSeekable()) {
            throw new CouldNotCreateChecksumException('sha256');
        }

        try {
            return Psr7\hash($request->getBody(), 'sha256');
        } catch (\Exception $e) {
            throw new CouldNotCreateChecksumException('sha256', $e);
        }
    }

    protected function getPresignedPayload(RequestInterface $request)
    {
        return $this->getPayload($request);
    }

    protected function createCanonicalizedPath($path)
    {
        $doubleEncoded = rawurlencode(ltrim($path, '/'));

        return '/' . str_replace('%2F', '/', $doubleEncoded);
    }

    private function createStringToSign($longDate, $credentialScope, $creq)
    {
        $hash = hash('sha256', $creq);

        return "JDCLOUD3-HMAC-SHA256\n{$longDate}\n{$credentialScope}\n{$hash}";
    }

    private function createPresignedRequest(
        RequestInterface $request,
        CredentialsInterface $credentials
    ) {
        $parsedRequest = $this->parseRequest($request);

        // Make sure to handle temporary credentials
        if ($token = $credentials->getSecurityToken()) {
            $parsedRequest['headers']['x-jdcloud-security-token'] = [$token];
        }

        return $this->moveHeadersToQuery($parsedRequest);
    }

    /**
     * @param array  $parsedRequest
     * @param string $payload Hash of the request payload
     * @return array Returns an array of context information
     */
    private function createContext(array $parsedRequest, $payload)
    {
        // The following headers are not signed because signing these headers
        // would potentially cause a signature mismatch when sending a request
        // through a proxy or if modified at the HTTP client level.
        static $blacklist = [
            'cache-control'       => true,
            'content-type'        => true,
            'host'        => true,
            'content-length'      => true,
            'expect'              => true,
            'max-forwards'        => true,
            'pragma'              => true,
            'range'               => true,
            'te'                  => true,
            'if-match'            => true,
            'if-none-match'       => true,
            'if-modified-since'   => true,
            'if-unmodified-since' => true,
            'if-range'            => true,
            'accept'              => true,
            'authorization'       => true,
            'proxy-authorization' => true,
            'from'                => true,
            'referer'             => true,
            'user-agent'          => true,
            'x-jdcloud-request-id'     => true
        ];

        // Normalize the path as required by SigV4
        $canon = $parsedRequest['method'] . "\n"
            . $this->createCanonicalizedPath($parsedRequest['path']) . "\n"
            . $this->getCanonicalizedQuery($parsedRequest['query']) . "\n";
            
        // Case-insensitively aggregate all of the headers.
        $aggregate = [];

        foreach ($parsedRequest['headers'] as $key => $values) {
            $key = strtolower($key);
            if (!isset($blacklist[$key])) {
                foreach ($values as $v) {
                    $aggregate[$key][] = $v;
                }
            }
        }

        ksort($aggregate);
        $canonHeaders = [];
        foreach ($aggregate as $k => $v) {
            if (count($v) > 0) {
                sort($v);
            }
            $canonHeaders[] = $k . ':' . preg_replace('/\s+/', ' ', implode(',', $v));
        }

        $signedHeadersString = implode(';', array_keys($aggregate));
        $canon .= implode("\n", $canonHeaders) . "\n\n"
            . $signedHeadersString . "\n"
            . $payload;
        
//         print("----canon---");
//         var_dump($canon);

        return ['creq' => $canon, 'headers' => $signedHeadersString];
    }

    private function getCanonicalizedQuery(array $query)
    {
        unset($query['x-jdcloud-signature']);

        if (!$query) {
            return '';
        }

        $qs = '';
        ksort($query);
        foreach ($query as $k => $v) {
            if(strcmp($k , "") == 0) {
                continue;
            }
            
            if (!is_array($v)) {
                $qs .= rawurlencode($k) . '=' . rawurlencode($v) . '&';
            } else {
                sort($v);
                foreach ($v as $value) {
                    $qs .= rawurlencode($k) . '=' . rawurlencode($value) . '&';
                }
            }
        }

        return substr($qs, 0, -1);
    }

    private function convertToTimestamp($dateValue, $relativeTimeBase = null)
    {
        if ($dateValue instanceof \DateTime) {
            $timestamp = $dateValue->getTimestamp();
        } elseif (!is_numeric($dateValue)) {
            $timestamp = strtotime($dateValue,
                                   $relativeTimeBase === null ? time() : $relativeTimeBase
            );
        } else {
            $timestamp = $dateValue;
        }

        return $timestamp;
    }

    private function convertExpires($expiresTimestamp, $startTimestamp)
    {
        $duration = $expiresTimestamp - $startTimestamp;

        // Ensure that the duration of the signature is not longer than a week
        if ($duration > 604800) {
            throw new \InvalidArgumentException('The expiration date of a '
                . 'signature version 4 presigned URL must be less than one '
                . 'week');
        }

        return $duration;
    }

    private function moveHeadersToQuery(array $parsedRequest)
    {
        foreach ($parsedRequest['headers'] as $name => $header) {
            $lname = strtolower($name);
            if (substr($lname, 0, 9) == 'x-jdcloud') {
                $parsedRequest['query'][$name] = $header;
            }
            if ($lname !== 'host') {
                unset($parsedRequest['headers'][$name]);
            }
        }

        return $parsedRequest;
    }

    private function parseRequest(RequestInterface $request)
    {
        // Clean up any previously set headers.
        /** @var RequestInterface $request */
        $request = $request
//             ->withoutHeader('x-jdcloud-date')
            ->withoutHeader('authorization');
            $uri = $request->getUri();
            
            $path = rawurldecode($uri->getPath());
            $trimSlash = preg_replace('/[\/]{1,}/','/',$path);
            $result = str_replace("+", " ", $trimSlash);
            
            $query = Psr7\parse_query($uri->getQuery(), PHP_QUERY_RFC3986);

        return [
            'method'  => $request->getMethod(),
            'path'    => $result,
            'query'   => $query,
            'uri'     => $uri,
            'headers' => $request->getHeaders(),
            'body'    => $request->getBody(),
            'version' => $request->getProtocolVersion()
        ];
    }

    private function buildRequest(array $req)
    {
        if ($req['query']) {
            $req['uri'] = $req['uri']->withQuery(Psr7\build_query($req['query']));
        }

        return new Psr7\Request(
            $req['method'],
            $req['uri'],
            $req['headers'],
            $req['body'],
            $req['version']
        );
    }
}
