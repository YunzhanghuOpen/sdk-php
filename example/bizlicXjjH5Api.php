<?php
define('TEST_PATH', dirname(__FILE__));
include_once(TEST_PATH . '/../vendor/autoload.php');
include_once(TEST_PATH . '/test_var.php');

use Yzh\Config;
use Yzh\BizlicXjjH5APIServiceClient;

use Yzh\Model\Bizlicxjjh5api\H5PreCollectBizlicMsgRequest;
use Yzh\Model\Bizlicxjjh5api\H5APIGetStartUrlRequest;
use Yzh\Model\Bizlicxjjh5api\H5APIEcoCityAicStatusRequest;

// 个体工商户注册（云账户新经济 H5+API）

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
    $bizH5APIClient = new  \Yzh\BizlicXjjH5APIServiceClient($config);
    $bizH5APIClient->setEnv(BizlicXjjH5APIServiceClient::ENV_PROD);
} catch (\Exception $e) {
    die($e->getMessage());
}

// 工商实名信息录入
$request = new H5PreCollectBizlicMsgRequest(array(
    'dealer_id' => $test_var['app_dealer_id'],      // 平台企业 ID
    'broker_id' => $test_var['app_broker_id'],      // 综合服务主体 ID
    'dealer_user_id' => 'zyqtest01',                // 平台企业端的用户 ID，在平台企业系统唯一且不变
    'phone_no' => '88888888888',                    // 手机号
    'real_name' => '张三',                           // 姓名
    'id_card' => '120110199901112222',              // 身份证号码
    'id_card_address' => '',                        // 身份证住址
    'id_card_agency' => '',                         // 身份证签发机关
    'id_card_nation' => '20',                       // 身份证民族，需要传编码
    'id_card_validity_start' => '',                 // 身份证有效期开始时间
    'id_card_validity_end' => ''                    // 身份证有效期结束时间
));
$response = $bizH5APIClient->h5PreCollectBizlicMsg($request);
var_dump($response);

// 预启动
$request = new H5APIGetStartUrlRequest(array(
    'dealer_id' => $test_var['app_dealer_id'],      // 平台企业 ID
    'broker_id' => $test_var['app_broker_id'],      // 综合服务主体 ID
    'dealer_user_id' => 'test01',                   // 平台企业端的用户 ID，在平台企业系统唯一且不变
    'client_type' => 2,                             // 客户端类型
    'notify_url' => 'http://localhost',             // 异步通知 URL
    'color' => '#007AFF',                           // H5 页面主体颜色
    'return_url' => 'http://localhost',             // 跳转 URL
    'customer_title' => 1                           // H5 页面 Title

));
$response = $bizH5APIClient->h5APIGetStartUrl($request);
var_dump($response);

// 查询个体工商户状态
$request = new H5APIEcoCityAicStatusRequest(array(
    'dealer_id' => $test_var['app_dealer_id'],      // 平台企业 ID
    'broker_id' => $test_var['app_broker_id'],      // 综合服务主体 ID
    'open_id' => '',                                // 用户唯一标识
    'dealer_user_id' => 'test01',                   // 平台企业端的用户 ID，在平台企业系统唯一且不变
    'real_name' => '张三',                           // 姓名
    'id_card' => '120110199901112222',              // 身份证号码

));
$response = $bizH5APIClient->h5APIEcoCityAicStatus($request);
var_dump($response);
