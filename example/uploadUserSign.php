<?php
define('TEST_PATH', dirname(__FILE__));
include_once(TEST_PATH . '/../vendor/autoload.php');
include_once(TEST_PATH . '/test_var.php');

use Yzh\UploadUserSignServiceClient;
use Yzh\Config;
use Yzh\Model\Uploadusersign\UploadUserSignRequest;
use Yzh\Model\Uploadusersign\GetUploadUserSignStatusRequest;

// 用户签约（签约信息上传）
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
    $uploadUserSignClient = new UploadUserSignServiceClient($config);
} catch (\Exception $e) {
    die($e->getMessage());
}

// 用户签约信息上传
$request = new UploadUserSignRequest(array(
    'dealer_id' => $test_var['app_dealer_id'],    // 平台企业 ID
    'broker_id' => $test_var['app_broker_id'],    // 综合服务主体 ID
    'real_name' => '张三',                         // 姓名
    'id_card' => '110121202202222222',            // 证件号码
    'phone' => '188****8888',                     // 手机号
    'is_abroad'=> false,                          // 是否是海外用户
    'notify_url' => 'https://www.example.com'      // 签约回调地址
));

/*
 * request-id：请求 ID，请求的唯一标识
 * 建议平台企业自定义 request-id，并记录在日志中，便于问题发现及排查
 * 如平台企业未自定义 request-id，将使用 SDK 中的 random 方法自动生成。注意：random 方法生成的 request-id 不能保证全局唯一，推荐自定义
 */
$request->setRequestID("requestIdExample123456789");
$response = $uploadUserSignClient->uploadUserSign($request);
if ($response->isSuccess()) {
    // 操作成功
    $data = $response->getData();
    var_dump($data);
} else {
    // 失败返回
    echo 'code:' . $response->getCode() . ' message:' . $response->getMessage() . ' request-id:' . $response->getRequestID();
}

// 获取用户签约状态
$request = new GetUploadUserSignStatusRequest(array(
    'dealer_id' => $test_var['app_dealer_id'],    // 平台企业 ID
    'broker_id' => $test_var['app_broker_id'],    // 综合服务主体 ID
    'real_name' => '张三',                         // 姓名
    'id_card' => '110121202202222222',            // 证件号码
));

/*
 * request-id：请求 ID，请求的唯一标识
 * 建议平台企业自定义 request-id，并记录在日志中，便于问题发现及排查
 * 如平台企业未自定义 request-id，将使用 SDK 中的 random 方法自动生成。注意：random 方法生成的 request-id 不能保证全局唯一，推荐自定义
 */
$request->setRequestID("requestIdExample123456789");
$response = $uploadUserSignClient->getUploadUserSignStatus($request);
if ($response->isSuccess()) {
    // 操作成功
    $data = $response->getData();
    var_dump($data);
} else {
    // 失败返回
    echo 'code:' . $response->getCode() . ' message:' . $response->getMessage() . ' request-id:' . $response->getRequestID();
}
