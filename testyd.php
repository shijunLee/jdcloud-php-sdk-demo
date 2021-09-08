<?php
include __DIR__ . '/vendor/autoload.php';

use Jdcloud\Credentials\Credentials;
use Jdcloud\Result;
use Jdcloud\Ydsms\YdsmsClient; 

function getCred(){ 
    $accessKey = getenv('JDCLOUD_ACCESS_KEY');
    $accessSecretKey = getenv('JDCLOUD_SECRET_ACCESS_KEY');
    $cred = new Credentials($accessKey, $accessSecretKey);
    return $cred;
}
function testSendMessagesByOrderIdUsingPOST()
{ 
    $client = new YdsmsClient([
        'credentials'  =>  getCred(),
        'version' => 'latest', 
        'scheme' => 'http'
    ]);


    try{  
        $res = $client->sendMessagesByOrderIdUsingPOST([
            'appId'  => 'yd-app-15e77328d2',
            'signId'  => 'a202a61ae08a4da8aef50193cb50bd83',
            'templateId'  => 'e73f7a3071c340cc984f05ca187ac9d7',
            'venderId'  => '123',
            'orderId'  => '554454548',
            'params'  => array("a","b","c"),
    ]);
    var_dump($res);  
    print("获取错误信息如下:</br>");
    var_dump($res["error"]);  
    }catch (\Jdcloud\Exception\JdcloudException $e) {
        print("ERROR:</br>");
        var_dump($e->getMessage());
        print("--------------------------------------获取请求结果信息-----------------------------------</br>");
        $result = $e->getJdcloudErrorMessage();
        var_dump($result);
    }
}
 
testSendMessagesByOrderIdUsingPOST();
?>
