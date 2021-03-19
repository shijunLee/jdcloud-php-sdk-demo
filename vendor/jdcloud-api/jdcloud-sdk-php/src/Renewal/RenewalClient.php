<?php
/**
 * Renewal
 *
 * @category Jdcloud
 * @package  Jdcloud\Renewal
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Renewal;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with renewal.
 *
 * @method \Jdcloud\Result setRenewal(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setRenewalAsync(array $args = [])
 * @method \Jdcloud\Result queryInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryInstanceAsync(array $args = [])
 * @method \Jdcloud\Result renewInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise renewInstanceAsync(array $args = [])
 */
class RenewalClient extends JdCloudClient
{
    public function __construct(array $args)
    {
        $args['with_resolved'] = function (array $args) {
            $this->getHandlerList()->appendInit(
                PresignUrlMiddleware::wrap(
                    $this,
                    $args['endpoint_provider'],
                    [
                        'operations' => [
                        ],
                        'service' => 'renewal',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'renewal'
            );
        };

        parent::__construct($args);
    }
}