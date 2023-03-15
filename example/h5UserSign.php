<?php
define('TEST_PATH', dirname(__FILE__));
include_once(TEST_PATH . '/../vendor/autoload.php');
include_once(TEST_PATH . '/test_var.php');

use Yzh\Config;
use Yzh\H5UserSignServiceClient;
use Yzh\Model\H5usersign\H5UserPresignRequest;
use Yzh\Model\H5usersign\H5UserSignRequest;
use Yzh\Model\H5usersign\GetH5UserSignStatusRequest;
use Yzh\Model\H5usersign\H5UserReleaseRequest;


// 用户签约（H5 签约）


$config = Config::newFromArray(array(
    'app_dealer_id' => $test_var['app_dealer_id'],
    'app_broker_id' => $test_var['app_broker_id'],
    'app_key' => $test_var['app_key'],
    'app_des3_key' => $test_var['app_des3_key'],
    'app_private_key' => $test_var['app_private_key'],
    'yzh_public_key' => $test_var['yzh_public_key'],
    'sign_type'=>$test_var['sign_type']

));

try {
    $h5UserSignClient = new  H5UserSignServiceClient($config);
    $h5UserSignClient->setEnv(H5UserSignServiceClient::ENV_PROD);
} catch (\Exception $e) {
    die($e->getMessage());
}

// H5 预申请签约
$request = new H5UserPresignRequest(array(
    'dealer_id' => $test_var['app_dealer_id'],     // 平台企业 ID
    'broker_id' => $test_var['app_broker_id'],     // 综合服务主体 ID
    'real_name' => '张三',                          // 姓名
    'id_card' => '110101012345678910',             // 证件号
    'certificate_type' => 0,                       // 证件类型

));
$response = $h5UserSignClient->h5UserPresign($request);
var_dump(array('response' => $response->toArray()));


// H5 签约
$request = new H5UserSignRequest(array(

    'token' => '7db97222-2dfb-484b-b8ac-e39a69d2aba0',      // H5 签约 token
    'color' => '',                                          // H5页面主题颜色
    'url' => 'http://xxx',                                  // 回调 URL 地址
    'redirect_url' => 'http://localhost',                   // 跳转 URL

));
$response = $h5UserSignClient->h5UserSign($request);
var_dump(array('response' => $response->toArray()));


// 获取用户签约状态
$request = new GetH5UserSignStatusRequest(array(
    'dealer_id' => $test_var['app_dealer_id'],     // 平台企业 ID
    'broker_id' => $test_var['app_broker_id'],     // 综合服务主体 ID
    'real_name' => '张三',                          // 姓名
    'id_card' => '110101012345678910',             // 证件号

));
$response = $h5UserSignClient->getH5UserSignStatus($request);
var_dump(array('response' => $response->toArray()));

// 用户解约（测试账号专用接口）
$request = new H5UserReleaseRequest(array(
    'dealer_id' => $test_var['app_dealer_id'],    // 平台企业 ID
    'broker_id' => $test_var['app_broker_id'],    // 综合服务主体 ID
    'real_name' => '张三',                         // 姓名
    'id_card' => '110101012345678910',            // 证件号
    'certificate_type' => 0,                      // 证件类型码

));
$response = $h5UserSignClient->h5UserRelease($request);
var_dump(array('response' => $response->toArray()));
