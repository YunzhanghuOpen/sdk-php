<?php
define('TEST_PATH', dirname(__FILE__));
include_once(TEST_PATH . '/../vendor/autoload.php');
include_once(TEST_PATH . '/test_var.php');

use Yzh\Config;
use Yzh\CustomClient;
use Yzh\Model\Custom\CustomRequest;
use Yzh\Model\Custom\CustomResponseData;

global $test_var;
// 通用请求函数
$config = Config::newFromArray(array(
    'app_dealer_id' => $test_var['app_dealer_id'],
    'app_broker_id' => $test_var['app_broker_id'],
    'app_key' => $test_var['app_key'],
    'app_des3_key' => $test_var['app_des3_key'],
    'app_private_key' => $test_var['app_private_key'],
    'yzh_public_key' => $test_var['yzh_public_key'],
    'sign_type' => $test_var['sign_type'],
    'service_name' => 'payment', // 请求服务
));

try {
    $custom_client = new CustomClient($config);
//     $custom_client->setEnv(\Yzh\BaseClient::ENV_SANDBOX);// 沙箱环境
} catch (\Exception $e) {
    die($e->getMessage());
}

/**
 * 自定义请求结构体
 */
class CreateBankpayOrderRequest extends CustomRequest
{
    /**
     * 平台企业订单号
     * @var string
     */
    public $order_id;

    /**
     * 平台企业 ID
     * @var string
     */
    public $dealer_id;

    /**
     * 综合服务主体 ID
     * @var string
     */
    public $broker_id;

    /**
     * 姓名
     * @var string
     */
    public $real_name;

    /**
     * 银行卡号
     * @var string
     */
    public $card_no;

    /**
     * 身份证号码
     * @var string
     */
    public $id_card;

    /**
     * 手机号
     * @var string
     */
    public $phone_no;

    /**
     * 订单金额
     * @var string
     */
    public $pay;

    /**
     * 订单备注
     * @var string
     */
    public $pay_remark;

    /**
     * 回调地址
     * @var string
     */
    public $notify_url;
}

/**
 * 自定义返回结构体
 */
class CreateBankpayOrderResponseData extends CustomResponseData
{
    /**
     * 平台企业订单号
     * @var string
     */
    protected $order_id;

    /**
     * 综合服务平台流水号
     * @var string
     */
    protected $ref;

    /**
     * 订单金额
     * @var string
     */
    protected $pay;
}

/**
 * 通用请求函数
 * 以“银行卡实时支付”为例
 */
$request = new CreateBankpayOrderRequest(array(
    'order_id' => '202009010016562012987',             // 平台企业订单号，由平台企业自定义并保证唯⼀性，最大支持 64 个英⽂字符
    'dealer_id' => $test_var['app_dealer_id'],         // 平台企业 ID
    'broker_id' => $test_var['app_broker_id'],         // 综合服务主体 ID
    'real_name' => '张三',                              // 银⾏开户姓名
    'card_no' => '6228888888888888888',                // 银行卡号，只支持对私借记卡
    'id_card' => '11010519491231002X',                 // 身份证号码（必填，报税时使用）
    'phone_no' => '188****8888',                       // 用户⼿机号
    'pay' => '100.00',                                 // 订单⾦额（参数类型是 String 类型，单位为元，支持两位小数，必填）
    'pay_remark' => '测试订单',                         // 订单备注（选填，最大支持 36 个字符且不支持特殊字符' " & | @% ( ) - : # + / < > ¥ \ ,）
    'notify_url' => 'https://www.example.com',         // 回调地址（选填，长度不超过 200 个字符）
));

/*
 * request-id：请求 ID，请求的唯一标识
 * 建议平台企业自定义 request-id，并记录在日志中，便于问题发现及排查
 * 如未自定义 request-id，将使用 SDK 中的 random 方法自动生成。注意：random 方法生成的 request-id 不能保证全局唯一，推荐自定义 request-id
 */
$request->setRequestID("requestIdExample123456789");
$response = $custom_client->doRequest("POST", "/api/payment/v1/order-bankpay", $request, new CreateBankpayOrderResponseData());
if ($response->isSuccess()) {
    // 操作成功
    $data = $response->getData();
    var_dump($data);
} else {
    // 失败返回
    echo 'code:' . $response->getCode() . ' message:' . $response->getMessage() . ' request-id:' . $response->getRequestID();
}
