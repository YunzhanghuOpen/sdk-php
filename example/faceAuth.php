<?php
define('TEST_PATH', dirname(__FILE__));
include_once(TEST_PATH . '/../vendor/autoload.php');
include_once(TEST_PATH . '/test_var.php');

use Yzh\Config;
use Yzh\FaceAuthServiceClient;
use Yzh\Model\Faceauth\ApplyFaceAuthRequest;
use Yzh\Model\Faceauth\GetFaceAuthResultRequest;

// 人脸识别实名核验
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
    $faceAuthClient = new FaceAuthServiceClient($config);
} catch (\Exception $e) {
    die($e->getMessage());
}

// 申请人脸识别实名核验
$request = new ApplyFaceAuthRequest(array(
    'dealer_id' => $test_var['app_dealer_id'],       // 平台企业 ID
    'broker_id' => $test_var['app_broker_id'],       // 综合服务主体 ID
    'real_name' => '张三',                            // 姓名
    'id_card' => '11010519491231002X',               // 身份证号码
    'verification_id' => 'verification123456',       // 平台企业实名核验 ID
    'callback_url' => 'https://www.example.com',     // 回调地址
    'redirect_url' => 'https://www.example.com',     // 跳转 URL
    'color' => '#8171ff',                            // H5页面主题颜色
));

/*
 * request-id：请求 ID，请求的唯一标识
 * 建议平台企业自定义 request-id，并记录在日志中，便于问题发现及排查
 * 如未自定义 request-id，将使用 SDK 中的 random 方法自动生成。注意：random 方法生成的 request-id 不能保证全局唯一，推荐自定义 request-id
 */
$request->setRequestID("requestIdExample123456789");
$response = $faceAuthClient->applyFaceAuth($request);
if ($response->isSuccess()) {
    // 操作成功
    $data = $response->getData();
    var_dump($data);
} else {
    // 失败返回
    echo 'code:' . $response->getCode() . ' message:' . $response->getMessage() . ' request-id:' . $response->getRequestID();
}

// 查询人脸识别实名核验结果
$request = new GetFaceAuthResultRequest(array(
    'dealer_id' => $test_var['app_dealer_id'],       // 平台企业 ID
    'broker_id' => $test_var['app_broker_id'],       // 综合服务主体 ID
    'record_id' => 'record123456',                   // 人脸识别实名核验唯一 ID
    'verification_id' => 'verification123456',       // 平台企业实名核验 ID
));

/*
 * request-id：请求 ID，请求的唯一标识
 * 建议平台企业自定义 request-id，并记录在日志中，便于问题发现及排查
 * 如未自定义 request-id，将使用 SDK 中的 random 方法自动生成。注意：random 方法生成的 request-id 不能保证全局唯一，推荐自定义 request-id
 */
$request->setRequestID("requestIdExample123456789");
$response = $faceAuthClient->getFaceAuthResult($request);
if ($response->isSuccess()) {
    // 操作成功
    $data = $response->getData();
    var_dump($data);
} else {
    // 失败返回
    echo 'code:' . $response->getCode() . ' message:' . $response->getMessage() . ' request-id:' . $response->getRequestID();
}
