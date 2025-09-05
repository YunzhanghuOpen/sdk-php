<?php
define('TEST_PATH', dirname(__FILE__));
include_once(TEST_PATH . '/../vendor/autoload.php');
include_once(TEST_PATH . '/test_var.php');

use Yzh\Config;
use Yzh\CustomerLinkClient;

$config = Config::newFromArray(array(
    'app_dealer_id' => $test_var['app_dealer_id'],
    'app_broker_id' => $test_var['app_broker_id'],
    'app_key' => $test_var['app_key'],
    'app_des3_key' => $test_var['app_des3_key'],
    'app_private_key' => $test_var['app_private_key'],
    'yzh_public_key' => $test_var['yzh_public_key'],
    'sign_type' => $test_var['sign_type'],
));

$customerLinkClient = new CustomerLinkClient($config);

try {
    $result = $customerLinkClient->getCustomerLink('https://www.example.com', 'testmemberid');
    if($result)
        var_dump($result);
}
catch(\Exception $e){
    var_dump($e->getMessage ()) ;
    exit ();
}