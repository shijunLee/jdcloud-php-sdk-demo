<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'yundingdatapush',
        'protocol' => 'json',
//        'serviceFullName' => 'yundingdatapush',
//        'serviceId' => 'yundingdatapush',
    ],
    'operations' => [
        'DescribeDatapushVenders' => [
            'name' => 'DescribeDatapushVenders',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/datapushVenders',
            ],
            'input' => [ 'shape' => 'DescribeDatapushVendersRequestShape', ],
            'output' => [ 'shape' => 'DescribeDatapushVendersResponseShape', ],
        ],
        'AddDatapushVender' => [
            'name' => 'AddDatapushVender',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/datapushVenders',
            ],
            'input' => [ 'shape' => 'AddDatapushVenderRequestShape', ],
            'output' => [ 'shape' => 'AddDatapushVenderResponseShape', ],
        ],
        'DeleteDatapushVender' => [
            'name' => 'DeleteDatapushVender',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/datapushVenders',
            ],
            'input' => [ 'shape' => 'DeleteDatapushVenderRequestShape', ],
            'output' => [ 'shape' => 'DeleteDatapushVenderResponseShape', ],
        ],
        'DescribeRdsInstances' => [
            'name' => 'DescribeRdsInstances',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/describeRdsInstances',
            ],
            'input' => [ 'shape' => 'DescribeRdsInstancesRequestShape', ],
            'output' => [ 'shape' => 'DescribeRdsInstancesResponseShape', ],
        ],
        'CreateOrderSync' => [
            'name' => 'CreateOrderSync',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/createOrderSync',
            ],
            'input' => [ 'shape' => 'CreateOrderSyncRequestShape', ],
            'output' => [ 'shape' => 'CreateOrderSyncResponseShape', ],
        ],
    ],
    'shapes' => [
        'OrderSyncSpec' => [
            'type' => 'structure',
            'members' => [
                'appKey' => [ 'type' => 'string', 'locationName' => 'appKey', ],
                'venderId' => [ 'type' => 'string', 'locationName' => 'venderId', ],
                'days' => [ 'type' => 'integer', 'locationName' => 'days', ],
            ],
        ],
        'OrderSync' => [
            'type' => 'structure',
            'members' => [
                'syncId' => [ 'type' => 'string', 'locationName' => 'syncId', ],
            ],
        ],
        'RdsInstance' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'vpcName' => [ 'type' => 'string', 'locationName' => 'vpcName', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'instanceStatus' => [ 'type' => 'string', 'locationName' => 'instanceStatus', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'instanceClass' => [ 'type' => 'string', 'locationName' => 'instanceClass', ],
            ],
        ],
        'Vender' => [
            'type' => 'structure',
            'members' => [
                'appkey' => [ 'type' => 'string', 'locationName' => 'appkey', ],
                'ydRdsInstanceId' => [ 'type' => 'string', 'locationName' => 'ydRdsInstanceId', ],
                'venderId' => [ 'type' => 'string', 'locationName' => 'venderId', ],
            ],
        ],
        'VenderShow' => [
            'type' => 'structure',
            'members' => [
                'appkey' => [ 'type' => 'string', 'locationName' => 'appkey', ],
                'ydRdsInstanceId' => [ 'type' => 'string', 'locationName' => 'ydRdsInstanceId', ],
                'venderId' => [ 'type' => 'string', 'locationName' => 'venderId', ],
                'venderName' => [ 'type' => 'string', 'locationName' => 'venderName', ],
            ],
        ],
        'AddDatapushVenderResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'AddDatapushVenderResultShape', ],
            ],
        ],
        'DescribeDatapushVendersRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appkey' => [ 'type' => 'string', 'locationName' => 'appkey', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'ydRdsInstanceId' => [ 'type' => 'string', 'locationName' => 'ydRdsInstanceId', ],
                'rdsInstanceName' => [ 'type' => 'string', 'locationName' => 'rdsInstanceName', ],
                'venderId' => [ 'type' => 'string', 'locationName' => 'venderId', ],
                'venderName' => [ 'type' => 'string', 'locationName' => 'venderName', ],
            ],
        ],
        'CreateOrderSyncResultShape' => [
            'type' => 'structure',
            'members' => [
                'orderSync' =>  [ 'shape' => 'OrderSync', ],
            ],
        ],
        'DeleteDatapushVenderResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'DeleteDatapushVenderResultShape', ],
            ],
        ],
        'DescribeDatapushVendersResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeDatapushVendersResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AddDatapushVenderRequestShape' => [
            'type' => 'structure',
            'members' => [
                'datapushVender' =>  [ 'shape' => 'Vender', ],
            ],
        ],
        'CreateOrderSyncResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
                'result' =>  [ 'shape' => 'CreateOrderSyncResultShape', ],
            ],
        ],
        'DescribeRdsInstancesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeRdsInstancesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeRdsInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
                'rdsInstances' => [ 'type' => 'list', 'member' => [ 'shape' => 'RdsInstance', ], ],
            ],
        ],
        'DescribeRdsInstancesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appkey' => [ 'type' => 'string', 'locationName' => 'appkey', ],
            ],
        ],
        'DescribeDatapushVendersResultShape' => [
            'type' => 'structure',
            'members' => [
                'venders' => [ 'type' => 'list', 'member' => [ 'shape' => 'VenderShow', ], ],
            ],
        ],
        'AddDatapushVenderResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
        'DeleteDatapushVenderRequestShape' => [
            'type' => 'structure',
            'members' => [
                'appkey' => [ 'type' => 'string', 'locationName' => 'appkey', ],
                'ydRdsInstanceId' => [ 'type' => 'string', 'locationName' => 'ydRdsInstanceId', ],
                'venderId' => [ 'type' => 'string', 'locationName' => 'venderId', ],
            ],
        ],
        'CreateOrderSyncRequestShape' => [
            'type' => 'structure',
            'members' => [
                'orderSyncSpec' =>  [ 'shape' => 'OrderSyncSpec', ],
            ],
        ],
        'DeleteDatapushVenderResultShape' => [
            'type' => 'structure',
            'members' => [
                'success' => [ 'type' => 'boolean', 'locationName' => 'success', ],
            ],
        ],
    ],
];
