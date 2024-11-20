<?php
define('TEST_PATH', dirname(__FILE__));
include_once(TEST_PATH . '/../vendor/autoload.php');
include_once(TEST_PATH . '/test_var.php');

use Yzh\Config;
use Yzh\InvoiceClient;
use Yzh\Model\Invoice\GetInvoiceStatRequest;
use Yzh\Model\Invoice\GetInvoiceAmountRequest;
use Yzh\Model\Invoice\ApplyInvoiceRequest;
use Yzh\Model\Invoice\GetInvoiceStatusRequest;
use Yzh\Model\Invoice\GetInvoiceFileRequest;
use Yzh\Model\Invoice\SendReminderEmailRequest;
use Yzh\Model\Invoice\GetInvoiceInformationRequest;

// 发票开具
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
    $invoiceClient = new InvoiceClient($config);
} catch (\Exception $e) {
    die($e->getMessage());
}

// 查询平台企业已开具和待开具发票金额
$request = new GetInvoiceStatRequest(array(
    'dealer_id' => $test_var['app_dealer_id'],   // 平台企业 ID
    'broker_id' => $test_var['app_broker_id'],   // 综合服务主体 ID
    'year' => 2022                               // 年份
));

/*
 * request-id：请求 ID，请求的唯一标识
 * 建议平台企业自定义 request-id，并记录在日志中，便于问题发现及排查
 * 如未自定义 request-id，将使用 SDK 中的 random 方法自动生成。注意：random 方法生成的 request-id 不能保证全局唯一，推荐自定义 request-id
 */
$request->setRequestID("requestIdExample123456789");
$response = $invoiceClient->getInvoiceStat($request);
if ($response->isSuccess()) {
    // 操作成功
    $data = $response->getData();
    var_dump($data);
} else {
    // 失败返回
    echo 'code:' . $response->getCode() . ' message:' . $response->getMessage() . ' request-id:' . $response->getRequestID();
}

// 查询可开票额度和开票信息
$request = new GetInvoiceAmountRequest(array(
    'dealer_id' => $test_var['app_dealer_id'],   // 平台企业 ID
    'broker_id' => $test_var['app_broker_id'],   // 综合服务主体 ID
));

/*
 * request-id：请求 ID，请求的唯一标识
 * 建议平台企业自定义 request-id，并记录在日志中，便于问题发现及排查
 * 如未自定义 request-id，将使用 SDK 中的 random 方法自动生成。注意：random 方法生成的 request-id 不能保证全局唯一，推荐自定义 request-id
 */
$request->setRequestID("requestIdExample123456789");
$response = $invoiceClient->getInvoiceAmount($request);
if ($response->isSuccess()) {
    // 操作成功
    $data = $response->getData();
    var_dump($data);
} else {
    // 失败返回
    echo 'code:' . $response->getCode() . ' message:' . $response->getMessage() . ' request-id:' . $response->getRequestID();
}

// 申请开票
$request = new ApplyInvoiceRequest(array(
    'dealer_id' => $test_var['app_dealer_id'],      // 平台企业 ID
    'broker_id' => $test_var['app_broker_id'],      // 综合服务主体 ID
    'invoice_apply_id' => 'apply123456789',         // 发票申请编号
    'amount' => '1.0',                              // 申请开票⾦额
    'invoice_type' => '2',                          // 发票类型 1：增值税专用发票 2：增值税普通发票
    'bank_name_account' => '',                      // 开户⾏及账号（选填，若不填写，则使⽤默认值）
    'goods_services_name' => '*测试分类*test测试内容', // 货物或应税劳务、服务名称 (选填，若不填写，则使⽤默认值)
    'remark' => '发票备注',                         // 发票备注（选填，每张发票备注栏相同）
    'receive_emails' => ['username1@example.com'],  // 发票接收邮箱（选填，用于接收发票相关信息，邮箱数量不能超过 5 个）
    'invoice_media' => '1'                          // 发票介质 1：纸质发票（默认） 2：电子发票
));

/*
 * request-id：请求 ID，请求的唯一标识
 * 建议平台企业自定义 request-id，并记录在日志中，便于问题发现及排查
 * 如未自定义 request-id，将使用 SDK 中的 random 方法自动生成。注意：random 方法生成的 request-id 不能保证全局唯一，推荐自定义 request-id
 */
$request->setRequestID("requestIdExample123456789");
$response = $invoiceClient->applyInvoice($request);
if ($response->isSuccess()) {
    // 操作成功
    $data = $response->getData();
    var_dump($data);
} else {
    // 失败返回
    echo 'code:' . $response->getCode() . ' message:' . $response->getMessage() . ' request-id:' . $response->getRequestID();
}

// 查询开票申请状态
$request = new GetInvoiceStatusRequest(array(
    'invoice_apply_id' => 'apply123456789',      // 发票申请编号
    'application_id' => 'a123b1110',             // 发票申请单 ID
));

/*
 * request-id：请求 ID，请求的唯一标识
 * 建议平台企业自定义 request-id，并记录在日志中，便于问题发现及排查
 * 如未自定义 request-id，将使用 SDK 中的 random 方法自动生成。注意：random 方法生成的 request-id 不能保证全局唯一，推荐自定义 request-id
 */
$request->setRequestID("requestIdExample123456789");
$response = $invoiceClient->getInvoiceStatus($request);
if ($response->isSuccess()) {
    // 操作成功
    $data = $response->getData();
    var_dump($data);
} else {
    // 失败返回
    echo 'code:' . $response->getCode() . ' message:' . $response->getMessage() . ' request-id:' . $response->getRequestID();
}

// 下载 PDF 版发票
$request = new GetInvoiceFileRequest(array(
    'invoice_apply_id' => 'apply123456789',      // 发票申请编号
    'application_id' => 'a123b1110',             // 发票申请单 ID
));

/*
 * request-id：请求 ID，请求的唯一标识
 * 建议平台企业自定义 request-id，并记录在日志中，便于问题发现及排查
 * 如未自定义 request-id，将使用 SDK 中的 random 方法自动生成。注意：random 方法生成的 request-id 不能保证全局唯一，推荐自定义 request-id
 */
$request->setRequestID("requestIdExample123456789");
$response = $invoiceClient->getInvoiceFile($request);
if ($response->isSuccess()) {
    // 操作成功
    $data = $response->getData();
    var_dump($data);
} else {
    // 失败返回
    echo 'code:' . $response->getCode() . ' message:' . $response->getMessage() . ' request-id:' . $response->getRequestID();
}

// 发送发票开具成功通知邮件
$request = new SendReminderEmailRequest(array(
    'invoice_apply_id' => 'apply123456789',      // 发票申请编号
    'application_id' => 'a123b1110',             // 发票申请单 ID
));

/*
 * request-id：请求 ID，请求的唯一标识
 * 建议平台企业自定义 request-id，并记录在日志中，便于问题发现及排查
 * 如未自定义 request-id，将使用 SDK 中的 random 方法自动生成。注意：random 方法生成的 request-id 不能保证全局唯一，推荐自定义 request-id
 */
$request->setRequestID("requestIdExample123456789");
$response = $invoiceClient->sendReminderEmail($request);
if ($response->isSuccess()) {
    // 操作成功
    $data = $response->getData();
    var_dump($data);
} else {
    // 失败返回
    echo 'code:' . $response->getCode() . ' message:' . $response->getMessage() . ' request-id:' . $response->getRequestID();
}

// 查询发票信息
$request = new GetInvoiceInformationRequest(array(
    'invoice_apply_id' => 'apply123456789',       // 发票申请编号
    'application_id' => 'a123b1110',              // 发票申请单 ID
));

/*
 * request-id：请求 ID，请求的唯一标识
 * 建议平台企业自定义 request-id，并记录在日志中，便于问题发现及排查
 * 如未自定义 request-id，将使用 SDK 中的 random 方法自动生成。注意：random 方法生成的 request-id 不能保证全局唯一，推荐自定义 request-id
 */
$request->setRequestID("requestIdExample123456789");
$response = $invoiceClient->getInvoiceInformation($request);
if ($response->isSuccess()) {
    // 操作成功
    $data = $response->getData()->getInformation();
    var_dump($data);
} else {
    // 失败返回
    echo 'code:' . $response->getCode() . ' message:' . $response->getMessage() . ' request-id:' . $response->getRequestID();
}