<?php
define('TEST_PATH', dirname(__FILE__));
include_once(TEST_PATH . '/../vendor/autoload.php');
include_once(TEST_PATH . '/test_var.php');

use Yzh\Config;
use Yzh\WalletIncomeClient;
use Yzh\Model\Walletincome\CreateWalletIncomeRequest;
use Yzh\Model\Walletincome\QueryWalletIncomeRequest;
use Yzh\Model\Walletincome\CancelWalletIncomeRequest;
use Yzh\Model\Walletincome\RetryWalletIncomeRequest;

// 钱包余额入账
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
    $walletIncomeClient = new WalletIncomeClient($config);
    $walletIncomeClient->setEnv(WalletIncomeClient::ENV_SANDBOX);// 沙箱环境
} catch (\Exception $e) {
    die($e->getMessage());
}

// 发起钱包余额入账
$request = new CreateWalletIncomeRequest(array(
    'broker_id' => $test_var['app_broker_id'],               // 综合服务主体 ID
    'dealer_id' => $test_var['app_dealer_id'],               // 平台企业 ID
    'user_info' => array(                                    // 劳动者信息
        'real_name' => '张三',                                // 姓名
        'id_card' => '11010519491231002X',                   // 证件号
        'card_type' => 'idcard',                             // 证件类型编码
        'phone_no' => '13800000000',                         // 手机号
    ),
    'wallet_id' => 'wallet_123456',                          // 钱包 ID
    'platform_info' => array(                                // 平台信息
        'platform_name' => 'xxx平台',                         // 平台名称
        'user_id' => '123456',                               // 平台企业的劳动者 ID
        'user_nickname' => '张三',                            // 劳动者昵称
    ),
    'order_id' => '20200903001656212987',                    // 平台企业订单号
    'amount' => '300.00',                                    // 入账金额
    'earned_at' => '2020-09-01 10:00:00',                    // 劳动者获得该笔收入的时间
    'remark' => '9月直播收入',                                // 备注
    'notify_url' => 'https://www.example.com/income/notify', // 回调通知地址
));

/*
 * request-id：请求 ID，请求的唯一标识
 * 建议平台企业自定义 request-id，并记录在日志中，便于问题发现及排查
 * 如未自定义 request-id，将使用 SDK 中的 random 方法自动生成。注意：random 方法生成的 request-id 不能保证全局唯一，推荐自定义 request-id
 */
$request->setRequestID("requestIdExample123456789");
$response = $walletIncomeClient->createWalletIncome($request);
if ($response->isSuccess()) {
    // 操作成功
    $data = $response->getData();
    var_dump($data);
} else {
    // 失败返回
    echo 'code:' . $response->getCode() . ' message:' . $response->getMessage() . ' request-id:' . $response->getRequestID();
}

// 查询钱包余额入账结果
$request = new QueryWalletIncomeRequest(array(
    'broker_id' => $test_var['app_broker_id'],               // 综合服务主体 ID
    'dealer_id' => $test_var['app_dealer_id'],               // 平台企业 ID
    'order_id' => '20200903001656212987',                    // 平台企业订单号
    'ref' => '176826728300001',                              // 云账户钱包入账订单号
));

/*
 * request-id：请求 ID，请求的唯一标识
 * 建议平台企业自定义 request-id，并记录在日志中，便于问题发现及排查
 * 如未自定义 request-id，将使用 SDK 中的 random 方法自动生成。注意：random 方法生成的 request-id 不能保证全局唯一，推荐自定义 request-id
 */
$request->setRequestID("requestIdExample123456789");
$response = $walletIncomeClient->queryWalletIncome($request);
if ($response->isSuccess()) {
    // 操作成功
    $data = $response->getData();
    var_dump($data);
} else {
    // 失败返回
    echo 'code:' . $response->getCode() . ' message:' . $response->getMessage() . ' request-id:' . $response->getRequestID();
}

// 取消钱包收入计税订单
$request = new CancelWalletIncomeRequest(array(
    'broker_id' => $test_var['app_broker_id'],               // 综合服务主体 ID
    'dealer_id' => $test_var['app_dealer_id'],               // 平台企业 ID
    'order_id' => '20200903001656212987',                    // 平台企业订单号
    'ref' => '176826728300001',                              // 云账户钱包入账订单号
    'cancel_order_id' => '20200903001656212988',             // 取消订单号
));

/*
 * request-id：请求 ID，请求的唯一标识
 * 建议平台企业自定义 request-id，并记录在日志中，便于问题发现及排查
 * 如未自定义 request-id，将使用 SDK 中的 random 方法自动生成。注意：random 方法生成的 request-id 不能保证全局唯一，推荐自定义 request-id
 */
$request->setRequestID("requestIdExample123456789");
$response = $walletIncomeClient->cancelWalletIncome($request);
if ($response->isSuccess()) {
    // 操作成功
    $data = $response->getData();
    var_dump($data);
} else {
    // 失败返回
    echo 'code:' . $response->getCode() . ' message:' . $response->getMessage() . ' request-id:' . $response->getRequestID();
}

// 重试挂起的计税订单
$request = new RetryWalletIncomeRequest(array(
    'broker_id' => $test_var['app_broker_id'],               // 综合服务主体 ID
    'dealer_id' => $test_var['app_dealer_id'],               // 平台企业 ID
    'order_id' => '20200903001656212987',                    // 平台企业订单号
    'ref' => '176826728300001',                              // 云账户钱包入账订单号
));

/*
 * request-id：请求 ID，请求的唯一标识
 * 建议平台企业自定义 request-id，并记录在日志中，便于问题发现及排查
 * 如未自定义 request-id，将使用 SDK 中的 random 方法自动生成。注意：random 方法生成的 request-id 不能保证全局唯一，推荐自定义 request-id
 */
$request->setRequestID("requestIdExample123456789");
$response = $walletIncomeClient->retryWalletIncome($request);
if ($response->isSuccess()) {
    // 操作成功
    $data = $response->getData();
    var_dump($data);
} else {
    // 失败返回
    echo 'code:' . $response->getCode() . ' message:' . $response->getMessage() . ' request-id:' . $response->getRequestID();
}
