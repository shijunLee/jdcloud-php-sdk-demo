<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'redis',
        'protocol' => 'json',
//        'serviceFullName' => 'redis',
//        'serviceId' => 'redis',
    ],
    'operations' => [
        'DescribeAvailableRegion' => [
            'name' => 'DescribeAvailableRegion',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/availableRegion',
            ],
            'input' => [ 'shape' => 'DescribeAvailableRegionRequestShape', ],
            'output' => [ 'shape' => 'DescribeAvailableRegionResponseShape', ],
        ],
        'DescribeAvailableResource' => [
            'name' => 'DescribeAvailableResource',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/availableResource',
            ],
            'input' => [ 'shape' => 'DescribeAvailableResourceRequestShape', ],
            'output' => [ 'shape' => 'DescribeAvailableResourceResponseShape', ],
        ],
        'DescribeCacheInstances' => [
            'name' => 'DescribeCacheInstances',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance',
            ],
            'input' => [ 'shape' => 'DescribeCacheInstancesRequestShape', ],
            'output' => [ 'shape' => 'DescribeCacheInstancesResponseShape', ],
        ],
        'CreateCacheInstance' => [
            'name' => 'CreateCacheInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance',
            ],
            'input' => [ 'shape' => 'CreateCacheInstanceRequestShape', ],
            'output' => [ 'shape' => 'CreateCacheInstanceResponseShape', ],
        ],
        'DescribeCacheInstance' => [
            'name' => 'DescribeCacheInstance',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}',
            ],
            'input' => [ 'shape' => 'DescribeCacheInstanceRequestShape', ],
            'output' => [ 'shape' => 'DescribeCacheInstanceResponseShape', ],
        ],
        'ModifyCacheInstanceAttribute' => [
            'name' => 'ModifyCacheInstanceAttribute',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}',
            ],
            'input' => [ 'shape' => 'ModifyCacheInstanceAttributeRequestShape', ],
            'output' => [ 'shape' => 'ModifyCacheInstanceAttributeResponseShape', ],
        ],
        'DeleteCacheInstance' => [
            'name' => 'DeleteCacheInstance',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}',
            ],
            'input' => [ 'shape' => 'DeleteCacheInstanceRequestShape', ],
            'output' => [ 'shape' => 'DeleteCacheInstanceResponseShape', ],
        ],
        'ModifyCacheInstanceClass' => [
            'name' => 'ModifyCacheInstanceClass',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}:modifyCacheInstanceClass',
            ],
            'input' => [ 'shape' => 'ModifyCacheInstanceClassRequestShape', ],
            'output' => [ 'shape' => 'ModifyCacheInstanceClassResponseShape', ],
        ],
        'ResetCacheInstancePassword' => [
            'name' => 'ResetCacheInstancePassword',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}:resetCacheInstancePassword',
            ],
            'input' => [ 'shape' => 'ResetCacheInstancePasswordRequestShape', ],
            'output' => [ 'shape' => 'ResetCacheInstancePasswordResponseShape', ],
        ],
        'DescribeInstanceConfig' => [
            'name' => 'DescribeInstanceConfig',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/instanceConfig',
            ],
            'input' => [ 'shape' => 'DescribeInstanceConfigRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstanceConfigResponseShape', ],
        ],
        'ModifyInstanceConfig' => [
            'name' => 'ModifyInstanceConfig',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/instanceConfig',
            ],
            'input' => [ 'shape' => 'ModifyInstanceConfigRequestShape', ],
            'output' => [ 'shape' => 'ModifyInstanceConfigResponseShape', ],
        ],
        'DescribeAnalysisTime' => [
            'name' => 'DescribeAnalysisTime',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/analysisTime',
            ],
            'input' => [ 'shape' => 'DescribeAnalysisTimeRequestShape', ],
            'output' => [ 'shape' => 'DescribeAnalysisTimeResponseShape', ],
        ],
        'ModifyAnalysisTime' => [
            'name' => 'ModifyAnalysisTime',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/analysisTime',
            ],
            'input' => [ 'shape' => 'ModifyAnalysisTimeRequestShape', ],
            'output' => [ 'shape' => 'ModifyAnalysisTimeResponseShape', ],
        ],
        'DescribeCacheAnalysisList' => [
            'name' => 'DescribeCacheAnalysisList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/cacheAnalysis',
            ],
            'input' => [ 'shape' => 'DescribeCacheAnalysisListRequestShape', ],
            'output' => [ 'shape' => 'DescribeCacheAnalysisListResponseShape', ],
        ],
        'CreateCacheAnalysis' => [
            'name' => 'CreateCacheAnalysis',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/cacheAnalysis',
            ],
            'input' => [ 'shape' => 'CreateCacheAnalysisRequestShape', ],
            'output' => [ 'shape' => 'CreateCacheAnalysisResponseShape', ],
        ],
        'DescribeCacheAnalysisResult' => [
            'name' => 'DescribeCacheAnalysisResult',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/cacheAnalysis/{taskId}',
            ],
            'input' => [ 'shape' => 'DescribeCacheAnalysisResultRequestShape', ],
            'output' => [ 'shape' => 'DescribeCacheAnalysisResultResponseShape', ],
        ],
        'DescribeClientList' => [
            'name' => 'DescribeClientList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/clientList',
            ],
            'input' => [ 'shape' => 'DescribeClientListRequestShape', ],
            'output' => [ 'shape' => 'DescribeClientListResponseShape', ],
        ],
        'DescribeClientIpDetail' => [
            'name' => 'DescribeClientIpDetail',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/clientIpDetail',
            ],
            'input' => [ 'shape' => 'DescribeClientIpDetailRequestShape', ],
            'output' => [ 'shape' => 'DescribeClientIpDetailResponseShape', ],
        ],
        'DescribeBackups' => [
            'name' => 'DescribeBackups',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/backup',
            ],
            'input' => [ 'shape' => 'DescribeBackupsRequestShape', ],
            'output' => [ 'shape' => 'DescribeBackupsResponseShape', ],
        ],
        'CreateBackup' => [
            'name' => 'CreateBackup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/backup',
            ],
            'input' => [ 'shape' => 'CreateBackupRequestShape', ],
            'output' => [ 'shape' => 'CreateBackupResponseShape', ],
        ],
        'DescribeBackupPolicy' => [
            'name' => 'DescribeBackupPolicy',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/backupPolicy',
            ],
            'input' => [ 'shape' => 'DescribeBackupPolicyRequestShape', ],
            'output' => [ 'shape' => 'DescribeBackupPolicyResponseShape', ],
        ],
        'ModifyBackupPolicy' => [
            'name' => 'ModifyBackupPolicy',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/backupPolicy',
            ],
            'input' => [ 'shape' => 'ModifyBackupPolicyRequestShape', ],
            'output' => [ 'shape' => 'ModifyBackupPolicyResponseShape', ],
        ],
        'RestoreInstance' => [
            'name' => 'RestoreInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/restore',
            ],
            'input' => [ 'shape' => 'RestoreInstanceRequestShape', ],
            'output' => [ 'shape' => 'RestoreInstanceResponseShape', ],
        ],
        'DescribeDownloadUrl' => [
            'name' => 'DescribeDownloadUrl',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/backup:describeDownloadUrl',
            ],
            'input' => [ 'shape' => 'DescribeDownloadUrlRequestShape', ],
            'output' => [ 'shape' => 'DescribeDownloadUrlResponseShape', ],
        ],
        'DescribeClusterInfo' => [
            'name' => 'DescribeClusterInfo',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/clusterInfo',
            ],
            'input' => [ 'shape' => 'DescribeClusterInfoRequestShape', ],
            'output' => [ 'shape' => 'DescribeClusterInfoResponseShape', ],
        ],
        'DescribeIpWhiteList' => [
            'name' => 'DescribeIpWhiteList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/ipWhiteList',
            ],
            'input' => [ 'shape' => 'DescribeIpWhiteListRequestShape', ],
            'output' => [ 'shape' => 'DescribeIpWhiteListResponseShape', ],
        ],
        'ModifyIpWhiteList' => [
            'name' => 'ModifyIpWhiteList',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/ipWhiteList',
            ],
            'input' => [ 'shape' => 'ModifyIpWhiteListRequestShape', ],
            'output' => [ 'shape' => 'ModifyIpWhiteListResponseShape', ],
        ],
        'DescribeSlowLog' => [
            'name' => 'DescribeSlowLog',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/slowLog',
            ],
            'input' => [ 'shape' => 'DescribeSlowLogRequestShape', ],
            'output' => [ 'shape' => 'DescribeSlowLogResponseShape', ],
        ],
        'DescribeTaskProgressList' => [
            'name' => 'DescribeTaskProgressList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/cacheInstance/{cacheInstanceId}/taskProgress',
            ],
            'input' => [ 'shape' => 'DescribeTaskProgressListRequestShape', ],
            'output' => [ 'shape' => 'DescribeTaskProgressListResponseShape', ],
        ],
        'DescribeInstanceClass' => [
            'name' => 'DescribeInstanceClass',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instanceClass',
            ],
            'input' => [ 'shape' => 'DescribeInstanceClassRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstanceClassResponseShape', ],
        ],
        'DescribeUserQuota' => [
            'name' => 'DescribeUserQuota',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/quota',
            ],
            'input' => [ 'shape' => 'DescribeUserQuotaRequestShape', ],
            'output' => [ 'shape' => 'DescribeUserQuotaResponseShape', ],
        ],
        'DescribeSpecConfig' => [
            'name' => 'DescribeSpecConfig',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/specConfig',
            ],
            'input' => [ 'shape' => 'DescribeSpecConfigRequestShape', ],
            'output' => [ 'shape' => 'DescribeSpecConfigResponseShape', ],
        ],
    ],
    'shapes' => [
        'AzInfo' => [
            'type' => 'structure',
            'members' => [
                'azId' => [ 'type' => 'string', 'locationName' => 'azId', ],
                'azName' => [ 'type' => 'string', 'locationName' => 'azName', ],
                'soldOut' => [ 'type' => 'boolean', 'locationName' => 'soldOut', ],
            ],
        ],
        'AvailableRegion' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'regionName' => [ 'type' => 'string', 'locationName' => 'regionName', ],
                'soldOut' => [ 'type' => 'boolean', 'locationName' => 'soldOut', ],
                'quota' =>  [ 'shape' => 'QuotaInfo', ],
                'availableZones' => [ 'type' => 'list', 'member' => [ 'shape' => 'AzInfo', ], ],
            ],
        ],
        'QuotaInfo' => [
            'type' => 'structure',
            'members' => [
                'max' => [ 'type' => 'integer', 'locationName' => 'max', ],
                'used' => [ 'type' => 'integer', 'locationName' => 'used', ],
            ],
        ],
        'AvailableMemorySpec' => [
            'type' => 'structure',
            'members' => [
                'memoryGB' => [ 'type' => 'integer', 'locationName' => 'memoryGB', ],
                'soldOut' => [ 'type' => 'boolean', 'locationName' => 'soldOut', ],
                'availableZones' => [ 'type' => 'list', 'member' => [ 'shape' => 'AzInfo', ], ],
                'availableFlavors' => [ 'type' => 'list', 'member' => [ 'shape' => 'AvailableFlavor', ], ],
            ],
        ],
        'AvailableResource' => [
            'type' => 'structure',
            'members' => [
                'architectureType' => [ 'type' => 'string', 'locationName' => 'architectureType', ],
                'architectureName' => [ 'type' => 'string', 'locationName' => 'architectureName', ],
                'recommended' => [ 'type' => 'boolean', 'locationName' => 'recommended', ],
                'soldOut' => [ 'type' => 'boolean', 'locationName' => 'soldOut', ],
                'availableEngineVersions' => [ 'type' => 'list', 'member' => [ 'shape' => 'AvailableEngineVersion', ], ],
            ],
        ],
        'AvailableEngineVersion' => [
            'type' => 'structure',
            'members' => [
                'version' => [ 'type' => 'string', 'locationName' => 'version', ],
                'recommended' => [ 'type' => 'boolean', 'locationName' => 'recommended', ],
                'soldOut' => [ 'type' => 'boolean', 'locationName' => 'soldOut', ],
                'availableMemorySpecs' => [ 'type' => 'list', 'member' => [ 'shape' => 'AvailableMemorySpec', ], ],
            ],
        ],
        'FlavorDetail' => [
            'type' => 'structure',
            'members' => [
                'cpu' => [ 'type' => 'integer', 'locationName' => 'cpu', ],
                'diskGB' => [ 'type' => 'integer', 'locationName' => 'diskGB', ],
                'maxConnection' => [ 'type' => 'integer', 'locationName' => 'maxConnection', ],
                'bandwidthMbps' => [ 'type' => 'integer', 'locationName' => 'bandwidthMbps', ],
            ],
        ],
        'AvailableFlavor' => [
            'type' => 'structure',
            'members' => [
                'shardNumber' => [ 'type' => 'integer', 'locationName' => 'shardNumber', ],
                'ipNumber' => [ 'type' => 'integer', 'locationName' => 'ipNumber', ],
                'recommended' => [ 'type' => 'boolean', 'locationName' => 'recommended', ],
                'instanceClasses' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'detail' =>  [ 'shape' => 'FlavorDetail', ],
            ],
        ],
        'AzId' => [
            'type' => 'structure',
            'members' => [
                'master' => [ 'type' => 'string', 'locationName' => 'master', ],
                'slave' => [ 'type' => 'string', 'locationName' => 'slave', ],
            ],
        ],
        'AzIdSpec' => [
            'type' => 'structure',
            'members' => [
                'master' => [ 'type' => 'string', 'locationName' => 'master', ],
                'slave' => [ 'type' => 'string', 'locationName' => 'slave', ],
            ],
        ],
        'BaseProductRegionVo' => [
            'type' => 'structure',
            'members' => [
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
                'regionAzVos' => [ 'type' => 'list', 'member' => [ 'shape' => 'RegionAzVo', ], ],
            ],
        ],
        'RegionAzVo' => [
            'type' => 'structure',
            'members' => [
                'alias' => [ 'type' => 'string', 'locationName' => 'alias', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'visible' => [ 'type' => 'integer', 'locationName' => 'visible', ],
                'azStatusList' => [ 'type' => 'list', 'member' => [ 'shape' => 'AzSaleStatusVo', ], ],
            ],
        ],
        'AzSaleStatusVo' => [
            'type' => 'structure',
            'members' => [
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'canSale' => [ 'type' => 'integer', 'locationName' => 'canSale', ],
                'visible' => [ 'type' => 'integer', 'locationName' => 'visible', ],
            ],
        ],
        'Backup' => [
            'type' => 'structure',
            'members' => [
                'baseId' => [ 'type' => 'string', 'locationName' => 'baseId', ],
                'backupFileName' => [ 'type' => 'string', 'locationName' => 'backupFileName', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
                'backupStartTime' => [ 'type' => 'string', 'locationName' => 'backupStartTime', ],
                'backupEndTime' => [ 'type' => 'string', 'locationName' => 'backupEndTime', ],
                'backupType' => [ 'type' => 'integer', 'locationName' => 'backupType', ],
                'backupSize' => [ 'type' => 'long', 'locationName' => 'backupSize', ],
                'backupStatus' => [ 'type' => 'integer', 'locationName' => 'backupStatus', ],
                'backupDownloadURL' => [ 'type' => 'string', 'locationName' => 'backupDownloadURL', ],
            ],
        ],
        'CacheAnalysis' => [
            'type' => 'structure',
            'members' => [
                'analysisTime' => [ 'type' => 'string', 'locationName' => 'analysisTime', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'Tag' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'CacheInstance' => [
            'type' => 'structure',
            'members' => [
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
                'cacheInstanceName' => [ 'type' => 'string', 'locationName' => 'cacheInstanceName', ],
                'cacheInstanceClass' => [ 'type' => 'string', 'locationName' => 'cacheInstanceClass', ],
                'cacheInstanceMemoryMB' => [ 'type' => 'integer', 'locationName' => 'cacheInstanceMemoryMB', ],
                'cacheInstanceStatus' => [ 'type' => 'string', 'locationName' => 'cacheInstanceStatus', ],
                'cacheInstanceDescription' => [ 'type' => 'string', 'locationName' => 'cacheInstanceDescription', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'azId' =>  [ 'shape' => 'AzId', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'connectionDomain' => [ 'type' => 'string', 'locationName' => 'connectionDomain', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'charge' =>  [ 'shape' => 'Charge', ],
                'instanceVersion' => [ 'type' => 'string', 'locationName' => 'instanceVersion', ],
                'auth' => [ 'type' => 'boolean', 'locationName' => 'auth', ],
                'redisVersion' => [ 'type' => 'string', 'locationName' => 'redisVersion', ],
                'cacheInstanceType' => [ 'type' => 'string', 'locationName' => 'cacheInstanceType', ],
                'ipv6On' => [ 'type' => 'integer', 'locationName' => 'ipv6On', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'shardNumber' => [ 'type' => 'integer', 'locationName' => 'shardNumber', ],
                'memoryMBPerShard' => [ 'type' => 'integer', 'locationName' => 'memoryMBPerShard', ],
                'extension' =>  [ 'shape' => 'RespExtension', ],
            ],
        ],
        'RespExtension' => [
            'type' => 'structure',
            'members' => [
                'exposeType' => [ 'type' => 'string', 'locationName' => 'exposeType', ],
                'exposeDomain' => [ 'type' => 'string', 'locationName' => 'exposeDomain', ],
            ],
        ],
        'ReqExtension' => [
            'type' => 'structure',
            'members' => [
                'exposeType' => [ 'type' => 'string', 'locationName' => 'exposeType', ],
            ],
        ],
        'CacheInstanceSpec' => [
            'type' => 'structure',
            'members' => [
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'cacheInstanceName' => [ 'type' => 'string', 'locationName' => 'cacheInstanceName', ],
                'cacheInstanceClass' => [ 'type' => 'string', 'locationName' => 'cacheInstanceClass', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'azId' =>  [ 'shape' => 'AzIdSpec', ],
                'cacheInstanceDescription' => [ 'type' => 'string', 'locationName' => 'cacheInstanceDescription', ],
                'redisVersion' => [ 'type' => 'string', 'locationName' => 'redisVersion', ],
                'ipv6On' => [ 'type' => 'integer', 'locationName' => 'ipv6On', ],
                'shardNumber' => [ 'type' => 'integer', 'locationName' => 'shardNumber', ],
                'userTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'extension' =>  [ 'shape' => 'ReqExtension', ],
            ],
        ],
        'Details' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'port' => [ 'type' => 'string', 'locationName' => 'port', ],
                'age' => [ 'type' => 'string', 'locationName' => 'age', ],
                'idle' => [ 'type' => 'string', 'locationName' => 'idle', ],
                'db' => [ 'type' => 'string', 'locationName' => 'db', ],
                'lastCmd' => [ 'type' => 'string', 'locationName' => 'lastCmd', ],
            ],
        ],
        'Ips' => [
            'type' => 'structure',
            'members' => [
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'clientCount' => [ 'type' => 'integer', 'locationName' => 'clientCount', ],
            ],
        ],
        'Redis' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'ClusterInfo' => [
            'type' => 'structure',
            'members' => [
                'proxies' => [ 'type' => 'list', 'member' => [ 'shape' => 'Proxy', ], ],
                'shards' => [ 'type' => 'list', 'member' => [ 'shape' => 'Shard', ], ],
                'redis' => [ 'type' => 'list', 'member' => [ 'shape' => 'Redis', ], ],
            ],
        ],
        'Shard' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'Proxy' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'ConfigItem' => [
            'type' => 'structure',
            'members' => [
                'configName' => [ 'type' => 'string', 'locationName' => 'configName', ],
                'configValue' => [ 'type' => 'string', 'locationName' => 'configValue', ],
            ],
        ],
        'DownloadUrl' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'link' => [ 'type' => 'string', 'locationName' => 'link', ],
            ],
        ],
        'InstanceClass' => [
            'type' => 'structure',
            'members' => [
                'instanceClass' => [ 'type' => 'string', 'locationName' => 'instanceClass', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'cpu' => [ 'type' => 'integer', 'locationName' => 'cpu', ],
                'memoryMB' => [ 'type' => 'integer', 'locationName' => 'memoryMB', ],
                'diskGB' => [ 'type' => 'integer', 'locationName' => 'diskGB', ],
                'maxConnection' => [ 'type' => 'integer', 'locationName' => 'maxConnection', ],
                'bandwidthMbps' => [ 'type' => 'integer', 'locationName' => 'bandwidthMbps', ],
            ],
        ],
        'InstanceName' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'resourceStatus' => [ 'type' => 'string', 'locationName' => 'resourceStatus', ],
                'serviceCode' => [ 'type' => 'string', 'locationName' => 'serviceCode', ],
            ],
        ],
        'ShardSpec' => [
            'type' => 'structure',
            'members' => [
                'shardClass' => [ 'type' => 'string', 'locationName' => 'shardClass', ],
                'cpu' => [ 'type' => 'integer', 'locationName' => 'cpu', ],
                'memoryGB' => [ 'type' => 'integer', 'locationName' => 'memoryGB', ],
                'diskGB' => [ 'type' => 'integer', 'locationName' => 'diskGB', ],
                'maxConnection' => [ 'type' => 'integer', 'locationName' => 'maxConnection', ],
                'bandwidthMbps' => [ 'type' => 'integer', 'locationName' => 'bandwidthMbps', ],
                'shardNumberList' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
            ],
        ],
        'TypeInfo' => [
            'type' => 'structure',
            'members' => [
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'specs' => [ 'type' => 'list', 'member' => [ 'shape' => 'SpecInfo', ], ],
            ],
        ],
        'VersionInfo' => [
            'type' => 'structure',
            'members' => [
                'redisVersion' => [ 'type' => 'string', 'locationName' => 'redisVersion', ],
                'instanceTypes' => [ 'type' => 'list', 'member' => [ 'shape' => 'TypeInfo', ], ],
            ],
        ],
        'ShardInfo' => [
            'type' => 'structure',
            'members' => [
                'defaultShardNumber' => [ 'type' => 'integer', 'locationName' => 'defaultShardNumber', ],
                'defaultShardClass' => [ 'type' => 'string', 'locationName' => 'defaultShardClass', ],
                'shardNumberList' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
                'ipNumberList' => [ 'type' => 'list', 'member' => [ 'type' => 'integer', ], ],
            ],
        ],
        'InstanceSpec' => [
            'type' => 'structure',
            'members' => [
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'instanceVersions' => [ 'type' => 'list', 'member' => [ 'shape' => 'VersionInfo', ], ],
            ],
        ],
        'SpecInfo' => [
            'type' => 'structure',
            'members' => [
                'memoryGB' => [ 'type' => 'integer', 'locationName' => 'memoryGB', ],
                'instanceClass' => [ 'type' => 'string', 'locationName' => 'instanceClass', ],
                'cpu' => [ 'type' => 'integer', 'locationName' => 'cpu', ],
                'diskGB' => [ 'type' => 'integer', 'locationName' => 'diskGB', ],
                'maxConnection' => [ 'type' => 'integer', 'locationName' => 'maxConnection', ],
                'bandwidthMbps' => [ 'type' => 'integer', 'locationName' => 'bandwidthMbps', ],
                'ipNumber' => [ 'type' => 'integer', 'locationName' => 'ipNumber', ],
                'shard' =>  [ 'shape' => 'ShardInfo', ],
                'azs' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'Node' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
            ],
        ],
        'RedisShard' => [
            'type' => 'structure',
            'members' => [
                'master' =>  [ 'shape' => 'Node', ],
                'slaves' => [ 'type' => 'list', 'member' => [ 'shape' => 'Node', ], ],
            ],
        ],
        'InstanceVpcIp' => [
            'type' => 'structure',
            'members' => [
                'proxies' => [ 'type' => 'list', 'member' => [ 'shape' => 'Node', ], ],
                'shards' => [ 'type' => 'list', 'member' => [ 'shape' => 'RedisShard', ], ],
            ],
        ],
        'InternalInstance' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'region' => [ 'type' => 'string', 'locationName' => 'region', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'instanceStatus' => [ 'type' => 'string', 'locationName' => 'instanceStatus', ],
                'instanceVersion' => [ 'type' => 'string', 'locationName' => 'instanceVersion', ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'connectionDomain' => [ 'type' => 'string', 'locationName' => 'connectionDomain', ],
                'connectionPort' => [ 'type' => 'integer', 'locationName' => 'connectionPort', ],
                'auth' => [ 'type' => 'boolean', 'locationName' => 'auth', ],
                'frontAppIp' => [ 'type' => 'string', 'locationName' => 'frontAppIp', ],
                'ips' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'hostIps' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'NodeSpec' => [
            'type' => 'structure',
            'members' => [
                'cpuCores' => [ 'type' => 'integer', 'locationName' => 'cpuCores', ],
                'memoryGBs' => [ 'type' => 'integer', 'locationName' => 'memoryGBs', ],
                'totalDiskGBs' => [ 'type' => 'integer', 'locationName' => 'totalDiskGBs', ],
                'localDiskGBs' => [ 'type' => 'integer', 'locationName' => 'localDiskGBs', ],
                'cloudDiskGBs' => [ 'type' => 'integer', 'locationName' => 'cloudDiskGBs', ],
            ],
        ],
        'InstanceInternalSpec' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceMemoryGB' => [ 'type' => 'integer', 'locationName' => 'instanceMemoryGB', ],
                'nodeRoles' => [ 'type' => 'list', 'member' => [ 'shape' => 'NodeRole', ], ],
            ],
        ],
        'NodeRole' => [
            'type' => 'structure',
            'members' => [
                'kind' => [ 'type' => 'string', 'locationName' => 'kind', ],
                'num' => [ 'type' => 'integer', 'locationName' => 'num', ],
                'nodeSpec' =>  [ 'shape' => 'NodeSpec', ],
            ],
        ],
        'OrderStatus' => [
            'type' => 'structure',
            'members' => [
                'total' => [ 'type' => 'integer', 'locationName' => 'total', ],
                'success' => [ 'type' => 'integer', 'locationName' => 'success', ],
                'fail' => [ 'type' => 'integer', 'locationName' => 'fail', ],
                'inProcess' => [ 'type' => 'integer', 'locationName' => 'inProcess', ],
                'resourceIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'RedisCmd' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'data' => [ 'type' => 'long', 'locationName' => 'data', ],
            ],
        ],
        'RedisKey' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'db' => [ 'type' => 'integer', 'locationName' => 'db', ],
                'size' => [ 'type' => 'integer', 'locationName' => 'size', ],
                'keyType' => [ 'type' => 'string', 'locationName' => 'keyType', ],
                'frequency' => [ 'type' => 'integer', 'locationName' => 'frequency', ],
            ],
        ],
        'RedisType' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'keyNumber' => [ 'type' => 'long', 'locationName' => 'keyNumber', ],
                'keySize' => [ 'type' => 'long', 'locationName' => 'keySize', ],
                'ratio' => [ 'type' => 'float', 'locationName' => 'ratio', ],
            ],
        ],
        'SlowLog' => [
            'type' => 'structure',
            'members' => [
                'command' => [ 'type' => 'string', 'locationName' => 'command', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'executionTime' => [ 'type' => 'string', 'locationName' => 'executionTime', ],
                'shardId' => [ 'type' => 'string', 'locationName' => 'shardId', ],
            ],
        ],
        'TaskProgress' => [
            'type' => 'structure',
            'members' => [
                'taskType' => [ 'type' => 'string', 'locationName' => 'taskType', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
                'taskStatus' => [ 'type' => 'string', 'locationName' => 'taskStatus', ],
                'progressPercent' => [ 'type' => 'integer', 'locationName' => 'progressPercent', ],
                'elapsedTimeSecond' => [ 'type' => 'integer', 'locationName' => 'elapsedTimeSecond', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
            ],
        ],
        'DescribeAvailableRegionResultShape' => [
            'type' => 'structure',
            'members' => [
                'availableRegions' => [ 'type' => 'list', 'member' => [ 'shape' => 'AvailableRegion', ], ],
            ],
        ],
        'DescribeAvailableRegionResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAvailableRegionResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAvailableRegionRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeAvailableResourceResultShape' => [
            'type' => 'structure',
            'members' => [
                'availableResources' => [ 'type' => 'list', 'member' => [ 'shape' => 'AvailableResource', ], ],
            ],
        ],
        'DescribeAvailableResourceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAvailableResourceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeAvailableResourceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeClientIpDetailResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeClientIpDetailResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyCacheInstanceClassResultShape' => [
            'type' => 'structure',
            'members' => [
                'orderNum' => [ 'type' => 'string', 'locationName' => 'orderNum', ],
                'buyId' => [ 'type' => 'string', 'locationName' => 'buyId', ],
            ],
        ],
        'ModifyCacheInstanceAttributeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeBackupsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'baseId' => [ 'type' => 'string', 'locationName' => 'baseId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DescribeCacheInstancesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCacheInstancesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeClientListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeClientListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ResetCacheInstancePasswordResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyAnalysisTimeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'analysisTime' => [ 'type' => 'string', 'locationName' => 'analysisTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DescribeCacheInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'cacheInstance' =>  [ 'shape' => 'CacheInstance', ],
            ],
        ],
        'DescribeAnalysisTimeResultShape' => [
            'type' => 'structure',
            'members' => [
                'time' => [ 'type' => 'string', 'locationName' => 'time', ],
            ],
        ],
        'DescribeAnalysisTimeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeAnalysisTimeResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RestoreInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeCacheAnalysisListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'date' => [ 'type' => 'string', 'locationName' => 'date', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DeleteCacheInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DeleteCacheInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateCacheInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
                'orderNum' => [ 'type' => 'string', 'locationName' => 'orderNum', ],
                'buyId' => [ 'type' => 'string', 'locationName' => 'buyId', ],
            ],
        ],
        'DescribeSlowLogResultShape' => [
            'type' => 'structure',
            'members' => [
                'slowLogs' => [ 'type' => 'list', 'member' => [ 'shape' => 'SlowLog', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeInstanceConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DescribeClusterInfoRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DescribeCacheAnalysisListResultShape' => [
            'type' => 'structure',
            'members' => [
                'analyses' => [ 'type' => 'list', 'member' => [ 'shape' => 'CacheAnalysis', ], ],
            ],
        ],
        'ModifyCacheInstanceClassRequestShape' => [
            'type' => 'structure',
            'members' => [
                'cacheInstanceClass' => [ 'type' => 'string', 'locationName' => 'cacheInstanceClass', ],
                'shardNumber' => [ 'type' => 'integer', 'locationName' => 'shardNumber', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DescribeIpWhiteListResultShape' => [
            'type' => 'structure',
            'members' => [
                'ipWhiteList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeIpWhiteListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DescribeSlowLogResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSlowLogResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ResetCacheInstancePasswordResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeCacheInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
                'cacheInstances' => [ 'type' => 'list', 'member' => [ 'shape' => 'CacheInstance', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'CreateBackupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'backupType' => [ 'type' => 'integer', 'locationName' => 'backupType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'ModifyBackupPolicyResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeInstanceConfigResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceConfig' => [ 'type' => 'list', 'member' => [ 'shape' => 'ConfigItem', ], ],
            ],
        ],
        'DeleteCacheInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeClusterInfoResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeClusterInfoResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyAnalysisTimeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RestoreInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyCacheInstanceClassResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ModifyCacheInstanceClassResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateCacheAnalysisRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'ModifyCacheInstanceAttributeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'cacheInstanceName' => [ 'type' => 'string', 'locationName' => 'cacheInstanceName', ],
                'cacheInstanceDescription' => [ 'type' => 'string', 'locationName' => 'cacheInstanceDescription', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'ModifyIpWhiteListResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateCacheAnalysisResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeAnalysisTimeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DescribeTaskProgressListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeTaskProgressListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstanceConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstanceConfigResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeBackupsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBackupsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeTaskProgressListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'taskType' => [ 'type' => 'string', 'locationName' => 'taskType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DescribeClientListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DescribeCacheAnalysisResultResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCacheAnalysisResultResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeCacheInstancesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'sorts' => [ 'type' => 'list', 'member' => [ 'shape' => 'Sort', ], ],
                'tagFilters' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeCacheAnalysisResultRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
                'taskId' => [ 'type' => 'string', 'locationName' => 'taskId', ],
            ],
        ],
        'ModifyBackupPolicyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'backupTime' => [ 'type' => 'string', 'locationName' => 'backupTime', ],
                'backupPeriod' => [ 'type' => 'string', 'locationName' => 'backupPeriod', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DescribeDownloadUrlResultShape' => [
            'type' => 'structure',
            'members' => [
                'downloadUrls' => [ 'type' => 'list', 'member' => [ 'shape' => 'DownloadUrl', ], ],
            ],
        ],
        'DescribeBackupPolicyResultShape' => [
            'type' => 'structure',
            'members' => [
                'backupPeriod' => [ 'type' => 'string', 'locationName' => 'backupPeriod', ],
                'backupTime' => [ 'type' => 'string', 'locationName' => 'backupTime', ],
                'nextBackupTime' => [ 'type' => 'string', 'locationName' => 'nextBackupTime', ],
            ],
        ],
        'DescribeClientIpDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'ModifyInstanceConfigResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeCacheInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCacheInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeCacheAnalysisResultResultShape' => [
            'type' => 'structure',
            'members' => [
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'finishTime' => [ 'type' => 'string', 'locationName' => 'finishTime', ],
                'analysisType' => [ 'type' => 'integer', 'locationName' => 'analysisType', ],
                'stringBigKeys' => [ 'type' => 'list', 'member' => [ 'shape' => 'RedisKey', ], ],
                'otherBigKeys' => [ 'type' => 'list', 'member' => [ 'shape' => 'RedisKey', ], ],
                'hotKeys' => [ 'type' => 'list', 'member' => [ 'shape' => 'RedisKey', ], ],
                'cmdCallTimesTop' => [ 'type' => 'list', 'member' => [ 'shape' => 'RedisCmd', ], ],
                'cmdUseCpuTop' => [ 'type' => 'list', 'member' => [ 'shape' => 'RedisCmd', ], ],
                'keyTypeDistribution' => [ 'type' => 'object', 'locationName' => 'keyTypeDistribution', ],
                'keySizeDistribution' => [ 'type' => 'object', 'locationName' => 'keySizeDistribution', ],
            ],
        ],
        'DescribeClientIpDetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'details' => [ 'type' => 'list', 'member' => [ 'shape' => 'Details', ], ],
            ],
        ],
        'ModifyIpWhiteListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ipWhiteList' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'CreateCacheAnalysisResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeTaskProgressListResultShape' => [
            'type' => 'structure',
            'members' => [
                'taskProgresses' => [ 'type' => 'list', 'member' => [ 'shape' => 'TaskProgress', ], ],
            ],
        ],
        'DescribeClientListResultShape' => [
            'type' => 'structure',
            'members' => [
                'ips' => [ 'type' => 'list', 'member' => [ 'shape' => 'Ips', ], ],
            ],
        ],
        'CreateBackupResultShape' => [
            'type' => 'structure',
            'members' => [
                'baseId' => [ 'type' => 'string', 'locationName' => 'baseId', ],
            ],
        ],
        'CreateCacheInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'cacheInstance' =>  [ 'shape' => 'CacheInstanceSpec', ],
                'charge' =>  [ 'shape' => 'ChargeSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateCacheInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateCacheInstanceResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeBackupsResultShape' => [
            'type' => 'structure',
            'members' => [
                'backups' => [ 'type' => 'list', 'member' => [ 'shape' => 'Backup', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeCacheAnalysisListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeCacheAnalysisListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeIpWhiteListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeIpWhiteListResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyBackupPolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeBackupPolicyResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeBackupPolicyResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeDownloadUrlResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeDownloadUrlResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeSlowLogRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'shardId' => [ 'type' => 'string', 'locationName' => 'shardId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'RestoreInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'baseId' => [ 'type' => 'string', 'locationName' => 'baseId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'ModifyInstanceConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyInstanceConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceConfig' => [ 'type' => 'list', 'member' => [ 'shape' => 'ConfigItem', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'ResetCacheInstancePasswordRequestShape' => [
            'type' => 'structure',
            'members' => [
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'CreateBackupResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateBackupResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeClusterInfoResultShape' => [
            'type' => 'structure',
            'members' => [
                'info' =>  [ 'shape' => 'ClusterInfo', ],
            ],
        ],
        'ModifyCacheInstanceAttributeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ModifyAnalysisTimeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyIpWhiteListResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeDownloadUrlRequestShape' => [
            'type' => 'structure',
            'members' => [
                'baseId' => [ 'type' => 'string', 'locationName' => 'baseId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DescribeCacheInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DescribeBackupPolicyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'cacheInstanceId' => [ 'type' => 'string', 'locationName' => 'cacheInstanceId', ],
            ],
        ],
        'DescribeInstanceClassRequestShape' => [
            'type' => 'structure',
            'members' => [
                'redisVersion' => [ 'type' => 'string', 'locationName' => 'redisVersion', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeInstanceClassResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstanceClassResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstanceClassResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceClasses' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceClass', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeUserQuotaResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeUserQuotaResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeUserQuotaRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeUserQuotaResultShape' => [
            'type' => 'structure',
            'members' => [
                'quota' =>  [ 'shape' => 'Quota', ],
            ],
        ],
        'DescribeSpecConfigResultShape' => [
            'type' => 'structure',
            'members' => [
                'shardSpec' => [ 'type' => 'object', 'locationName' => 'shardSpec', ],
                'instanceSpec' =>  [ 'shape' => 'InstanceSpec', ],
            ],
        ],
        'DescribeSpecConfigRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeSpecConfigResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSpecConfigResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
    ],
];
