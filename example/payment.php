<?php
define('TEST_PATH', dirname(__FILE__));
include_once(TEST_PATH . '/../vendor/autoload.php');
include_once(TEST_PATH . '/test_var.php');

use Yzh\Config;
use Yzh\Model\Payment\CancelOrderRequest;
use Yzh\Model\Payment\CreateBankpayOrderRequest;
use Yzh\Model\Payment\CreateWxpayOrderRequest;
use Yzh\Model\Payment\GetDealerVARechargeAccountRequest;
use Yzh\Model\Payment\GetEleReceiptFileRequest;
use Yzh\Model\Payment\ListAccountRequest;
use Yzh\PaymentClient;
use Yzh\Model\Payment\CreateAlipayOrderRequest;
use Yzh\Model\Payment\GetOrderRequest;

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


// 银行卡实时下单
$request = new CreateBankpayOrderRequest(array(
    'order_id' => 'bank12345678901111',                // 平台企业订单号，由平台企业保持唯⼀性 ，之多包含 64 个英⽂字符
    'dealer_id' => $test_var['app_dealer_id'],         // 平台企业 ID
    'broker_id' => $test_var['app_broker_id'],         // 综合服务主体 ID
    'real_name' => '张一',                              // 银⾏开户姓名
    'card_no' => '6214012345678910',                   // 银行卡号，只支持对私借记卡
    'id_card' => '110101012345678910',                 // 身份证号码（必填，报税时使用）
    'phone_no' => '18100000000',                       // ⼿机号
    'pay' => '0.1',                                    // 订单⾦额（参数类型是 string 类型，单位为元，支持两位小数，必填）
    'pay_remark' => '测试订单',                          // 订单备注（选填，至多包含 20 个字符且不支持特殊字符，' " & | @% ( ) - : // + / < > ¥ \ ,）
    'notify_url' => 'http://localhost/php-sdk-2/test/callback.php',  // 回调地址（选填，长度不超过 200 个字符）
    'project_id' => ''                                 // 项目ID，该字段由云账户分配，当接口指定项目时，会将订单关联指定项目
));
$response = $paymentClient->createBankpayOrder($request);
$respdata = array('response' => $response->toArray());
if ($respdata['response']['code'] == '0000') {
    // 订单接收成功，支付结果未知，待异步通知
    // TODO 等待异步通知或订单查询接口获取订单状态
    echo "接单成功";
} else
    if ($respdata['response']['code']  == '2002') {
    // 已上传过该流水
    // TODO 幂等性校验，订单号已存在，具体订单结果需等待异步通知，或主动调用订单查询接口获取
    echo "订单已存在";
} else
    // TODO 根据返回的 message 处理订单请求，切记若需重试请求，请使用原订单号重试
    echo  $respdata['response']['message'];

// 支付宝实时接口
$request = new CreateAlipayOrderRequest(array(
    'order_id' => 'Ali12345678910',                // 平台企业订单号，由平台企业保持唯⼀性 ，至多包含 64 个英⽂字符
    'dealer_id' => $test_var['app_dealer_id'],     // 平台企业 ID
    'broker_id' => $test_var['app_broker_id'],     // 综合服务主体 ID
    'real_name' => '张一',                          // 姓名
    'card_no' => 'test123456@163.com',             // 收款⼈⽀付宝账户
    'id_card' => '110101012345678910',             // 身份证号码（必填，报税时使用）
    'phone_no' => '18100000000',                   // ⽤户⼿机号
    'pay' => '0.1',                                // 订单⾦额（参数类型是 string，单位为元，支持两位小数，必填）
    'pay_remark' => '测试订单',                      // 订单备注（选填，至多支持 40 个字符且不支持特殊字符，⼀个汉字占 2 个字符，不支持的特殊字符为 ' " & | @% ( ) - : # + / < > ¥ \ ,）
    'check_name' => 'Check',                       // 校验⽀付宝账户姓名（固定值 Check）
    'notify_url' => 'http://xxx',                  // 回调地址（选填，长度不超过 200 个字符）
    'project_id' => ''                             // 项目ID，该字段由云账户分配，当接口指定项目时，会将订单关联指定项目
));
$response = $paymentClient->createAlipayOrder($request);
$respdata = array('response' => $response->toArray());
if ($respdata['response']['code'] == '0000') {
    // 订单接收成功，支付结果未知，待异步通知
    // TODO 等待异步通知或订单查询接口获取订单状态
    echo "接单成功";
} else
    if ($respdata['response']['code']  == '2002') {
    // 已上传过该流水
    // TODO 幂等性校验，订单号已存在，具体订单结果需等待异步通知，或主动调用订单查询接口获取
    echo "订单已存在";
} else
    // TODO 根据返回的 message 处理订单请求，切记若需重试请求，请使用原订单号重试
    echo  $respdata['response']['message'];

// 微信实时下单
$request = new CreateWxpayOrderRequest(array(
    'order_id' => 'wxpay1234567890',              // 平台企业订单号，由平台企业保持唯⼀性，至多支持 64 个英⽂字符
    'dealer_id' => $test_var['app_dealer_id'],    // 平台企业 ID
    'broker_id' => $test_var['app_broker_id'],    // 综合服务主体 ID
    'real_name' => '张一',                         // 姓名
    'openid' => 'wx12dhei48349_2huew',            // 平台企业 AppID 下⽤户的 openid
    'id_card' => '110101012345678910',            // 身份证号码（必填，报税时使用）
    'phone_no' => '18100000000',                  // ⽤户⼿机号
    'pay' => '0.1',                               // 订单⾦额（参数类型是 string，单位为元，支持两位小数，必填）
    'pay_remark' => '测试订单',                    // 订单备注（选填，至多支持 32 个字符且不支持特殊字符，⼀个汉字占 2 个字符，不支持的特殊字符为 ' " & | @% ( ) - : # + / < > ¥ \ ,）
    'wx_app_id' => '',                            // 平台企业微信 AppID（选填，最⼤⻓度为 200，注：若平台企业在云账户绑定了多个 AppID，则此处需指定 AppID）
    'notify_url' => 'http:xx',                 // 回调地址（选填，长度不超过 200 个字符）
    'wxpay_mode' => 'transfer',                   // 微信支付模式（必填，固定值：transfer）
    'project_id' => '001'                         // 项目 ID，该字段由云账户分配，当接口指定项目时，会将订单关联指定项目
));
$response = $paymentClient->createWxpayOrder($request);
// var_dump(array('response' => $response->toArray()));
$respdata = array('response' => $response->toArray());
if ($respdata['response']['code'] == '0000') {
    // 订单接收成功，支付结果未知，待异步通知
    // TODO 等待异步通知或订单查询接口获取订单状态
    echo "接单成功";
} else {
    if ($respdata['response']['code']  == '2002') {
        // 已上传过该流水
        // TODO 幂等性校验，订单号已存在，具体订单结果需等待异步通知，或主动调用订单查询接口获取
        echo "订单已存在";
    } else {
        // TODO 根据返回的 message 处理订单请求，切记若需重试请求，请使用原订单号重试
        echo  $respdata['response']['message'];
    }
}


// 单笔订单查询
$request = new GetOrderRequest(array(
    'order_id' => 'Ali12345678910',               // 平台企业订单号，由平台企业保持唯⼀性
    'channel' => '支付宝',                         // 支付路径名，银⾏卡，⽀付宝，微信（选填，不填默认为银⾏卡订单查询，注意 value 值为中文字符）
    'data_type' => '',                            // 如果为 encryption，则对返回的 data 进行加密
));
$response = $paymentClient->getOrder($request);
$respdata = array('response' => $response->toArray());
if ($respdata['response']['code'] == '0000') {
    //  TODO :  code=0000,订单查询成功，根据订单状态 status 判断订单状态，做业务订单的处理
    echo "查询成功:";
    var_dump($respdata['response']['data']);
} else if ($respdata['response']['code']  == '2018') {
    // 已上传过该流水
    // TODO :  code=2018,表示订单不存在，检查一下 channel 是否传递正确，若正确，则可以使用原 order_id 再次下单
    echo "订单不存在";
} else {
    // TODO :  其他 code 应当做异常情况，订单状态当“未知”处理，可稍后重试直至获取到 code=0000 或 2018，或者是联系云账户进行人工查询
    echo  $respdata['response']['message'];
}


// 查询平台企业余额
$request = new listAccountRequest(array(
    'dealer_id' => $test_var['app_dealer_id'],    // 平台企业 ID
));
$response = $paymentClient->listAccount($request);
var_dump(array('response' => $response->toArray()));

// 查询电子回单
$request = new  GetEleReceiptFileRequest(array(
    'order_id' => 'alipay1234567890',            // 平台企业订单号（与平台流水号不能同时为空）
    'ref' => '',                                 // 平台订单号（与平台企业订单号不能同时为空）
));
$response = $paymentClient->getEleReceiptFile($request);
var_dump(array('response' => $response->toArray()));

// 取消待支付订单
$request = new CancelOrderRequest(array(
    'dealer_id' => $test_var['app_dealer_id'],     // 平台企业 ID
    'order_id' => '',                              // 平台企业订单号，由平台企业保持唯⼀性
    'ref' => '65154237254744',                     // 平台订单号（与平台企业订单号不能同时为空）
    'channel' => '支付宝',                          // 银⾏卡，⽀付宝，微信（选填，不填默认为银⾏卡订单查询，注意 value 值为中文字符）
    'data_type' => '',                             // 如果为 encryption，则对返回的 data 进行加密
));
$response = $paymentClient->cancelOrder($request);
var_dump(array('response' => $response->toArray()));

// 查询平台企业汇款信息
$request = new GetDealerVARechargeAccountRequest(array(
    'dealer_id' => $test_var['app_dealer_id'],    // 平台企业 ID
    'broker_id' => $test_var['app_broker_id'],    // 综合服务主体 ID
));
$response = $paymentClient->getDealerVARechargeAccount($request);
var_dump(array('response' => $response->toArray()));
