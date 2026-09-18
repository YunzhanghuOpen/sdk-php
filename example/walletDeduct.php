<?php
define('TEST_PATH', dirname(__FILE__));
include_once(TEST_PATH . '/../vendor/autoload.php');
include_once(TEST_PATH . '/test_var.php');

use Yzh\Config;
use Yzh\WalletDeductClient;
use Yzh\Model\Walletdeduct\CreateWalletDeductRequest;
use Yzh\Model\Walletdeduct\QueryWalletDeductRequest;
use Yzh\Model\Walletdeduct\CompleteWalletDeductRequest;

// 钱包余额扣减
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
    $walletDeductClient = new WalletDeductClient($config);
    $walletDeductClient->setEnv(WalletDeductClient::ENV_SANDBOX);// 沙箱环境
} catch (\Exception $e) {
    die($e->getMessage());
}

// 申请钱包余额扣减
$request = new CreateWalletDeductRequest(array(
    'broker_id' => $test_var['app_broker_id'],               // 综合服务主体 ID
    'dealer_id' => $test_var['app_dealer_id'],               // 平台企业 ID
    'user_info' => array(                                    // 劳动者信息
        'real_name' => '张三',                                // 姓名
        'id_card' => '11010519491231002X',                   // 证件号
        'card_type' => 'idcard',                             // 证件类型编码
    ),
    'wallet_id' => 'wallet_123456',                          // 钱包 ID
    'order_id' => '20200903001656212987',                    // 平台企业订单号
    'scene' => '3',                                          // 业务场景
    'amount' => '300.00',                                    // 扣减金额
    'remark' => '根据平台企业规则扣减',                                // 备注
    'notify_url' => 'https://www.example.com/realtime/notify', // 回调通知地址
));

/*
 * request-id：请求 ID，请求的唯一标识
 * 建议平台企业自定义 request-id，并记录在日志中，便于问题发现及排查
 * 如未自定义 request-id，将使用 SDK 中的 random 方法自动生成。注意：random 方法生成的 request-id 不能保证全局唯一，推荐自定义 request-id
 */
$request->setRequestID("requestIdExample123456789");
$response = $walletDeductClient->createWalletDeduct($request);
if ($response->isSuccess()) {
    // 操作成功
    $data = $response->getData();
    var_dump($data);
} else {
    // 失败返回
    echo 'code:' . $response->getCode() . ' message:' . $response->getMessage() . ' request-id:' . $response->getRequestID();
}

// 查询钱包余额扣减申请结果
$request = new QueryWalletDeductRequest(array(
    'broker_id' => $test_var['app_broker_id'],               // 综合服务主体 ID
    'dealer_id' => $test_var['app_dealer_id'],               // 平台企业 ID
    'order_id' => '20200903001656212987',                    // 平台企业订单号
    'ref' => '176826728300002',                              // 云账户钱包余额扣减订单号
));

/*
 * request-id：请求 ID，请求的唯一标识
 * 建议平台企业自定义 request-id，并记录在日志中，便于问题发现及排查
 * 如未自定义 request-id，将使用 SDK 中的 random 方法自动生成。注意：random 方法生成的 request-id 不能保证全局唯一，推荐自定义 request-id
 */
$request->setRequestID("requestIdExample123456789");
$response = $walletDeductClient->queryWalletDeduct($request);
if ($response->isSuccess()) {
    // 操作成功
    $data = $response->getData();
    var_dump($data);
} else {
    // 失败返回
    echo 'code:' . $response->getCode() . ' message:' . $response->getMessage() . ' request-id:' . $response->getRequestID();
}

// 提交钱包余额扣减结果
$request = new CompleteWalletDeductRequest(array(
    'broker_id' => $test_var['app_broker_id'],               // 综合服务主体 ID
    'dealer_id' => $test_var['app_dealer_id'],               // 平台企业 ID
    'order_id' => '20200903001656212987',                    // 平台企业订单号
    'ref' => '176826728300002',                              // 云账户钱包余额扣减订单号
    'status' => '1',                                         // 结算状态
    'trade_no' => '202010150030000001',                      // 平台企业扣减交易流水号
    'finished_at' => '2020-10-15 00:30:00',                  // 支付完成时间
));

/*
 * request-id：请求 ID，请求的唯一标识
 * 建议平台企业自定义 request-id，并记录在日志中，便于问题发现及排查
 * 如未自定义 request-id，将使用 SDK 中的 random 方法自动生成。注意：random 方法生成的 request-id 不能保证全局唯一，推荐自定义 request-id
 */
$request->setRequestID("requestIdExample123456789");
$response = $walletDeductClient->completeWalletDeduct($request);
if ($response->isSuccess()) {
    // 操作成功
    $data = $response->getData();
    var_dump($data);
} else {
    // 失败返回
    echo 'code:' . $response->getCode() . ' message:' . $response->getMessage() . ' request-id:' . $response->getRequestID();
}
