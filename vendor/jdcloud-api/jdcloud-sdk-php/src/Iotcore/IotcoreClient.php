<?php
/**
 * Iotcore
 *
 * @category Jdcloud
 * @package  Jdcloud\Iotcore
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Iotcore;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with iotcore.
 *
 * @method \Jdcloud\Result registerDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerDeviceAsync(array $args = [])
 * @method \Jdcloud\Result downloadDeviceCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise downloadDeviceCertificateAsync(array $args = [])
 * @method \Jdcloud\Result deleteDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDeviceAsync(array $args = [])
 * @method \Jdcloud\Result describeDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDeviceAsync(array $args = [])
 * @method \Jdcloud\Result describeThingTypeList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeThingTypeListAsync(array $args = [])
 * @method \Jdcloud\Result describeThingType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeThingTypeAsync(array $args = [])
 * @method \Jdcloud\Result describeThingModel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeThingModelAsync(array $args = [])
 * @method \Jdcloud\Result setDeviceProperty(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setDevicePropertyAsync(array $args = [])
 * @method \Jdcloud\Result invokeFunction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise invokeFunctionAsync(array $args = [])
 * @method \Jdcloud\Result describeEventList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEventListAsync(array $args = [])
 * @method \Jdcloud\Result describeFunctionList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFunctionListAsync(array $args = [])
 * @method \Jdcloud\Result describeProperty(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePropertyAsync(array $args = [])
 * @method \Jdcloud\Result describePropertySnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePropertySnapshotAsync(array $args = [])
 * @method \Jdcloud\Result createDeviceTopo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDeviceTopoAsync(array $args = [])
 * @method \Jdcloud\Result describeDeviceTopo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDeviceTopoAsync(array $args = [])
 * @method \Jdcloud\Result updateDeviceTopo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDeviceTopoAsync(array $args = [])
 * @method \Jdcloud\Result deleteDeviceTopo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDeviceTopoAsync(array $args = [])
 * @method \Jdcloud\Result invokeThingTopic(array $args = [])
 * @method \GuzzleHttp\Promise\Promise invokeThingTopicAsync(array $args = [])
 * @method \Jdcloud\Result describeThingShadow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeThingShadowAsync(array $args = [])
 * @method \Jdcloud\Result updateThingShadow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateThingShadowAsync(array $args = [])
 * @method \Jdcloud\Result invokeThingService(array $args = [])
 * @method \GuzzleHttp\Promise\Promise invokeThingServiceAsync(array $args = [])
 * @method \Jdcloud\Result addDeviceLinks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addDeviceLinksAsync(array $args = [])
 * @method \Jdcloud\Result queryDevicePage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryDevicePageAsync(array $args = [])
 * @method \Jdcloud\Result updateDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDeviceAsync(array $args = [])
 * @method \Jdcloud\Result addDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addDeviceAsync(array $args = [])
 * @method \Jdcloud\Result queryDeviceDetail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryDeviceDetailAsync(array $args = [])
 * @method \Jdcloud\Result removeDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeDeviceAsync(array $args = [])
 * @method \Jdcloud\Result getDeviceGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDeviceGroupAsync(array $args = [])
 * @method \Jdcloud\Result getDeviceGroupList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDeviceGroupListAsync(array $args = [])
 * @method \Jdcloud\Result findDeviceGroupLinkPage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise findDeviceGroupLinkPageAsync(array $args = [])
 * @method \Jdcloud\Result elevatorOperatingStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise elevatorOperatingStatusAsync(array $args = [])
 * @method \Jdcloud\Result collectorReadMessage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise collectorReadMessageAsync(array $args = [])
 * @method \Jdcloud\Result readHoldingRegisters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise readHoldingRegistersAsync(array $args = [])
 * @method \Jdcloud\Result collectorWriteMessage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise collectorWriteMessageAsync(array $args = [])
 * @method \Jdcloud\Result updateLooDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateLooDeviceAsync(array $args = [])
 * @method \Jdcloud\Result addLooDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addLooDeviceAsync(array $args = [])
 * @method \Jdcloud\Result loongrayQueryPage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise loongrayQueryPageAsync(array $args = [])
 * @method \Jdcloud\Result queryAdminStatistics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryAdminStatisticsAsync(array $args = [])
 * @method \Jdcloud\Result removeLoongrayDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeLoongrayDeviceAsync(array $args = [])
 * @method \Jdcloud\Result describeProductWithAdmin(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProductWithAdminAsync(array $args = [])
 * @method \Jdcloud\Result updateProductWithAdmin(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateProductWithAdminAsync(array $args = [])
 * @method \Jdcloud\Result deleteProductWithAdmin(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteProductWithAdminAsync(array $args = [])
 * @method \Jdcloud\Result listProductsWithAdmin(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProductsWithAdminAsync(array $args = [])
 * @method \Jdcloud\Result createAdminProduct(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAdminProductAsync(array $args = [])
 * @method \Jdcloud\Result listProducts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProductsAsync(array $args = [])
 * @method \Jdcloud\Result createProduct(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createProductAsync(array $args = [])
 * @method \Jdcloud\Result describeProduct(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProductAsync(array $args = [])
 * @method \Jdcloud\Result updateProduct(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateProductAsync(array $args = [])
 * @method \Jdcloud\Result deleteProduct(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteProductAsync(array $args = [])
 * @method \Jdcloud\Result listProductAbilities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProductAbilitiesAsync(array $args = [])
 * @method \Jdcloud\Result importThingModel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importThingModelAsync(array $args = [])
 * @method \Jdcloud\Result exportThingModel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise exportThingModelAsync(array $args = [])
 * @method \Jdcloud\Result describeProductTopics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProductTopicsAsync(array $args = [])
 * @method \Jdcloud\Result createProductTopic(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createProductTopicAsync(array $args = [])
 * @method \Jdcloud\Result describeProductTopic(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProductTopicAsync(array $args = [])
 */
class IotcoreClient extends JdCloudClient
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
                        'service' => 'iotcore',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'iotcore'
            );
        };

        parent::__construct($args);
    }
}