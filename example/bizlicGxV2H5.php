<?php
define('TEST_PATH', dirname(__FILE__));
include_once(TEST_PATH . '/../vendor/autoload.php');
include_once(TEST_PATH . '/test_var.php');

use Yzh\Config;
use Yzh\BizlicGxV2H5ServiceClient;
use Yzh\Model\Bizlicgxv2h5\GxV2H5GetStartUrlRequest;
use Yzh\Model\Bizlicgxv2h5\GxV2H5GetAicStatusRequest;

// 个体工商户注册（云账户共享大额 H5）
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
    $bizH5Client = new BizlicGxV2H5ServiceClient($config);
} catch (\Exception $e) {
    die($e->getMessage());
}

// 预启动
$request = new GxV2H5GetStartUrlRequest(array(
    'dealer_id' => $test_var['app_dealer_id'],      // 平台企业 ID
    'broker_id' => $test_var['app_broker_id'],      // 综合服务主体 ID
    'dealer_user_id' => 'userId1234567890',         // 平台企业端的用户 ID，在平台企业系统唯一且不变
    'client_type' => 1,                             // 客户端类型
    'notify_url' => 'https://www.example.com',      // 异步通知 URL
    'color' => '#007AFF',                           // H5 页面主题颜色
    'return_url' => 'https://www.example.com',      // 跳转 URL
    'customer_title' => 1                           // H5 页面 Title
));

/*
 * request-id：请求 ID，请求的唯一标识
 * 建议平台企业自定义 request-id，并记录在日志中，便于问题发现及排查
 * 如未自定义 request-id，将使用 SDK 中的 random 方法自动生成。注意：random 方法生成的 request-id 不能保证全局唯一，推荐自定义 request-id
 */
$request->setRequestID("requestIdExample123456789");
$response = $bizH5Client->gxV2H5GetStartUrl($request);
if ($response->isSuccess()) {
    // 操作成功
    $data = $response->getData();
    var_dump($data);
} else {
    // 失败返回
    echo 'code:' . $response->getCode() . ' message:' . $response->getMessage() . ' request-id:' . $response->getRequestID();
}

// 查询个体工商户状态
$request = new GxV2H5GetAicStatusRequest(array(
    'dealer_id' => $test_var['app_dealer_id'],      // 平台企业 ID
    'broker_id' => $test_var['app_broker_id'],      // 综合服务主体 ID
    'open_id' => 'openId1234567890',                // 用户唯一标识
    'dealer_user_id' => 'userId1234567890',         // 平台企业端的用户 ID，在平台企业系统唯一且不变
    'real_name' => '张三',                           // 姓名
    'id_card' => '11010519491231002X',              // 身份证号码
));

/*
 * request-id：请求 ID，请求的唯一标识
 * 建议平台企业自定义 request-id，并记录在日志中，便于问题发现及排查
 * 如未自定义 request-id，将使用 SDK 中的 random 方法自动生成。注意：random 方法生成的 request-id 不能保证全局唯一，推荐自定义 request-id
 */
$request->setRequestID("requestIdExample123456789");
$response = $bizH5Client->gxV2H5GetAicStatus($request);
if ($response->isSuccess()) {
    // 操作成功
    $data = $response->getData();
    var_dump($data);
} else {
    // 失败返回
    echo 'code:' . $response->getCode() . ' message:' . $response->getMessage() . ' request-id:' . $response->getRequestID();
}
