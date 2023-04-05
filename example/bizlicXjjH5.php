<?php
define('TEST_PATH', dirname(__FILE__));
include_once(TEST_PATH . '/../vendor/autoload.php');
include_once(TEST_PATH . '/test_var.php');

use Yzh\Config;
use Yzh\BizlicXjjH5ServiceClient;

use Yzh\Model\Bizlicxjjh5\H5EcoCityAicStatusRequest;
use Yzh\Model\Bizlicxjjh5\H5GetStartUrlRequest;

// 个体工商户注册（云账户新经济 H5）


$config = Config::newFromArray(array(
    'app_dealer_id' => $test_var['app_dealer_id'],
    'app_broker_id' => $test_var['app_broker_id'],
    'app_key' => $test_var['app_key'],
    'app_des3_key' => $test_var['app_des3_key'],
    'app_private_key' => $test_var['app_private_key'],
    'yzh_public_key' => $test_var['yzh_public_key'],
    'sign_type' => $test_var['sign_type']

));

try {
    $bizH5Client = new  BizlicXjjH5ServiceClient($config);
    $bizH5Client->setEnv(BizlicXjjH5ServiceClient::ENV_PROD);
} catch (\Exception $e) {
    die($e->getMessage());
}

// 预启动
$request = new H5GetStartUrlRequest(array(
    'dealer_id' => $test_var['app_dealer_id'],      // 平台企业 ID
    'broker_id' => $test_var['app_broker_id'],      // 综合服务主体 ID
    'dealer_user_id' => 'test03',                   // 平台企业端的用户 ID，在平台企业系统唯一且不变
    'client_type' => 1,                             // 客户端类型
    'notify_url' => 'http://localhost',             // 异步通知 URL
    'color' => '#007AFF',                           // H5 页面主体颜色
    'return_url' => 'http://localhost',             // 跳转 URL
    'customer_title' => 1                           // H5 页面 Title

));
$response = $bizH5Client->h5GetStartUrl($request);
var_dump($response);

// 查询个体工商户状态
$request = new H5EcoCityAicStatusRequest(array(
    'dealer_id' => $test_var['app_dealer_id'],      // 平台企业 ID
    'broker_id' => $test_var['app_broker_id'],      // 综合服务主体 ID
    'open_id' => '',                                // 用户唯一标识
    'dealer_user_id' => 'test03',                   // 平台企业端的用户 ID，在平台企业系统唯一且不变
    'real_name' => '张三',                           // 姓名
    'id_card' => '120110199901112222',              // 身份证号码

));
$response = $bizH5Client->h5EcoCityAicStatus($request);
var_dump($response);
