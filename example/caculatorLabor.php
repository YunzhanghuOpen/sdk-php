<?php
define('TEST_PATH', dirname(__FILE__));
include_once(TEST_PATH . '/../vendor/autoload.php');
include_once(TEST_PATH . '/test_var.php');

use Yzh\CaculatorLaborServiceClient;
use Yzh\Config;
use Yzh\Model\Caculatorlabor\LaborCaculatorRequest;
use Yzh\Model\Caculatorlabor\MonthSettlement;
use Yzh\Model\Caculatorlabor\CalcTaxRequest;

// 连续劳务税费试算
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
    $caculatorLaborServiceClient = new CaculatorLaborServiceClient($config);
    $caculatorLaborServiceClient->setEnv(CaculatorLaborServiceClient::ENV_SANDBOX);// 沙箱环境
} catch (\Exception $e) {
    die($e->getMessage());
}

// 连续劳务税费试算（计算器）
$monthSettlement1 = new MonthSettlement(array(
    'month' => 1,
    'month_pre_tax_amount' => "10.00",
));
$monthSettlement2 = new MonthSettlement(array(
    'month' => 2,
    'month_pre_tax_amount' => "10.00",
));

$request = new LaborCaculatorRequest(array(
    'dealer_id' => $test_var['app_dealer_id'], // 平台企业 ID
    'broker_id' => $test_var['app_broker_id'], // 综合服务主体 ID
    'month_settlement_list' => array( //月度收入列表
        array(
            'month' => 1,
            'month_pre_tax_amount' => "10.00",
        ),
        array(
            'month' => 2,
            'month_pre_tax_amount' => "10.00",
        )
    ),
));
var_dump($request);
/*
 * request-id：请求 ID，请求的唯一标识
 * 建议平台企业自定义 request-id，并记录在日志中，便于问题发现及排查
 * 如未自定义 request-id，将使用 SDK 中的 random 方法自动生成。注意：random 方法生成的 request-id 不能保证全局唯一，推荐自定义 request-id
 */
$request->setRequestID("requestIdExample123456789");
$response = $caculatorLaborServiceClient->laborCaculator($request);
if ($response->isSuccess()) {
    // 操作成功
    $data = $response->getData();
    var_dump($data);
} else {
    // 失败返回
    echo 'code:' . $response->getCode() . ' message:' . $response->getMessage() . ' request-id:' . $response->getRequestID();
}

// 订单税费试算
$request = new CalcTaxRequest(array(
    'dealer_id' => $test_var['app_dealer_id'], // 平台企业 ID
    'broker_id' => $test_var['app_broker_id'], // 综合服务主体 ID
    'real_name' => "张三", // 姓名
    'id_card' => "11010519491231002X", // 证件号
    'pay' => "99", // 订单金额
));

/*
 * request-id：请求 ID，请求的唯一标识
 * 建议平台企业自定义 request-id，并记录在日志中，便于问题发现及排查
 * 如未自定义 request-id，将使用 SDK 中的 random 方法自动生成。注意：random 方法生成的 request-id 不能保证全局唯一，推荐自定义 request-id
 */
$request->setRequestID("requestIdExample123456789");
$response = $caculatorLaborServiceClient->calcTax($request);
if ($response->isSuccess()) {
    // 操作成功
    $data = $response->getData();
    var_dump($data);
} else {
    // 失败返回
    echo 'code:' . $response->getCode() . ' message:' . $response->getMessage() . ' request-id:' . $response->getRequestID();
}
