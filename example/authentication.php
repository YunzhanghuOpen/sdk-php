<?php
define('TEST_PATH', dirname(__FILE__));
include_once(TEST_PATH . '/../vendor/autoload.php');
include_once(TEST_PATH . '/test_var.php');

use Yzh\Config;
use Yzh\AuthenticationClient;
use Yzh\Model\Authentication\BankCardFourAuthVerifyRequest;
use Yzh\Model\Authentication\BankCardFourAuthConfirmRequest;
use Yzh\Model\Authentication\BankCardFourVerifyRequest;
use Yzh\Model\Authentication\BankCardThreeVerifyRequest;
use Yzh\Model\Authentication\IDCardVerifyRequest;
use Yzh\Model\Authentication\UserExemptedInfoRequest;
use Yzh\Model\Authentication\UserWhiteCheckRequest;
use Yzh\Model\Authentication\GetBankCardInfoRequest;

// 用户信息认证
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
    $authenticationClient = new AuthenticationClient($config);
    // $authenticationClient->setEnv(AuthenticationClient::ENV_SANDBOX);// 沙箱环境
} catch (\Exception $e) {
    die($e->getMessage());
}

// 身份证实名认证
$request = new IDCardVerifyRequest(array(
    'real_name' => '张三',                     // 姓名
    'id_card' => '11010519491231002X'         // 身份证号码
));
$response = $authenticationClient->iDCardVerify($request);
echo 'code:' . $response->getCode() . ' message:' . $response->getMessage() . ' request-id:' . $response->getRequestID();

// 银行卡三要素验证
$request = new BankCardThreeVerifyRequest(array(
    'real_name' => '张三',                        // 姓名
    'id_card' => '11010519491231002X',           // 身份证号码
    'card_no' => '6228888888888888888'           // 银行卡号
));

/*
 * request-id：请求 ID，请求的唯一标识
 * 建议平台企业自定义 request-id，并记录在日志中，便于问题发现及排查
 * 如未自定义 request-id，将使用 SDK 中的 random 方法自动生成。注意：random 方法生成的 request-id 不能保证全局唯一，推荐自定义 request-id
 */
$request->setRequestID("requestIdExample123456789");
$response = $authenticationClient->bankCardThreeVerify($request);
echo 'code:' . $response->getCode() . ' message:' . $response->getMessage() . ' request-id:' . $response->getRequestID();


// 银行卡四要素验证
$request = new BankCardFourVerifyRequest(array(
    'real_name' => '张三',                         // 姓名
    'id_card' => '11010519491231002X',            // 身份证号码
    'card_no' => '6228888888888888888',           // 银行卡号
    'mobile' => '188****8888'                     // 银行预留手机号
));

/*
 * request-id：请求 ID，请求的唯一标识
 * 建议平台企业自定义 request-id，并记录在日志中，便于问题发现及排查
 * 如未自定义 request-id，将使用 SDK 中的 random 方法自动生成。注意：random 方法生成的 request-id 不能保证全局唯一，推荐自定义 request-id
 */
$request->setRequestID("requestIdExample123456789");
$response = $authenticationClient->bankCardFourVerify($request);
echo 'code:' . $response->getCode() . ' message:' . $response->getMessage() . ' request-id:' . $response->getRequestID();

// 银行卡四要素鉴权请求（下发短信验证码）
$request = new BankCardFourAuthVerifyRequest(array(
    'real_name' => '张三',                         // 姓名
    'id_card' => '11010519491231002X',            // 身份证号码
    'card_no' => '6228888888888888888',           // 银行卡号
    'mobile' => '188****8888'                     // 银行预留手机号
));

/*
 * request-id：请求 ID，请求的唯一标识
 * 建议平台企业自定义 request-id，并记录在日志中，便于问题发现及排查
 * 如未自定义 request-id，将使用 SDK 中的 random 方法自动生成。注意：random 方法生成的 request-id 不能保证全局唯一，推荐自定义 request-id
 */
$request->setRequestID("requestIdExample123456789");
$response = $authenticationClient->bankCardFourAuthVerify($request);
if ($response->isSuccess()) {
    // 操作成功
    $data = $response->getData();
    var_dump($data);
} else {
    // 失败返回
    echo 'code:' . $response->getCode() . ' message:' . $response->getMessage() . ' request-id:' . $response->getRequestID();
}

// 银行卡四要素确认鉴权（上传短信验证码）
$request = new BankCardFourAuthConfirmRequest(array(
    'real_name' => '张三',                         // 姓名
    'id_card' => '11010519491231002X',            // 身份证号码
    'card_no' => '6228888888888888888',           // 银行卡号
    'mobile' => '188****8888',                    // 银行预留手机号
    'ref' => 'MTY1MDM0OTIwMi4zOC4xOA',            // 鉴权请求接口响应的交易凭证
    'captcha' => '123456'                         // 短信验证码
));

/*
 * request-id：请求 ID，请求的唯一标识
 * 建议平台企业自定义 request-id，并记录在日志中，便于问题发现及排查
 * 如未自定义 request-id，将使用 SDK 中的 random 方法自动生成。注意：random 方法生成的 request-id 不能保证全局唯一，推荐自定义 request-id
 */
$request->setRequestID("requestIdExample123456789");
$response = $authenticationClient->bankCardFourAuthConfirm($request);
echo 'code:' . $response->getCode() . ' message:' . $response->getMessage() . ' request-id:' . $response->getRequestID();

// 银行卡信息查询
$request = new GetBankCardInfoRequest(array(
    'bank_name' => '招商银行',                  // 银行名称
    'card_no' => '6228888888888888888',        // 银行卡号
));

/*
 * request-id：请求 ID，请求的唯一标识
 * 建议平台企业自定义 request-id，并记录在日志中，便于问题发现及排查
 * 如未自定义 request-id，将使用 SDK 中的 random 方法自动生成。注意：random 方法生成的 request-id 不能保证全局唯一，推荐自定义 request-id
 */
$request->setRequestID("requestIdExample123456789");
$response = $authenticationClient->getBankCardInfo($request);
if ($response->isSuccess()) {
    $data = $response->getData();
    var_dump($data);
} else {
    // 失败返回
    echo 'code:' . $response->getCode() . ' message:' . $response->getMessage() . ' request-id:' . $response->getRequestID();
}

// 图片转 BASE64
function getuploadfileinfo($file)
{
    // $file = $_REQUEST['user_images'];            // WEB 版使用
    if ($fp = fopen($file, "rb", 0)) {
        $gambar = fread($fp, filesize($file));
        fclose($fp);
        $base64 = chunk_split(base64_encode($gambar));
        return  $base64;
    }
}

// 上传非居民身份证验证名单信息
$request = new UserExemptedInfoRequest(array(
    'real_name' => '张三',                         // 姓名
    'id_card' => 'passporttest123456',            // 证件号码
    'card_type' => 'passport',                    // 证件类型码
    'comment_apply' => '备注信息',                 // 申请备注
    'dealer_id' => $test_var['app_dealer_id'],    // 平台企业 ID
    'broker_id' => $test_var['app_broker_id'],    // 综合服务主体 ID
    'user_images' => [getuploadfileinfo("/Library/WebServer/Documents/test.png")],     // 证件照片
    'image_urls' => ['https://www.example.com/imange01.pngg'],     // 证件照片 URL 地址
    'country' => 'AND',                           // 国别（地区）代码
    'birthday' => '20010809',                     // 出生日期
    'gender' => '男',                             // 性别
    'notify_url' => 'https://www.example.com',    // 审核回调地址
    'ref' => 'test12345678111'                    // 请求流水号，回调时会附带
));

/*
 * request-id：请求 ID，请求的唯一标识
 * 建议平台企业自定义 request-id，并记录在日志中，便于问题发现及排查
 * 如未自定义 request-id，将使用 SDK 中的 random 方法自动生成。注意：random 方法生成的 request-id 不能保证全局唯一，推荐自定义 request-id
 */
$request->setRequestID("requestIdExample123456789");
$response = $authenticationClient->userExemptedInfo($request);
if ($response->isSuccess()) {
    // 操作成功
    $data = $response->getData();
    var_dump($data->getOk());
} else {
    // 失败返回
    echo 'code:' . $response->getCode() . ' message:' . $response->getMessage() . ' request-id:' . $response->getRequestID();
}

// 查看用户是否在非居民身份证验证名单中
$request = new UserWhiteCheckRequest(array(
    'real_name' => '张三',                        // 姓名
    'id_card' => 'passporttest123456',           // 证件号码
));

/*
 * request-id：请求 ID，请求的唯一标识
 * 建议平台企业自定义 request-id，并记录在日志中，便于问题发现及排查
 * 如未自定义 request-id，将使用 SDK 中的 random 方法自动生成。注意：random 方法生成的 request-id 不能保证全局唯一，推荐自定义 request-id
 */
$request->setRequestID("requestIdExample123456789");
$response = $authenticationClient->userWhiteCheck($request);
if ($response->isSuccess()) {
    // 操作成功
    $data = $response->getData();
    var_dump($data);
} else {
    // 失败返回
    echo 'code:' . $response->getCode() . ' message:' . $response->getMessage() . ' request-id:' . $response->getRequestID();
}
