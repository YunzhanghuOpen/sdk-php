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
   // $paymentClient->setEnv(PaymentClient::ENV_PROD);
   $paymentClient->setEnv(PaymentClient::ENV_PROD);
} catch (\Exception $e) {
   die($e->getMessage());
}

/**
//银行卡实时下单
$request = new CreateBankpayOrderRequest(array(
   'order_id' => 'bank12345678901111',                # 平台企业订单号，由平台企业保持唯⼀性(必填)，64个英⽂字符以内
   'dealer_id' => $test_var['app_dealer_id'],   # 平台企业ID(必填)
   'broker_id' => $test_var['app_broker_id'],   # 综合服务主体ID(必填)
   'real_name' => '张一',                        # 银⾏开户姓名(必填)
   'card_no' => '62146000',             # 银行卡号，只支持对私借记卡(必填)
   'id_card' => '1202211010',               # 身份证(必填,报税时使用)
   'phone_no' => '13522',                 # ⼿机号(选填)
   'pay' => '0.1',                            # 订单⾦额（参数类型是string类型，单位为元,支持两位小数，必填）
   'pay_remark' => '测试订单',                    # 打款备注(选填，最⼤20个字符，⼀个汉字占2个字符，不允许特殊字符：不支持特殊字符 ' " & | @% ( ) - : # + / < > ¥ \ ,
   'notify_url' => 'http://localhost/php-sdk-2/test/callback.php',  # 回调地址(选填，最⼤⻓度为200)
   'project_id' => ''                           #项目ID,该字段由云账户分配，当接口指定项 目时，会将订单关联指定项目
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
   // TODO 根据返回的message处理订单请求，切记若需重试请求，请使用原订单号重试
   echo  $respdata['response']['message'];

//支付宝实时接口
$request = new CreateAlipayOrderRequest(array(
   'order_id' => 'Ali12345678910',                # 平台企业订单号，由平台企业保持唯⼀性(必填)，64个英⽂字符以内
   'dealer_id' => $test_var['app_dealer_id'],  # 平台企业ID(必填)
   'broker_id' => $test_var['app_broker_id'],  # 综合服务主体ID(必填)
   'real_name' => '张一',                     # 姓名(必填)
   'card_no' => 'test@163.com',            # 收款⼈⽀付宝账户(必填)
   'id_card' => '12011010',          # 身份证(必填,报税时使用)
   'phone_no' => '13222',                # ⽤户⼿机号(选填)
   'pay' => '0.1',                             # 订单⾦额（参数类型是string类型，单位为元,支持两位小数，必填）
   'pay_remark' => '测试订单',                  # 打款备注(选填，最⼤40个字符，⼀个汉字占2个字符，不允许特殊字符：不支持特殊字符 ' " & | @% ( ) - : # + / < > ¥ \ ,
   'check_name' => 'Check',                    # 校验⽀付宝账户姓名（固定值 Check ）
   'notify_url' => 'http://xxx',               # 回调地址(选填，最⼤⻓度为200)
   'project_id' => ''                         # 项目ID,该字段由云账户分配，当接口指定项 目时，会将订单关联指定项目
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
   // TODO 根据返回的message处理订单请求，切记若需重试请求，请使用原订单号重试
   echo  $respdata['response']['message'];

//微信实时下单
$request = new CreateWxpayOrderRequest(array(
   'order_id' => 'wxpay1234567890',              # 平台企业订单号，由平台企业保持唯⼀性(必填)，64个英⽂字符以内
   'dealer_id' => $test_var['app_dealer_id'],    # 平台企业ID(必填)
   'broker_id' => $test_var['app_broker_id'],    # 综合服务主体ID(必填)
   'real_name' => '张一',                         # 姓名(必填)
   'openid' => 'wx12dhei48349_2huew',            # 平台企业AppID下，某⽤户的openid(必填)
   'id_card' => '120221010',                # 身份证(必填,报税时使用)
   'phone_no' => '132',                  # ⽤户⼿机号(选填)
   'pay' => '0.1',                             # 订单⾦额（参数类型是string类型，单位为元,支持两位小数，必填）
   'pay_remark' => '测试订单',                    # 打款备注(选填，最⼤32个字符，⼀个汉字占2个字符，不允许特殊字符：不支持特殊字符 ' " & | @% ( ) - : # + / < > ¥ \ ,
   'wx_app_id' => '',                            # 微信打款平台企业微信AppID(选填，最⼤⻓度为200 注：若平台企业在云账户绑定了多个appid，则此处需指定appid)
   'notify_url' => 'http://xxx',                 # 回调地址(选填，最⼤⻓度为200)
   'wxpay_mode' => 'transfer',                     # 微信打款模式(必填，固定值：transfer)
   'project_id' => '001'                           # 项目ID,该字段由云账户分配，当接口指定项 目时，会将订单关联指定项目
));
$response = $paymentClient->createWxpayOrder($request);
//var_dump(array('response' => $response->toArray()));
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
      // TODO 根据返回的message处理订单请求，切记若需重试请求，请使用原订单号重试
      echo  $respdata['response']['message'];
   }
}
 */

//单笔订单查询
$request = new GetOrderRequest(array(
   'order_id' => 'Ali12345678910',               # 平台企业订单号，由平台企业保持唯⼀性(必填)
   'channel' => '支付宝',                         # 银⾏卡，⽀付宝，微信(选填，不填默认为银⾏卡订单查询，注意填写的value是中文)
   'data_type' => '',                            # 如果为encryption，则对返回的data进行加密(选填)
));
$response = $paymentClient->getOrder($request);
$respdata = array('response' => $response->toArray());
if ($respdata['response']['code'] == '0000') {
   //  TODO :  code=0000,订单查询成功，根据订单状态status判断订单状态，做业务订单的处理
   echo "查询成功:";
   var_dump($respdata['response']['data']);
} else if ($respdata['response']['code']  == '2018') {
   // 已上传过该流水
   # TODO :  code=2018,订单不存在，检查一下channel是否传递正确，若正确，则可以使用原order_id再次下单
   echo "订单不存在";
} else {
   # TODO :  其他code应当做异常情况，订单状态当"未知"处理，可稍后重试直至获取到code=0000或2018，或者是联系云账户进行人工查询
   echo  $respdata['response']['message'];
}

/**
//查询平台企业余额
$request = new listAccountRequest(array(
   'dealer_id' => $test_var['app_dealer_id'],    # 平台企业ID(必填)
));
$response = $paymentClient->listAccount($request);
var_dump(array('response' => $response->toArray()));

//查询电子回单
$request = new  GetEleReceiptFileRequest(array(
   'order_id' => 'alipay1234567890',            # 平台企业订单号（与平台流水号不能同时为空）
   'ref' => '',                                 # 平台订单号（与平台企业订单号不能同时为空）
));
$response = $paymentClient->getEleReceiptFile($request);
var_dump(array('response' => $response->toArray()));

//取消待支付订单
$request = new CancelOrderRequest(array(
   'dealer_id' => $test_var['app_dealer_id'],     # 平台企业ID(必填)
   'order_id' => '',                              # 平台企业订单号，由平台企业保持唯⼀性(必填)
   'ref' => '65154237254744',                     # 平台订单号（与平台企业订单号不能同时为空）
   'channel' => '支付宝',                          # 银⾏卡，⽀付宝，微信(选填，不填默认为银⾏卡订单查询，注意填写的value是中文)
   'data_type' => '',                             # 如果为encryption，则对返回的data进行加密(选填)
));
$response = $paymentClient->cancelOrder($request);
var_dump(array('response' => $response->toArray()));

//查询平台企业VA账户信息
$request = new GetDealerVARechargeAccountRequest(array(
       'dealer_id' => $test_var['app_dealer_id'],    # 平台企业ID(必填)
       'broker_id' => $test_var['app_broker_id'],    # 综合服务主体ID(必填)
));
$response = $paymentClient->getDealerVARechargeAccount($request);
var_dump(array('response' => $response->toArray()));
 */
