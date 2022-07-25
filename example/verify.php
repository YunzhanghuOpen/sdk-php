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

$config = Config::newFromArray(array(
    'app_dealer_id' => $test_var['app_dealer_id'],
    'app_broker_id' => $test_var['app_broker_id'],
    'app_key' => $test_var['app_key'],
    'app_des3_key' => $test_var['app_des3_key'],
    'app_private_key' => $test_var['app_private_key'],
    'yzh_public_key' => $test_var['yzh_public_key'],
));

try {
    $authenticationClient = new AuthenticationClient($config);
    $authenticationClient->setEnv(AuthenticationClient::ENV_PROD);
} catch (\Exception $e) {
    die($e->getMessage());
}
//用户信息认证

////身份实名认证
//$request = new IDCardVerifyRequest(array(
//    'real_name' => '张一',                         # 姓名
//    'id_card' => '110101012345678910',            # 身份证号码
//));
//$response = $authenticationClient->iDCardVerify($request);
//var_dump(array('response' => $response->toArray()));
//
//
////银行卡三要素验证
//$request = new BankCardThreeVerifyRequest(array(
//'real_name' => '张一',                        # 姓名
//'id_card' => '110101012345678910',           # 身份证号码
//'card_no' => '6214012345678910'              # 银行卡号
//));
//$response = $authenticationClient->bankCardThreeVerify($request);
//var_dump(array('response' => $response->toArray()));
//
//
//
////银行卡四要素验证
//$request = new BankCardFourVerifyRequest(array(
//'real_name' => '张一',                         # 姓名
//'id_card' => '110101012345678910',            # 身份证号码
//'card_no' => '6214012345678910',              # 银行卡号
//'mobile' => '18100000000'                     # 银行预留手机号
//));
//$response = $authenticationClient->bankCardFourVerify($request);
//var_dump(array('response' => $response->toArray()));
//
//
//
//// 银行卡四要素鉴权请求（下发短信验证码）
//$request = new BankCardFourAuthVerifyRequest(array(
//'real_name' => '张一',                         # 姓名
//'id_card' => '110101012345678910',            # 身份证号码
//'card_no' => '6214012345678910',              # 银行卡号
//'mobile' => '18100000000'                     # 银行预留手机号
//));
//$response = $authenticationClient->bankCardFourAuthVerify($request);
//var_dump(array('response' => $response->toArray()));
//
//
//
//// 银行卡四要素确认鉴权（上传短信验证码）
//$request = new BankCardFourAuthConfirmRequest(array(
//'real_name' => '张一',                         # 姓名
//'id_card' => '110101012345678910',            # 身份证号码
//'card_no' => '6214012345678910',              # 银行卡号
//'mobile' => '18100000000',                    # 银行预留手机号
//'ref' => 'MTY1MDM0OTIwMi4zOC4xOA',            # 鉴权请求接口响应的交易凭证
//'captcha' => '123456'                         # 短信验证码
//
//));
//$response = $authenticationClient->bankCardFourAuthConfirm($request);
//var_dump(array('response' => $response->toArray()));
//
//
//
////银行卡信息查询
//$request = new GetBankCardInfoRequest(array(
//    'bank_name' => '招商银行',                       # 银行名称
//    'card_no' => '6214012345678910',               # 银行卡号
//
//));
//$response = $authenticationClient->getBankCardInfo($request);
//var_dump(array('response' => $response->toArray()));
//

//上传免验证用户名单信息
// 图片转 BASE64编码
function getuploadfileinfo($file)
{
//$file = $_REQUEST['user_images']; //web版使用
if ($fp = fopen($file, "rb", 0)) {
$gambar = fread($fp, filesize($file));
fclose($fp);
//获取图片BASE64
$base64 = chunk_split(base64_encode($gambar));
//echo $base64;
return  $base64;
}
}

$request = new UserExemptedInfoRequest(array(
'real_name' => '张一',                         # 姓名
'id_card' => 'passporttest123456',             # 证件号
'card_type' => 'passport',                    # 证件类型码
'comment_apply' => '申请备注信息',              # 申请备注
'dealer_id' => $test_var['app_dealer_id'],    # 平台企业ID
'broker_id' => $test_var['app_broker_id'],    # 综合服务主体ID
'user_images' => [getuploadfileinfo("/Library/WebServer/Documents/test.png")],     # 证件照片（base64）
'country' => 'AND',                           # 国别（地区）代码
'birthday' => '20010809',                     # 出生日期
'gender' => '男',                             # 性别
'notify_url' => '回调地址',                    # 审核回调地址
'ref' => 'test1234567890'                           # 请求流水号，回调时会附带
));
$response = $authenticationClient->userExemptedInfo($request);
var_dump(array('response' => $response->toArray()));

//// 查看免验证名单是否存在
//$request = new UserWhiteCheckRequest(array(
//'real_name' => '张一',                        # 姓名
//'id_card' => 'test123456',                    # 证件号
//));
//$response = $authenticationClient->userWhiteCheck($request);
//var_dump(array('response' => $response->toArray()));
//
