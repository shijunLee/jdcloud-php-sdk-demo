<?php
include __DIR__ . '/vendor/autoload.php';

use Jdcloud\Credentials\Credentials;
use Jdcloud\Result;
use Jdcloud\Vm\VmClient;
use Jdcloud\Vpc\VpcClient;

function getCred(){ 
    $cred = new Credentials('your ak', 'your sk');
    return $cred;
}
function testDescribeVpcs()
{ 
    $client = new VpcClient([
        'credentials'  =>  getCred(),
        'version' => 'latest', 
        'scheme' => 'http'
    ]);


    try{
        $res = $client->describeVpcs([
            'regionId'  => 'cn-north-1',
            'pageNumber'  => '1',
            'pageSize'  => '10'
    ]);
    var_dump($res);
    // $this->assertNotNull($res);
    // $this->assertNotNull($res['requestId']);
    // $this->assertNotNull($res['result']);
    // $this->assertNotNull($res['result']['totalCount']);
    }catch (\Jdcloud\Exception\JdcloudException $e) {
        print("ERROR");
        var_dump($e->getMessage());
        
    }
}
function testCreateInstances()
{
    $vm = new VmClient([
        'credentials'  => getCred(), 
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
testDescribeVpcs();
?>
