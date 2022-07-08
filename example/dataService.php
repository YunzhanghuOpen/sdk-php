<?php
define('TEST_PATH', dirname(__FILE__));
include_once(TEST_PATH . '/../vendor/autoload.php');
include_once(TEST_PATH . '/test_var.php');

use Yzh\Config;
use Yzh\DataServiceClient;
use Yzh\Model\DataService\ListDailyOrderRequest;
use Yzh\Model\DataService\GetOrderDownloadsUrlRequest;
use Yzh\Model\DataService\GetDailyOrderFileV2Request;
use Yzh\Model\DataService\ListDailyBillRequest;
use Yzh\Model\DataService\GetDailyBillFileV2Request;
use Yzh\Model\DataService\ListDealerRechargeRecordV2Request;
use Yzh\Model\DataService\ListBalanceDailyStatementRequest;

$config = Config::newFromArray(array(
    'app_dealer_id' => $test_var['app_dealer_id'],
    'app_broker_id' => $test_var['app_broker_id'],
    'app_key' => $test_var['app_key'],
    'app_des3_key' => $test_var['app_des3_key'],
    'app_private_key' => $test_var['app_private_key'],
    'yzh_public_key' => $test_var['yzh_public_key'],
));

try {
    $dataServiceClient = new \Yzh\DataServiceClient($config);
    // $paymentClient->setEnv(PaymentClient::ENV_PROD);
    $dataServiceClient->setEnv(DataServiceClient::ENV_PROD);
} catch (\Exception $e) {
    die($e->getMessage());
}
/**
//数据接口
//查询日订单文件
$request = new GetOrderDownloadsUrlRequest(array(
   'order_date' => '2022-03-02',                # 查询日期
));
$response = $dataServiceClient->getDailyOrderFile($request);
var_dump(array('response' => $response->toArray()));

//查询日流水文件
$request = new GetDailyBillFileV2Request(array(
   'bill_date' => '2022-03-02',                # 查询日期
));
$response = $dataServiceClient->getDailyBillFileV2($request);
var_dump(array('response' => $response->toArray()));


//查询平台企业预付业务服务费记录
$request = new ListDealerRechargeRecordV2Request(array(
   'begin_at' => '2022-03-02',                # 查询开始日期
   'end_at' => '2022-03-12',                # 查询结束日期

));
$response = $dataServiceClient->listDealerRechargeRecordV2($request);
var_dump(array('response' => $response->toArray()));


//查询日订单数据
$request = new ListDailyOrderRequest(array(
   'order_date' => '2022-04-13',                # 查询日期
   'offeset' => 0,                              # 偏移量，最小从0开始
   'length' => 20,                              # 每页最多返回条数，最大为200
   'channel' => '支付宝',                        # 支付路径名，银行卡（默认）、支付宝、微信
   'data_type' => 'encryption'                  # 如果为encryption，则对返回的data进行加密
));
$response = $dataServiceClient->listDailyOrder($request);
var_dump(array('response' => $response->toArray()));



//查询日流水数据
$request = new ListDailyOrderRequest(array(
   'order_date' => '2022-04-13',                # 查询日期
   'offeset' => 0,                              # 偏移量，最小从0开始
   'length' => 20,                              # 每页最多返回条数，最大为200
   'channel' => '支付宝',                        # 支付路径名，银行卡（默认）、支付宝、微信
   'data_type' => 'encryption'                  # 如果为encryption，则对返回的data进行加密
));
$response = $dataServiceClient->listDailyOrder($request);
var_dump(array('response' => $response->toArray()));


//查询日订单文件（支付和退款）
$request = new GetDailyOrderFileV2Request(array(
   'order_date' => '2022-04-14',                # 查询日期
));
$response = $dataServiceClient->getDailyOrderFileV2($request);
var_dump(array('response' => $response->toArray()));
 */


//查询余额日账单数据
$request = new ListBalanceDailyStatementRequest(array(
    'statement_date' => '2022-04-14',                # 查询日期
));
$response = $dataServiceClient->listBalanceDailyStatement($request);
var_dump(array('response' => $response->toArray()));