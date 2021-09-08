<?php
include __DIR__ . '/vendor/autoload.php';

use Jdcloud\Credentials\Credentials;
use Jdcloud\Result;
use Jdcloud\Cdn\CdnClient; 

function getCred(){ 
    $cred = new Credentials('your ak', 'your sk');
    return $cred;
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
 
testQueryMixStatisticsData();
?>
