<?php
define('TEST_PATH', dirname(__FILE__));
include_once(TEST_PATH . '/../vendor/autoload.php');
include_once(TEST_PATH . '/test_var.php');

use Yzh\Config;
use Yzh\TaxClient;
use Yzh\Model\Tax\GetTaxFileRequest;
use Yzh\Model\Tax\GetUserCrossRequest;
use Yzh\Utils\Rsa;

// 个人所得税扣缴明细表
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
    $taxClient = new TaxClient($config);
} catch (\Exception $e) {
    die($e->getMessage());
}

// 下载个人所得税扣缴明细表
$request = new GetTaxFileRequest(array(
    'dealer_id' => $test_var['app_dealer_id'],   // 平台企业 ID
    'ent_id' => 'accumulus_tj',                  // 平台企业签约主体，accumulus_tj：天津，accumulus_sh：上海，accumulus_gs：甘肃
    'year_month' => '2022-03'                    // 所属期
));

/*
 * request-id：请求 ID，请求的唯一标识
 * 建议平台企业自定义 request-id，并记录在日志中，便于问题发现及排查
 * 如未自定义 request-id，将使用 SDK 中的 random 方法自动生成。注意：random 方法生成的 request-id 不能保证全局唯一，推荐自定义 request-id
 */
$request->setRequestID("requestIdExample123456789");
$response = $taxClient->getTaxFile($request);
if ($response->isSuccess()) {
    // 操作成功
    $data = $response->getData();
    var_dump($data);
} else {
    // 失败返回
    echo 'code:' . $response->getCode() . ' message:' . $response->getMessage() . ' request-id:' . $response->getRequestID();
}

/*
 * 解密得到文件解压缩明文密码
 * pwd 为下载接口响应参数中的文件解压缩密码，需使用平台企业私钥进行解密得到明文密码
 */
$pwd = "KbCfTWmqR+HpRGVISFBkmu/Z********************sc9t00gPAVMOz6pFROWwcskp940tA==";
$rsa = $rsa = Rsa::getInstance($config->app_private_key);

/*
 * ①使用 BASE64 算法对数据解码，得到密文。
 * ②使用 RSA 加解密算法用平台企业私钥对密文进行解密，得到文件解压缩明文密码。
 */
$password = $rsa->privateKeyDecrypt(base64_decode($pwd));
echo "解压缩明文密码:" . $password;

// 查询纳税人是否为跨集团用户
$request = new GetUserCrossRequest(array(
    'dealer_id' => $test_var['app_dealer_id'],   // 平台企业 ID
    'ent_id' => 'accumulus_tj',                  // 平台企业签约主体，accumulus_tj：天津，accumulus_gs：甘肃
    'year' => '2022',                            // 年份
    'id_card' => '11010519491231002X',           // 身份证号码
));

/*
 * request-id：请求 ID，请求的唯一标识
 * 建议平台企业自定义 request-id，并记录在日志中，便于问题发现及排查
 * 如未自定义 request-id，将使用 SDK 中的 random 方法自动生成。注意：random 方法生成的 request-id 不能保证全局唯一，推荐自定义 request-id
 */
$request->setRequestID("requestIdExample123456789");
$response = $taxClient->getUserCross($request);
if ($response->isSuccess()) {
    // 操作成功
    $data = $response->getData();
    var_dump($data);
} else {
    // 失败返回
    echo 'code:' . $response->getCode() . ' message:' . $response->getMessage() . ' request-id:' . $response->getRequestID();
}