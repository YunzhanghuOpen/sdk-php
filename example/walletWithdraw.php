<?php
define('TEST_PATH', dirname(__FILE__));
include_once(TEST_PATH . '/../vendor/autoload.php');
include_once(TEST_PATH . '/test_var.php');

use Yzh\Config;
use Yzh\WalletWithdrawClient;
use Yzh\Model\Walletwithdraw\CreateWalletWithdrawRequest;
use Yzh\Model\Walletwithdraw\QueryWalletWithdrawRequest;
use Yzh\Model\Walletwithdraw\CancelWalletWithdrawRequest;
use Yzh\Model\Walletwithdraw\RetryWalletWithdrawRequest;
use Yzh\Model\Walletwithdraw\GetWalletWithdrawReceiptFileRequest;

// 钱包余额提现
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
    $walletWithdrawClient = new WalletWithdrawClient($config);
    $walletWithdrawClient->setEnv(WalletWithdrawClient::ENV_SANDBOX);// 沙箱环境
} catch (\Exception $e) {
    die($e->getMessage());
}

// 发起钱包余额提现
$request = new CreateWalletWithdrawRequest(array(
    'broker_id' => $test_var['app_broker_id'],               // 综合服务主体 ID
    'dealer_id' => $test_var['app_dealer_id'],               // 平台企业 ID
    'user_info' => array(                                    // 劳动者信息
        'real_name' => '张三',                                // 姓名
        'id_card' => '11010519491231002X',                   // 证件号
        'card_type' => 'idcard',                             // 证件类型编码
    ),
    'wallet_id' => 'wallet_123456',                          // 钱包 ID
    'order_id' => '20200903001656212987',                    // 平台企业订单号
    'wx_app_id' => 'wx1234567890abcdef',                     // 平台企业的微信 AppID
    'amount' => '300.00',                                    // 提现金额
    'channel' => 'bankpay',                                  // 提现渠道
    'account' => '6222021234567890123',                      // 收款账号
    'remark' => '10月直播提现',                                // 备注
    'notify_url' => 'https://www.example.com/realtime/notify', // 回调通知地址
));

/*
 * request-id：请求 ID，请求的唯一标识
 * 建议平台企业自定义 request-id，并记录在日志中，便于问题发现及排查
 * 如未自定义 request-id，将使用 SDK 中的 random 方法自动生成。注意：random 方法生成的 request-id 不能保证全局唯一，推荐自定义 request-id
 */
$request->setRequestID("requestIdExample123456789");
$response = $walletWithdrawClient->createWalletWithdraw($request);
if ($response->isSuccess()) {
    // 操作成功
    $data = $response->getData();
    var_dump($data);
} else {
    // 失败返回
    echo 'code:' . $response->getCode() . ' message:' . $response->getMessage() . ' request-id:' . $response->getRequestID();
}

// 查询钱包余额提现结果
$request = new QueryWalletWithdrawRequest(array(
    'broker_id' => $test_var['app_broker_id'],               // 综合服务主体 ID
    'dealer_id' => $test_var['app_dealer_id'],               // 平台企业 ID
    'channel' => 'bankpay',                                  // 提现渠道
    'order_id' => '20200903001656212987',                    // 平台企业订单号
    'ref' => '176826728300002',                              // 云账户钱包余额提现订单号
));

/*
 * request-id：请求 ID，请求的唯一标识
 * 建议平台企业自定义 request-id，并记录在日志中，便于问题发现及排查
 * 如未自定义 request-id，将使用 SDK 中的 random 方法自动生成。注意：random 方法生成的 request-id 不能保证全局唯一，推荐自定义 request-id
 */
$request->setRequestID("requestIdExample123456789");
$response = $walletWithdrawClient->queryWalletWithdraw($request);
if ($response->isSuccess()) {
    // 操作成功
    $data = $response->getData();
    var_dump($data);
} else {
    // 失败返回
    echo 'code:' . $response->getCode() . ' message:' . $response->getMessage() . ' request-id:' . $response->getRequestID();
}

// 取消挂起的钱包余额提现订单
$request = new CancelWalletWithdrawRequest(array(
    'broker_id' => $test_var['app_broker_id'],               // 综合服务主体 ID
    'dealer_id' => $test_var['app_dealer_id'],               // 平台企业 ID
    'order_id' => '20200903001656212987',                    // 平台企业订单号
    'ref' => '176826728300002',                              // 云账户钱包余额提现订单号
));

/*
 * request-id：请求 ID，请求的唯一标识
 * 建议平台企业自定义 request-id，并记录在日志中，便于问题发现及排查
 * 如未自定义 request-id，将使用 SDK 中的 random 方法自动生成。注意：random 方法生成的 request-id 不能保证全局唯一，推荐自定义 request-id
 */
$request->setRequestID("requestIdExample123456789");
$response = $walletWithdrawClient->cancelWalletWithdraw($request);
if ($response->isSuccess()) {
    // 操作成功
    $data = $response->getData();
    var_dump($data);
} else {
    // 失败返回
    echo 'code:' . $response->getCode() . ' message:' . $response->getMessage() . ' request-id:' . $response->getRequestID();
}

// 重试挂起的钱包余额提现订单
$request = new RetryWalletWithdrawRequest(array(
    'broker_id' => $test_var['app_broker_id'],               // 综合服务主体 ID
    'dealer_id' => $test_var['app_dealer_id'],               // 平台企业 ID
    'order_id' => '20200903001656212987',                    // 平台企业订单号
    'ref' => '176826728300002',                              // 云账户钱包余额提现订单号
));

/*
 * request-id：请求 ID，请求的唯一标识
 * 建议平台企业自定义 request-id，并记录在日志中，便于问题发现及排查
 * 如未自定义 request-id，将使用 SDK 中的 random 方法自动生成。注意：random 方法生成的 request-id 不能保证全局唯一，推荐自定义 request-id
 */
$request->setRequestID("requestIdExample123456789");
$response = $walletWithdrawClient->retryWalletWithdraw($request);
if ($response->isSuccess()) {
    // 操作成功
    $data = $response->getData();
    var_dump($data);
} else {
    // 失败返回
    echo 'code:' . $response->getCode() . ' message:' . $response->getMessage() . ' request-id:' . $response->getRequestID();
}

// 查询钱包余额提现电子回单
$request = new GetWalletWithdrawReceiptFileRequest(array(
    'broker_id' => $test_var['app_broker_id'],               // 综合服务主体 ID
    'dealer_id' => $test_var['app_dealer_id'],               // 平台企业 ID
    'order_id' => '20200903001656212987',                    // 平台企业订单号
    'ref' => '176826728300002',                              // 云账户钱包余额提现订单号
    'receipt_type' => '付款回单',                             // 回单类型
));

/*
 * request-id：请求 ID，请求的唯一标识
 * 建议平台企业自定义 request-id，并记录在日志中，便于问题发现及排查
 * 如未自定义 request-id，将使用 SDK 中的 random 方法自动生成。注意：random 方法生成的 request-id 不能保证全局唯一，推荐自定义 request-id
 */
$request->setRequestID("requestIdExample123456789");
$response = $walletWithdrawClient->getWalletWithdrawReceiptFile($request);
if ($response->isSuccess()) {
    // 操作成功
    $data = $response->getData();
    var_dump($data);
} else {
    // 失败返回
    echo 'code:' . $response->getCode() . ' message:' . $response->getMessage() . ' request-id:' . $response->getRequestID();
}
