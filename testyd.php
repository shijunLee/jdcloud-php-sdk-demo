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
            'appId'  => 'testAppId',
            'signId'  => 'testSignId',
            'templateId'  => 'testTemplateId',
            'venderId'  => 'testVenderId',
            'orderId'  => 'testOrderId',
            'params'  => array("Volvo","BMW","Toyota"),
    ]);
    var_dump($res);  
    }catch (\Jdcloud\Exception\JdcloudException $e) {
        print("ERROR");
        var_dump($e->getMessage());
    }
}
 
testSendMessagesByOrderIdUsingPOST();
?>
