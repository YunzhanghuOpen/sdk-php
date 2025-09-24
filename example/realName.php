<?php
define('TEST_PATH', dirname(__FILE__));
include_once(TEST_PATH . '/../vendor/autoload.php');
include_once(TEST_PATH . '/test_var.php');

use Yzh\RealNameServiceClient;
use Yzh\Config;
use Yzh\Model\Realname\CollectRealNameInfoRequest;
use Yzh\Model\Realname\QueryRealNameInfoRequest;


// 实名信息收集
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
    $realNameServiceClient = new RealNameServiceClient($config);
    $realNameServiceClient->setEnv(RealNameServiceClient::ENV_SANDBOX);// 沙箱环境
} catch (\Exception $e) {
    die($e->getMessage());
}


// 用户实名认证信息收集-人脸认证方式
$request = new CollectRealNameInfoRequest(array(
    'dealer_id' => $test_var['app_dealer_id'], // 平台企业 ID
    'broker_id' => $test_var['app_broker_id'], // 综合服务主体 ID
    'real_name' => "张三", // 姓名
    'id_card' => "11010519491231002X", // 证件号
    'realname_result' => 1, // 实名认证结果	
    'realname_time' => "2025-09-09 19:19:19", // 实名认证通过时间	
    'realname_type' => 1, // 实名认证方式	
    'realname_trace_id' => "1413536187796566016", // 实名认证唯一可追溯编码	
    'realname_platform' => "xxxxxxx公司", // 认证平台	
    'face_image_collect_type' => 1, // 人脸照片收集类型
    'face_image' => "https://www.example.com/file_name.png", // 人脸照片下载链接	
    'face_verify_score' => "89.12", // 人脸识别验证分数	
));

/*
 * request-id：请求 ID，请求的唯一标识
 * 建议平台企业自定义 request-id，并记录在日志中，便于问题发现及排查
 * 如未自定义 request-id，将使用 SDK 中的 random 方法自动生成。注意：random 方法生成的 request-id 不能保证全局唯一，推荐自定义 request-id
 */
$request->setRequestID("requestIdExample123456789");
$response = $realNameServiceClient->collectRealNameInfo($request);
if ($response->isSuccess()) {
    // 操作成功
    $data = $response->getData();
    var_dump($data);
} else {
    // 失败返回
    echo 'code:' . $response->getCode() . ' message:' . $response->getMessage() . ' request-id:' . $response->getRequestID();
}


// 用户实名认证信息收集-银行卡四要素认证方式
$request = new CollectRealNameInfoRequest(array(
    'dealer_id' => $test_var['app_dealer_id'], // 平台企业 ID
    'broker_id' => $test_var['app_broker_id'], // 综合服务主体 ID
    'real_name' => "张三", // 姓名
    'id_card' => "11010519491231002X", // 证件号
    'realname_result' => 1, // 实名认证结果	
    'realname_time' => "2025-09-09 19:19:19", // 实名认证通过时间	
    'realname_type' => 2, // 实名认证方式	
    'realname_trace_id' => "1413536187796566016", // 实名认证唯一可追溯编码	
    'realname_platform' => "xxxxxxx公司", // 认证平台	
    'bank_no' => "6127000xxxxxxx16", // 银行卡号	
    'bank_phone' => "188xxx8888", // 银行预留手机号	
));

/*
 * request-id：请求 ID，请求的唯一标识
 * 建议平台企业自定义 request-id，并记录在日志中，便于问题发现及排查
 * 如未自定义 request-id，将使用 SDK 中的 random 方法自动生成。注意：random 方法生成的 request-id 不能保证全局唯一，推荐自定义 request-id
 */
$request->setRequestID("requestIdExample123456789");
$response = $realNameServiceClient->collectRealNameInfo($request);
if ($response->isSuccess()) {
    // 操作成功
    $data = $response->getData();
    var_dump($data);
} else {
    // 失败返回
    echo 'code:' . $response->getCode() . ' message:' . $response->getMessage() . ' request-id:' . $response->getRequestID();
}


// 用户实名认证信息收集-人工审核
$request = new CollectRealNameInfoRequest(array(
    'dealer_id' => $test_var['app_dealer_id'], // 平台企业 ID
    'broker_id' => $test_var['app_broker_id'], // 综合服务主体 ID
    'real_name' => "张三", // 姓名
    'id_card' => "11010519491231002X", // 证件号
    'realname_result' => 1, // 实名认证结果	
    'realname_time' => "2025-09-09 19:19:19", // 实名认证通过时间	
    'realname_type' => 3, // 实名认证方式	
    'realname_trace_id' => "1413536187796566016", // 实名认证唯一可追溯编码	
    'realname_platform' => "xxxxxxx公司", // 认证平台	
    'face_image_collect_type' => 1, // 人脸照片收集类型
    'face_image' => "https://www.example.com/file_name.png", // 人脸照片下载链接	
    'face_verify_score' => "89.12", // 人脸识别验证分数	
    'bank_no' => "6127000xxxxxxx16", // 银行卡号	
    'bank_phone' => "188xxx8888", // 银行预留手机号	
    'reviewer' => "908xxx8888", // 平台企业审核人	
));

/*
 * request-id：请求 ID，请求的唯一标识
 * 建议平台企业自定义 request-id，并记录在日志中，便于问题发现及排查
 * 如未自定义 request-id，将使用 SDK 中的 random 方法自动生成。注意：random 方法生成的 request-id 不能保证全局唯一，推荐自定义 request-id
 */
$request->setRequestID("requestIdExample123456789");
$response = $realNameServiceClient->collectRealNameInfo($request);
if ($response->isSuccess()) {
    // 操作成功
    $data = $response->getData();
    var_dump($data);
} else {
    // 失败返回
    echo 'code:' . $response->getCode() . ' message:' . $response->getMessage() . ' request-id:' . $response->getRequestID();
}


// 用户实名认证信息查询
$request = new QueryRealNameInfoRequest(array(
    'dealer_id' => $test_var['app_dealer_id'], // 平台企业 ID
    'broker_id' => $test_var['app_broker_id'], // 综合服务主体 ID
    'real_name' => "张三", // 姓名
    'id_card' => "11010519491231002X", // 证件号
));

/*
 * request-id：请求 ID，请求的唯一标识
 * 建议平台企业自定义 request-id，并记录在日志中，便于问题发现及排查
 * 如未自定义 request-id，将使用 SDK 中的 random 方法自动生成。注意：random 方法生成的 request-id 不能保证全局唯一，推荐自定义 request-id
 */
$request->setRequestID("requestIdExample123456789");
$response = $realNameServiceClient->queryRealNameInfo($request);
if ($response->isSuccess()) {
    // 操作成功
    $data = $response->getData();
    var_dump($data);
} else {
    // 失败返回
    echo 'code:' . $response->getCode() . ' message:' . $response->getMessage() . ' request-id:' . $response->getRequestID();
}