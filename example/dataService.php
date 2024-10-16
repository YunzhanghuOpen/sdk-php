<?php
define('TEST_PATH', dirname(__FILE__));
include_once(TEST_PATH . '/../vendor/autoload.php');
include_once(TEST_PATH . '/test_var.php');

use Yzh\Config;
use Yzh\DataServiceClient;
use Yzh\Model\Dataservice\GetDailyOrderFileRequest;
use Yzh\Model\Dataservice\ListDailyOrderRequest;
use Yzh\Model\Dataservice\GetDailyOrderFileV2Request;
use Yzh\Model\Dataservice\ListDailyBillRequest;
use Yzh\Model\Dataservice\GetDailyBillFileV2Request;
use Yzh\Model\Dataservice\ListDealerRechargeRecordV2Request;
use Yzh\Model\Dataservice\ListBalanceDailyStatementRequest;

// 对账文件获取
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
    $dataServiceClient = new DataServiceClient($config);
} catch (\Exception $e) {
    die($e->getMessage());
}

// 查询日订单文件
$request = new GetDailyOrderFileRequest(array(
    'order_date' => '2022-04-24',                // 查询日期
));

/*
 * request-id：请求 ID，请求的唯一标识
 * 建议平台企业自定义 request-id，并记录在日志中，便于问题发现及排查
 * 如未自定义 request-id，将使用 SDK 中的 random 方法自动生成。注意：random 方法生成的 request-id 不能保证全局唯一，推荐自定义 request-id
 */
$request->setRequestID("requestIdExample123456789");
$response = $dataServiceClient->getDailyOrderFile($request);
if ($response->isSuccess()) {
    // 操作成功
    $data = $response->getData();
    var_dump($data->getOrderDownloadUrl());
} else {
    // 失败返回
    echo 'code:' . $response->getCode() . ' message:' . $response->getMessage() . ' request-id:' . $response->getRequestID();
}

// 查询日流水文件
$request = new GetDailyBillFileV2Request(array(
    'bill_date' => '2022-04-24',                // 查询日期
));

/*
 * request-id：请求 ID，请求的唯一标识
 * 建议平台企业自定义 request-id，并记录在日志中，便于问题发现及排查
 * 如未自定义 request-id，将使用 SDK 中的 random 方法自动生成。注意：random 方法生成的 request-id 不能保证全局唯一，推荐自定义 request-id
 */
$request->setRequestID("requestIdExample123456789");
$response = $dataServiceClient->getDailyBillFileV2($request);
if ($response->isSuccess()) {
    // 操作成功
    $data = $response->getData();
    var_dump($data->getBillDownloadUrl());
} else {
    // 失败返回
    echo 'code:' . $response->getCode() . ' message:' . $response->getMessage() . ' request-id:' . $response->getRequestID();
}

// 查询平台企业预付业务服务费记录
$request = new ListDealerRechargeRecordV2Request(array(
    'begin_at' => '2022-10-28',                // 查询开始日期
    'end_at' => '2022-10-28',                  // 查询结束日期
));

/*
 * request-id：请求 ID，请求的唯一标识
 * 建议平台企业自定义 request-id，并记录在日志中，便于问题发现及排查
 * 如未自定义 request-id，将使用 SDK 中的 random 方法自动生成。注意：random 方法生成的 request-id 不能保证全局唯一，推荐自定义 request-id
 */
$request->setRequestID("requestIdExample123456789");
$response = $dataServiceClient->listDealerRechargeRecordV2($request);
if ($response->isSuccess()) {
    // 操作成功
    $data = $response->getData();
    foreach ($data as $k => $v) {
        $v->getRechargeId();
    }
} else {
    // 失败返回
    echo 'code:' . $response->getCode() . ' message:' . $response->getMessage() . ' request-id:' . $response->getRequestID();
}

// 查询日订单数据
$request = new ListDailyOrderRequest(array(
    'order_date' => '2023-03-28',                // 查询日期
    'offeset' => 0,                              // 偏移量，最小从 0 开始
    'length' => 20,                              // 每页最多返回条数，最大为 200
    'channel' => '支付宝',                        // 支付路径名，银行卡（默认）、支付宝、微信
    'data_type' => 'encryption'                  // 如果为 encryption，则对返回的data进行加密
));

/*
 * request-id：请求 ID，请求的唯一标识
 * 建议平台企业自定义 request-id，并记录在日志中，便于问题发现及排查
 * 如未自定义 request-id，将使用 SDK 中的 random 方法自动生成。注意：random 方法生成的 request-id 不能保证全局唯一，推荐自定义 request-id
 */
$request->setRequestID("requestIdExample123456789");
$response = $dataServiceClient->listDailyOrder($request);
if ($response->isSuccess()) {
    // 操作成功
    $totalNum = $response->getData()->getTotalNum();  // 总条数
    $listData = $response->getData()->getList();      // 条目明细
    foreach ($listData as $k => $v) {
        $v->getOrderId();
    }
} else {
    // 失败返回
    echo 'code:' . $response->getCode() . ' message:' . $response->getMessage() . ' request-id:' . $response->getRequestID();
}

// 查询日流水数据
$request = new ListDailyBillRequest(array(
    'bill_date' => '2022-06-13',                 // 查询日期
    'offeset' => 0,                              // 偏移量，最小从 0 开始
    'length' => 20,                              // 每页最多返回条数，最大为 200
    'channel' => '支付宝',                        // 支付路径名，银行卡（默认）、支付宝、微信
    'data_type' => 'encryption'                  // 如果为 encryption，则对返回的 data 进行加密
));

/*
 * request-id：请求 ID，请求的唯一标识
 * 建议平台企业自定义 request-id，并记录在日志中，便于问题发现及排查
 * 如未自定义 request-id，将使用 SDK 中的 random 方法自动生成。注意：random 方法生成的 request-id 不能保证全局唯一，推荐自定义 request-id
 */
$request->setRequestID("requestIdExample123456789");
$response = $dataServiceClient->listDailyBill($request);
if ($response->isSuccess()) {
    // 操作成功
    $data = $response->getData();
    var_dump($data);
} else {
    // 失败返回
    echo 'code:' . $response->getCode() . ' message:' . $response->getMessage() . ' request-id:' . $response->getRequestID();
}

// 查询日订单文件（支付和退款）
$request = new GetDailyOrderFileV2Request(array(
    'order_date' => '2023-03-28',                // 查询日期
));

/*
 * request-id：请求 ID，请求的唯一标识
 * 建议平台企业自定义 request-id，并记录在日志中，便于问题发现及排查
 * 如未自定义 request-id，将使用 SDK 中的 random 方法自动生成。注意：random 方法生成的 request-id 不能保证全局唯一，推荐自定义 request-id
 */
$request->setRequestID("requestIdExample123456789");
$response = $dataServiceClient->getDailyOrderFileV2($request);
if ($response->isSuccess()) {
    // 操作成功
    $data = $response->getData();
    var_dump($data->getUrl());
} else {
    // 失败返回
    echo 'code:' . $response->getCode() . ' message:' . $response->getMessage() . ' request-id:' . $response->getRequestID();
}

// 查询余额日账单数据
$request = new ListBalanceDailyStatementRequest(array(
    'statement_date' => '2023-03-12',            // 查询日期
));

/*
 * request-id：请求 ID，请求的唯一标识
 * 建议平台企业自定义 request-id，并记录在日志中，便于问题发现及排查
 * 如未自定义 request-id，将使用 SDK 中的 random 方法自动生成。注意：random 方法生成的 request-id 不能保证全局唯一，推荐自定义 request-id
 */
$request->setRequestID("requestIdExample123456789");
$response = $dataServiceClient->listBalanceDailyStatement($request);
if ($response->isSuccess()) {
    // 操作成功
    $data = $response->getData()->getList();
    foreach ($data as $k => $v) {
        $v->getStatementId();
    }
} else {
    // 失败返回
    echo 'code:' . $response->getCode() . ' message:' . $response->getMessage() . ' request-id:' . $response->getRequestID();
}
