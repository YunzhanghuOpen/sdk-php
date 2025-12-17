<?php
define('TEST_PATH', dirname(__FILE__));
include_once(TEST_PATH . '/../vendor/autoload.php');
include_once(TEST_PATH . '/test_var.php');

use Yzh\Config;
use Yzh\TaxClearRefundClient;
use Yzh\Model\Taxclearrefund\GetClearTaxInfoRequest;
use Yzh\Model\Taxclearrefund\GetClearTaxFileRequest;
use Yzh\Model\Taxclearrefund\GetRefundTaxInfoRequest;

// 连续劳务税费退补
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
    $taxClearRefundClient = new TaxClearRefundClient($config);
    $taxClearRefundClient->setEnv(TaxClearRefundClient::ENV_SANDBOX);// 沙箱环境
} catch (\Exception $e) {
    die($e->getMessage());
}

// 查询税费清缴完成结果
$request = new GetClearTaxInfoRequest(array(
    'broker_id' =>  $test_var['app_broker_id'],               // 综合服务主体 ID
    'dealer_id' =>   $test_var['app_dealer_id'],                         // 平台企业 ID
    'tax_month' => '2025-10',                            // 报税属期
));

/*
 * request-id：请求 ID，请求的唯一标识
 * 建议平台企业自定义 request-id，并记录在日志中，便于问题发现及排查
 * 如未自定义 request-id，将使用 SDK 中的 random 方法自动生成。注意：random 方法生成的 request-id 不能保证全局唯一，推荐自定义 request-id
 */
$request->setRequestID("requestIdExample123456789");
$response = $taxClearRefundClient->getClearTaxInfo($request);
if ($response->isSuccess()) {
    // 操作成功
    $data = $response->getData();
    var_dump($data);
} else {
    // 失败返回
    echo 'code:' . $response->getCode() . ' message:' . $response->getMessage() . ' request-id:' . $response->getRequestID();
}

// 查询税费清缴明细文件
$request = new GetClearTaxFileRequest(array(
    'broker_id' =>  $test_var['app_broker_id'],               // 综合服务主体 ID
    'dealer_id' =>   $test_var['app_dealer_id'],                         // 平台企业 ID
    'tax_month' => '2025-10',                            // 报税属期
    'batch_id' => '10313232135454132"',                            // 批次号
));

/*
 * request-id：请求 ID，请求的唯一标识
 * 建议平台企业自定义 request-id，并记录在日志中，便于问题发现及排查
 * 如未自定义 request-id，将使用 SDK 中的 random 方法自动生成。注意：random 方法生成的 request-id 不能保证全局唯一，推荐自定义 request-id
 */
$request->setRequestID("requestIdExample123456789");
$response = $taxClearRefundClient->getClearTaxFile($request);
if ($response->isSuccess()) {
    // 操作成功
    $data = $response->getData();
    var_dump($data);
} else {
    // 失败返回
    echo 'code:' . $response->getCode() . ' message:' . $response->getMessage() . ' request-id:' . $response->getRequestID();
}

// 查询税费退补完成结果
$request = new GetRefundTaxInfoRequest(array(
    'broker_id' =>  $test_var['app_broker_id'],               // 综合服务主体 ID
    'dealer_id' =>   $test_var['app_dealer_id'],                         // 平台企业 ID
    'tax_month' => '2025-10',                            // 报税属期
    'batch_id' => '10313232135454132"',                            // 批次号
));

/*
 * request-id：请求 ID，请求的唯一标识
 * 建议平台企业自定义 request-id，并记录在日志中，便于问题发现及排查
 * 如未自定义 request-id，将使用 SDK 中的 random 方法自动生成。注意：random 方法生成的 request-id 不能保证全局唯一，推荐自定义 request-id
 */
$request->setRequestID("requestIdExample123456789");
$response = $taxClearRefundClient->getRefundTaxInfo($request);
if ($response->isSuccess()) {
    // 操作成功
    $data = $response->getData();
    var_dump($data);
} else {
    // 失败返回
    echo 'code:' . $response->getCode() . ' message:' . $response->getMessage() . ' request-id:' . $response->getRequestID();
}