<?php
define('TEST_PATH', dirname(__FILE__));
include_once(TEST_PATH . '/../vendor/autoload.php');
include_once(TEST_PATH . '/test_var.php');

use Yzh\Config;
use Yzh\Model\Payment\CreateBatchOrderRequest;
use Yzh\Model\Payment\GetOrderRequest;
use Yzh\Model\Payment\ConfirmBatchOrderRequest;
use Yzh\PaymentClient;

$config = Config::newFromArray(array(
    'app_dealer_id' => $test_var['app_dealer_id'],
    'app_broker_id' => $test_var['app_broker_id'],
    'app_key' => $test_var['app_key'],
    'app_des3_key' => $test_var['app_des3_key'],
    'app_private_key' => $test_var['app_private_key'],
    'yzh_public_key' => $test_var['yzh_public_key'],
));

try {
    $paymentClient = new PaymentClient($config);
    $paymentClient->setEnv(PaymentClient::ENV_PROD);
} catch (\Exception $e) {
    die($e->getMessage());
}


//批次下单
$request = new CreateBatchOrderRequest(array(
    'batch_id' => 'batch00415111',                     // 平台企业批次号
    'dealer_id' => $test_var['app_dealer_id'],         // 平台企业 ID
    'broker_id' => $test_var['app_broker_id'],         // 综合服务主体 ID
    'channel'=> '支付宝',                               // 支付路径
    'total_pay' => '0.03',                             // 订单总金额
    'total_count' => '3',                              // 总笔数
    'order_list'=> [                                   // 订单列表，最多 100 笔订单
       [
           'order_id' => '001212',                     // 平台企业订单号
           'real_name' => '张一',                       // 姓名
           'card_no' => 'test123@163.com',             // 收款账号
           'id_card' => '110101012345678910',          // 身份证号码
           'pay' => '0.01',                            // 订单金额
           'pay_remark' => '测试订单1',                  // 订单备注
           'notify_url' => 'http://localhost/php-sdk-2/test/callback1.php'   // 回调地址
      ],
       [
           'order_id' => '002322',
           'real_name' => '张二',
           'card_no' => 'test123@123.com',
           'id_card' => '110101012345678911',
           'pay' => '0.01',
           'pay_remark' => '测试订单2',
           'notify_url' => 'http://localhost/php-sdk-2/test/callback2.php'
    ],
       [
           'order_id' => '003432',
           'real_name' => '张三',
           'card_no' => 'test123@163.com',
           'id_card' => '110101012345678912',
           'pay' => '0.01',
           'pay_remark' => '测试订单3',
           'notify_url' => 'http://localhost/php-sdk-2/test/callback3.php'
       ]
    ]
));
$response = $paymentClient->createBatchOrder($request);
$respdata = array('response' => $response->toArray());
var_dump($respdata);

// 批次确认
$request = new ConfirmBatchOrderRequest(array(
    'dealer_id' => $test_var['app_dealer_id'],     // 平台企业 ID
    'broker_id' => $test_var['app_broker_id'],     // 综合服务主体 ID
    'batch_id' => 'batch004',                      // 平台企业批次号
    'channel' => '支付宝'                           // 银⾏卡，⽀付宝，微信（选填，不填默认为银⾏卡订单查询，注意 value 值为中文字符）
));
$response = $paymentClient->confirmBatchOrder($request);
var_dump(array('response' => $response->toArray()));



