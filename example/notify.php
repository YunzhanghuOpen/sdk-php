<?php
define('TEST_PATH', dirname(__FILE__));
include_once(TEST_PATH . '/../vendor/autoload.php');
include_once(TEST_PATH . '/test_var.php');

use Yzh\Utils\Rsa;
use Yzh\Utils\Des;
use Yzh\Config;

$config = Config::newFromArray(array(
    'app_dealer_id' => $test_var['app_dealer_id'],
    'app_broker_id' => $test_var['app_broker_id'],
    'app_key' => $test_var['app_key'],
    'app_des3_key' => $test_var['app_des3_key'],
    'app_private_key' => $test_var['app_private_key'],
    'yzh_public_key' => $test_var['yzh_public_key'],
));

$dataString = "data=" . $_REQUEST['data'] . "&mess=" . $_REQUEST['mess'] . "&timestamp=" . $_REQUEST['timestamp'] . "&key=" . $config->app_key;

$rsa = Rsa::getInstance($config->app_private_key, $config->yzh_public_key);
$verifyResult = $rsa->verify($dataString, $_REQUEST['sign']);       #验签
//var_dump($verifyResult);      #打印验签结果
if ($verifyResult == true)     #验签成功
{
    $des3 = new Des($config->app_des3_key);
    $datainfo = $des3->decrypt($_REQUEST['data']);   #对业务数据进行解密
    //根据回调数据中的status做一下订单状态的判断和业务逻辑处理
    //若有用户钱包体系，则在下单同步返回成功时，将用户钱包进行相应金额的扣减冻结
    $tempData = json_decode($datainfo, true);
    $status = $tempData['data']['status'];
    //    var_dump($status);

    switch ($status) {
        case "1":
            // 已支付（对于支付宝和微信支付是最终状态，对于银行卡大部分情况是终态，小概率会出现“退汇现象”，状态由“成功”变为“退汇”）
            // TODO 更新业务订单状态,提示用户提现成功
            break;
        case "2":
            // 失败（最终状态）
            // TODO 更新业务订单状态,提示用户提现失败，若有用户钱包体系，则需将提现金额退回至用户钱包
            break;
        case "4":
            // 订单挂起（中间状态，挂起原因会在订单详细状态信息返回）
            // TODO 提示用户提现中，其他逻辑如：若因余额不足导致的订单挂起，可通知财务及时预付业务服务费，72小时内补足余额后可自动继续支付，切勿将订单挂起当做失败处理
            break;
        case "9":
            // 退汇失败（最终状态，银行卡支付路径特有现象，收到“成功”回调后，再收到“退汇”的回调，一般与成功状态间隔24小时以上）
            // TODO 更新业务订单状态为“退汇”（失败），通知用户提现失败，建议用户更换其他银行卡提现，若有用户钱包体系，则需将提现金额退回至用户钱包
            break;
        case "15":
            // 订单取消（最终状态，只有订单挂起的订单才可以取消）
            // TODO 更新业务订单状态为“取消”（失败，通知用户提现失败，若有用户钱包体系，则需将提现金额退回至用户钱包
            break;
    }
}
echo "success";       //回写success，终止本次回调
