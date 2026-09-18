<?php
define('TEST_PATH', dirname(__FILE__));
include_once(TEST_PATH . '/../vendor/autoload.php');
include_once(TEST_PATH . '/test_var.php');

use Yzh\Config;
use Yzh\WalletBalanceQueryClient;
use Yzh\Model\Walletbalancequery\QueryWalletBalanceRequest;

// 钱包余额查询
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
    $walletClient = new WalletBalanceQueryClient($config);
    $walletClient->setEnv(WalletBalanceQueryClient::ENV_SANDBOX);// 沙箱环境
} catch (\Exception $e) {
    die($e->getMessage());
}

// 查询钱包余额
$request = new QueryWalletBalanceRequest(array(
    'broker_id' => $test_var['app_broker_id'],               // 综合服务主体 ID
    'dealer_id' => $test_var['app_dealer_id'],               // 平台企业 ID
    'user_info' => array(                                    // 劳动者信息
        'real_name' => '张三',                                // 姓名
        'id_card' => '11010519491231002X',                   // 证件号
        'card_type' => 'idcard',                             // 证件类型编码
    ),
    'wallet_id' => 'wallet_123456',                          // 钱包 ID
));

/*
 * request-id：请求 ID，请求的唯一标识
 * 建议平台企业自定义 request-id，并记录在日志中，便于问题发现及排查
 * 如未自定义 request-id，将使用 SDK 中的 random 方法自动生成。注意：random 方法生成的 request-id 不能保证全局唯一，推荐自定义 request-id
 */
$request->setRequestID("requestIdExample123456789");
$response = $walletClient->queryWalletBalance($request);
if ($response->isSuccess()) {
    // 操作成功
    $data = $response->getData();
    var_dump($data);
} else {
    // 失败返回
    echo 'code:' . $response->getCode() . ' message:' . $response->getMessage() . ' request-id:' . $response->getRequestID();
}
