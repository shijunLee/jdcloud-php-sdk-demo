# 简介 #
  欢迎使用京东云开发者Php工具套件（Php SDK）。使用京东云Php SDK，您无需复杂编程就可以访问京东云提供的各种服务。 

  为了方便您理解SDK中的一些概念和参数的含义，使用SDK前建议您先查看[京东云OpenAPI使用入门](http://www.jdcloud.com/help/detail/355/isCatalog/0)。要了解每个API的具体参数和含义，请参考程序注释或参考OpenAPI&SDK下具体产品线的API文档。



# 环境准备 #
 1.京东云Php SDK适用于Php 5.5及以上。

 2.在开始调用京东云open API之前，需提前在京东云用户中心账户管理下的[AccessKey管理页面](https://uc.jdcloud.com/accesskey/index)申请accesskey和secretKey密钥对（简称AK/SK）。AK/SK信息请妥善保管，如果遗失可能会造成非法用户使用此信息操作您在云上的资源，给你造成数据和财产损失。



# SDK使用方法 #
建议使用Composer安装京东云Php SDK： 

首先在composer.json添加

	"require" : {
		"php" : ">=5.5",
		"jdcloud-api/jdcloud-sdk-php" : ">=4.0.0"
	}
    

然后使用Composer安装

    php composer.phar install

或

    composer install 

您还可以下载sdk源代码自行使用。

 

SDK使用中的任何问题，欢迎您[SDK使用问题反馈页面](https://github.com/jdcloud-api/jdcloud-sdk-php/issues)交流。



注意：京东云并没有提供其他下载方式，请务必使用上述官方下载方式！

 

## 调用示例 ##
以下是创建单个云主机实例详情的调用示例

	use Jdcloud\Credentials\Credentials;
    use Jdcloud\Result;
    use Jdcloud\Vm\VmClient;
    public function testCreateInstances()
    {
        $vm = new VmClient([
            'credentials'  => new Credentials('ak', 'sk'),
            'version' => 'latest',
            'scheme' => 'https'
        ]);
        
        
        try{
            $res = $vm->createInstances([
                'regionId'  => 'cn-north-1',
                'instanceSpec' => [
                    'az' => 'cn-north-1a',
                    'imageId' => '8e187a0a-ea7c-4ad1-ba32-f21e52fb8926',
                    'instanceType' =>  'g.n2.medium',
                    'name' => 'phpcreate',
                    'primaryNetworkInterface' => [
                        'networkInterface' => [
                            'subnetId' => 'subnet-ll47yy373i'
                         ]
                    ],
                    'systemDisk' => [
                        'diskCategory' => 'local'
                    ]
                ]
            ]);
            print_r($res);
            print("Request Id: ". $res['requestId']. "\n");
            print_r($res['result']);
        }catch (\Jdcloud\Exception\JdcloudException $e) {
            print("Detail Message: " . $e->getMessage(). "\n");
            print("Request Id: ". $e->getJdcloudRequestId(). "\n");
            print("Error Type: ". $e->getJdcloudErrorType(). "\n");
            print("Error Code: " . $e->getJdcloudErrorCode(). "\n");
            print("Error Detail Status: ". $e->getJdcloudErrorStatus(). "\n");
            print("Error Detail Message: ". $e->getJdcloudErrorMessage(). "\n");
        }
    }

如果需要设置额外的header，例如要调用开启了MFA操作保护的接口，需要传递x-jdcloud-security-token，则按照如下方式：

        $res = $vm->deleteInstances([
            'regionId'  => 'cn-north-1',
            'instanceId'  => 'xxx',
            'extraHeaders' => [
                'x-jdcloud-security-token' => 'xxxx'
            ]
        ]);

如果需要设置访问点，配置超时等，请参考如下更复杂的例子：
```
$fix_endpoint = EndpointProvider::patterns([
    '*/*' => ['endpoint' => 'vm.cn-north-1.jdcloud-api.com'] //指定非默认访问地址 step 1
]);

$vm = new VmClient([
    'credentials'  => new Credentials('ak', 'sk'),
    'version' => 'latest',
     'debug' => [
         'logfn'        => function ($msg) { echo $msg . "\n"; }, //输出调试详细日志
         ],
     'validate' => false, //关闭客户端参数验证
     'endpoint_provider' => $fix_endpoint, //指定非默认访问地址 step 2
     'scheme' => 'https',
     'http'    => [
        'verify' => 'C:/ca-bundle.crt', //指定本地证书文件
        'connect_timeout' => 20,   //指定连接超时  
	'proxy' => 'http://192.168.16.1:10', //指定代理
         'timeout' => 5   //指定请求超时 
    ]
]);
```
        
更多调用示例参考  [SDK使用Demo](https://github.com/jdcloud-api/jdcloud-sdk-php/tree/master/tests)
