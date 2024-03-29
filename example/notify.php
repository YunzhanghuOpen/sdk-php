<?php
define('TEST_PATH', dirname(__FILE__));
include_once(TEST_PATH . '/../vendor/autoload.php');
include_once(TEST_PATH . '/test_var.php');

use Yzh\Config;
use Yzh\Model\Notify\NotifyRequest;
use Yzh\NotifyClient;

$config = Config::newFromArray(array(
    'app_dealer_id' => $test_var['app_dealer_id'],
    'app_broker_id' => $test_var['app_broker_id'],
    'app_key' => $test_var['app_key'],
    'app_des3_key' => $test_var['app_des3_key'],
    'app_private_key' => $test_var['app_private_key'],
    'yzh_public_key' => $test_var['yzh_public_key'],
    'sign_type' => $test_var['sign_type'],
));

$data = $_POST['data'];
$mess = $_POST['mess'];
$timestamp = $_POST['timestamp'];
$sign = $_POST['sign'];

$notifyClient = new NotifyClient ($config);
$notifyReq = new NotifyRequest ($data, $mess, $timestamp, $sign) ;
try {
    $result = $notifyClient->verifyAndDecrypt($notifyReq);
    if($result)
        var_dump($result);
}
catch(\Exception $e){
    var_dump($e->getMessage ()) ;
    exit ();
}

//  echo "success";       // 回写 success，终止本次回调
