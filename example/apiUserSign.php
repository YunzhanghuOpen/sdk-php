<?php
define('TEST_PATH', dirname(__FILE__));
include_once(TEST_PATH . '/../vendor/autoload.php');
include_once(TEST_PATH . '/test_var.php');

use Yzh\ApiUserSignServiceClient;
use Yzh\Config;
use Yzh\Model\Apiusersign\ApiUserSignRequest;
use Yzh\Model\Apiusersign\ApiUserSignContractRequest;
use Yzh\Model\Apiusersign\ApiUserSignReleaseRequest;
use Yzh\Model\Apiusersign\GetApiUserSignStatusRequest;

// 用户签约（API 签约）

$config = Config::newFromArray(array(
    'app_dealer_id' => $test_var['app_dealer_id'],
    'app_broker_id' => $test_var['app_broker_id'],
    'app_key' => $test_var['app_key'],
    'app_des3_key' => $test_var['app_des3_key'],
    'app_private_key' => $test_var['app_private_key'],
    'yzh_public_key' => $test_var['yzh_public_key'],
    'sign_type' => $test_var['sign_type']
));

$apiUserSignClient = new ApiUserSignServiceClient($config);
// $apiUserSignClient->setEnv(ApiUserSignServiceClient::ENV_SANDBOX);// 沙箱环境

// 获取协议预览 URL
$request = new ApiUserSignContractRequest(array(
    'dealer_id' => $test_var['app_dealer_id'],    // 平台企业 ID
    'broker_id' => $test_var['app_broker_id'],    // 综合服务主体 ID

));
$response = $apiUserSignClient->apiUserSignContract($request);
if ($response->isSuccess()) {
    $data = $response->getData();
    var_dump($data);
} else {
    echo 'code:' . $response->getCode() . ' message:' . $response->getMessage() . ' request-id:' . $response->getRequestID();
}

// 用户签约
$request = new ApiUserSignRequest(array(
    'dealer_id' => $test_var['app_dealer_id'],    // 平台企业 ID
    'broker_id' => $test_var['app_broker_id'],    // 综合服务主体 ID
    'real_name' => '张三',                         // 姓名
    'id_card' => '110101012345678910',            // 证件号
    'card_type' => 'idcard',                      // 证件类型码
));
$response = $apiUserSignClient->apiUserSign($request);
if ($response->isSuccess()) {
    $data = $response->getData();
    var_dump($data);
} else {
    echo 'code:' . $response->getCode() . ' message:' . $response->getMessage() . ' request-id:' . $response->getRequestID();
}

// 获取用户签约状态
$request = new GetApiUserSignStatusRequest(array(
    'dealer_id' => $test_var['app_dealer_id'],    // 平台企业 ID
    'broker_id' => $test_var['app_broker_id'],    // 综合服务主体 ID
    'real_name' => '张三',                         // 姓名
    'id_card' => '110101012345678910',            // 证件号
));
$response = $apiUserSignClient->getApiUserSignStatus($request);
if ($response->isSuccess()) {
    $data = $response->getData();
    var_dump($data);
} else {
    echo 'code:' . $response->getCode() . ' message:' . $response->getMessage() . ' request-id:' . $response->getRequestID();
}

// 用户解约（测试账号专用接口）
$request = new ApiUserSignReleaseRequest(array(
    'dealer_id' => $test_var['app_dealer_id'],    // 平台企业 ID
    'broker_id' => $test_var['app_broker_id'],    // 综合服务主体 ID
    'real_name' => '张三',                         // 姓名
    'id_card' => '110101012345678910',            // 证件号
    'card_type' => 'idcard',                      // 证件类型码

));
$response = $apiUserSignClient->apiUserSignRelease($request);
if ($response->isSuccess()) {
    $data = $response->getData();
    var_dump($data);
} else {
    echo 'code:' . $response->getCode() . ' message:' . $response->getMessage() . ' request-id:' . $response->getRequestID();
}