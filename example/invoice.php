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


$config = Config::newFromArray(array(
    'app_dealer_id' => $test_var['app_dealer_id'],
    'app_broker_id' => $test_var['app_broker_id'],
    'app_key' => $test_var['app_key'],
    'app_des3_key' => $test_var['app_des3_key'],
    'app_private_key' => $test_var['app_private_key'],
    'yzh_public_key' => $test_var['yzh_public_key'],
));

try {
    $invoiceClient = new InvoiceClient($config);
    $invoiceClient->setEnv(InvoiceClient::ENV_PROD);
} catch (\Exception $e) {
    die($e->getMessage());
}


// 发票
// 查询平台企业已开具和待开具发票金额
$request = new GetInvoiceStatRequest(array(
    'dealer_id' => $test_var['app_dealer_id'],   // 平台企业 ID
    'broker_id' => $test_var['app_broker_id'],   // 综合服务主体 ID
    'year' => 2022                               // 年份
));
$response = $invoiceClient->getInvoiceStat($request);
var_dump(array('response' => $response->toArray()));

// 查询可开票额度和开票信息
$request = new GetInvoiceAmountRequest(array(
    'dealer_id' => $test_var['app_dealer_id'],   // 平台企业 ID
    'broker_id' => $test_var['app_broker_id'],   // 综合服务主体 ID
));
$response = $invoiceClient->getInvoiceAmount($request);
var_dump(array('response' => $response->toArray()));

// 申请开票
$request = new ApplyInvoiceRequest(array(
    'dealer_id' => $test_var['app_dealer_id'],   // 平台企业 ID
    'broker_id' => $test_var['app_broker_id'],   // 综合服务主体 ID
    'invoice_apply_id' => 'apply123456789',      // 发票申请编号
    'amount' => '1.0',                           // 申请开票⾦额
    'invoice_type' => '2',                       // 发票类型 1：专票 2：普票
    'bank_name_account' => '',                   // 开户⾏及账号（选填，若不填写，则使⽤默认值）
    'goods_services_name' => '*测试分类*test测试内容', // 货物或应税劳务、服务名称 (选填，若不填写，则使⽤默认值)
    'remark' => '发票备注'                        // 发票备注（选填，每张发票备注栏相同）
));
$response = $invoiceClient->applyInvoice($request);
var_dump(array('response' => $response->toArray()));


// 查询开票申请状态
$request = new GetInvoiceStatusRequest(array(

    'invoice_apply_id' => 'apply123456789',      // 发票申请编号
    'application_id' => '',                      // 发票申请单 ID
));
$response = $invoiceClient->getInvoiceStatus($request);
var_dump(array('response' => $response->toArray()));

// 下载 PDF 版发票
$request = new GetInvoiceFileRequest(array(

    'invoice_apply_id' => 'apply123456789',      // 发票申请编号
    'application_id' => '',                      // 发票申请单 ID
));
$response = $invoiceClient->getInvoiceFile($request);
var_dump(array('response' => $response->toArray()));


// 发送发票扫描件压缩包下载链接邮件
$request = new SendReminderEmailRequest(array(

    'invoice_apply_id' => 'apply123456789',      // 发票申请编号
    'application_id' => '',                      // 发票申请单 ID
));
$response = $invoiceClient->sendReminderEmail($request);
var_dump(array('response' => $response->toArray()));
