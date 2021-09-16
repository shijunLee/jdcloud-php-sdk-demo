<?php
include __DIR__ . '/vendor/autoload.php';

use Jdcloud\Credentials\Credentials;
use Jdcloud\Result;
use Jdcloud\Cdn\CdnClient; 

function getCred(){ 
   $accessKey = getenv('JDCLOUD_ACCESS_KEY');
   $accessSecretKey = getenv('JDCLOUD_SECRET_ACCESS_KEY');
   $cred = new Credentials($accessKey, $accessSecretKey);
     return $cred;
}

function testQueryStatisticsData()
{
    $client = new CdnClient([
        'credentials'  =>  getCred(),
        'version' => 'latest', 
        'scheme' => 'http',
       
    ]); 
    try{ 
        $res = $client->queryStatisticsData([
            'startTime'  => "2021-09-14T04:00:10Z",
            'endTime'  =>  "2021-09-14T05:20:10Z",
            'domain'  => 'cdn-zhulongimg.jdcloud.com',
            'period'  => 'fiveMin',
            
    ]);
    var_dump($res);
    // $this->assertNotNull($res);
    // $this->assertNotNull($res['requestId']);
    // $this->assertNotNull($res['result']); 
    }catch (\Jdcloud\Exception\JdcloudException $e) {
        print("ERROR");
        var_dump($e->getMessage());
        
    }
}


function testQueryMixStatisticsData()
{ 
    $client = new CdnClient([
        'credentials'  =>  getCred(),
        'version' => 'latest', 
        'scheme' => 'http'
    ]);


    try{
        $startDate = time()-3600;
        $endDate = time();
        $res = $client->queryMixStatisticsData([
            'startTime'  => date("Y-m-d\TH:i:s\Z",$startDate-8*3600),
            'endTime'  => date("Y-m-d\TH:i:s\Z",$endDate-8*3600),
            'domain'  => 'doc.jdcloud.com',
            'period'  => 'fiveMin'
    ]);
    var_dump($res);
    // $this->assertNotNull($res);
    // $this->assertNotNull($res['requestId']);
    // $this->assertNotNull($res['result']); 
    }catch (\Jdcloud\Exception\JdcloudException $e) {
        print("ERROR");
        var_dump($e->getMessage());
        
    }
}
 
testQueryStatisticsData();
?>
