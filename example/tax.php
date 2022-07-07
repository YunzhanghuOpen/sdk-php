<?php
define('TEST_PATH', dirname(__FILE__));
include_once(TEST_PATH . '/../vendor/autoload.php');
include_once(TEST_PATH . '/test_var.php');

use Yzh\Config;
use Yzh\TaxClient;
use Yzh\Model\Tax\GetTaxFileRequest;
use Yzh\Model\Tax\GetUserCrossRequest;
use Yzh\Utils\Rsa;

$config = Config::newFromArray(array(
    'app_dealer_id' => $test_var['app_dealer_id'],
    'app_broker_id' => $test_var['app_broker_id'],
    'app_key' => $test_var['app_key'],
    'app_des3_key' => $test_var['app_des3_key'],
    'app_private_key' => $test_var['app_private_key'],
    'yzh_public_key' => $test_var['yzh_public_key'],
));

try {
    $taxClient = new TaxClient($config);
    $taxClient->setEnv(TaxClient::ENV_PROD);
} catch (\Exception $e) {
    die($e->getMessage());
}
//个税扣缴明细

//下载个税扣缴明细表
//$request = new GetTaxFileRequest(array(
//    'dealer_id' => $test_var['app_dealer_id'],   # 平台企业ID(必填)
//    'ent_id' => 'accumulus_tj',                  # 平台企业签约主体，accumulus_tj：天津，accumulus_sh：上海，accumulus_gs：甘肃
//    'year_month' => '2022-03'                    # 所属期
//));
//$response = $taxClient->getTaxFile($request);
//var_dump(array('response' => $response->toArray()));

//     解密得到个税文件的解压文件明文密码
//pwd为下载接口响应参数中文件解压缩密码，需要使用平台企业私钥进行解密得到明文
$pwd = "KbCfTWmqR+HpRGVISFBkmu/ZWtWTOcVs6Gl5/mJVtMjVr7V5e8RlD3gbtsS4gdy7pUWptN8zIwmCl4OkPTg8/oIY/I1BotzFSPCuxp6Gy5j/ZPd+pK6ODONpHmP9dL0KJr+QHhFmA9G9XLOxoSwlZ2hAvzkkRWFUdfP/TXvNNzynTj7/wMrBjoJCkfMY43e74gocyyFEVm34/icSF4UutdWW4df1sS6wA+mcbgamu1vbdBKXY3yViJXDWJTmgShpy0QUVSoLVtuPDVBCcLRsrvpujVqLLCn5PKtPJCtZdMpe0MxxFpI4RRyqKsc9t00gPAVMOz6pFROWwcskp940tA==";
$rsa = $rsa = Rsa::getInstance($config->app_private_key, $config->yzh_public_key);
// ①使用 BASE64 算法对数据解码，得到密文。
// ②使用 RSA 算法用私钥对密文进行解密，得到文件解压缩密码。
$password = $rsa->privateKeyDecrypt(base64_decode($pwd));
echo "明文解压缩密码:" . $password;

////查询纳税人是否为跨集团用户
$request = new GetUserCrossRequest(array(
    'dealer_id' => $test_var['app_dealer_id'],   # 平台企业ID(必填)
    'ent_id' => 'accumulus_tj',                  # 平台企业签约主体，accumulus_tj：天津，accumulus_gs：甘肃
    'year' => '2022',                    # 年份
    'id_card' => '110114199906085611',            # 身份证
));
$response = $taxClient->getUserCross($request);
var_dump(array('response' => $response->toArray()));
