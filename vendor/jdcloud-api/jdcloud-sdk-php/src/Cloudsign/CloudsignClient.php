<?php
/**
 * Cloudsign
 *
 * @category Jdcloud
 * @package  Jdcloud\Cloudsign
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Cloudsign;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with cloudsign.
 *
 * @method \Jdcloud\Result describeContractList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeContractListAsync(array $args = [])
 * @method \Jdcloud\Result signContract(array $args = [])
 * @method \GuzzleHttp\Promise\Promise signContractAsync(array $args = [])
 * @method \Jdcloud\Result downloadContracts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise downloadContractsAsync(array $args = [])
 * @method \Jdcloud\Result verifyContract(array $args = [])
 * @method \GuzzleHttp\Promise\Promise verifyContractAsync(array $args = [])
 * @method \Jdcloud\Result deleteContract(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteContractAsync(array $args = [])
 * @method \Jdcloud\Result describeApplyStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeApplyStatusAsync(array $args = [])
 * @method \Jdcloud\Result enableContractSave(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableContractSaveAsync(array $args = [])
 * @method \Jdcloud\Result disableContractSave(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableContractSaveAsync(array $args = [])
 * @method \Jdcloud\Result setKmsKeyId(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setKmsKeyIdAsync(array $args = [])
 * @method \Jdcloud\Result describeStampList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStampListAsync(array $args = [])
 * @method \Jdcloud\Result uploadStamp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise uploadStampAsync(array $args = [])
 * @method \Jdcloud\Result downloadStamps(array $args = [])
 * @method \GuzzleHttp\Promise\Promise downloadStampsAsync(array $args = [])
 * @method \Jdcloud\Result deleteStamp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteStampAsync(array $args = [])
 * @method \Jdcloud\Result describeTemplateList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTemplateListAsync(array $args = [])
 * @method \Jdcloud\Result uploadTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise uploadTemplateAsync(array $args = [])
 * @method \Jdcloud\Result downloadTemplates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise downloadTemplatesAsync(array $args = [])
 * @method \Jdcloud\Result paddingTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise paddingTemplateAsync(array $args = [])
 * @method \Jdcloud\Result deleteTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTemplateAsync(array $args = [])
 */
class CloudsignClient extends JdCloudClient
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
                        'service' => 'cloudsign',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'cloudsign'
            );
        };

        parent::__construct($args);
    }
}