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

$dataString="data=".$_REQUEST['data']."&mess=".$_REQUEST['mess']."&timestamp=".$_REQUEST['timestamp']."&key=".$config->app_key;

$rsa =Rsa::getInstance($config->app_private_key,$config->yzh_public_key);
$verifyResult = $rsa->verify($dataString,$_REQUEST['sign']);       #验签
//var_dump($verifyResult);      #打印验签结果
if ($verifyResult == true )     #验签成功
{
    $des3 = new Des($config->app_des3_key);
    $datainfo=$des3->decrypt($_REQUEST['data']);   #对业务数据进行解密
    //根据回调数据中的status做一下订单状态的判断和业务逻辑处理
    //若有用户钱包体系，则在下单同步返回成功时，将用户钱包进行相应金额的扣减冻结
    $tempData = json_decode($datainfo,true);
    $status=$tempData['data']['status'];
//    var_dump($status);

    switch ($status) {
        case "1":
            // 支付成功（对于支付宝和微信支付是最终状态，对于银行卡大部分情况是终态，小概率会出现"退汇现象"，状态由"成功"变为"退汇"）
            // TODO 更新业务订单状态,提示用户结算成功
            break;
        case "2":
            // 支付失败（最终状态）
            // TODO 更新业务订单状态,提示用户结算失败，若有用户钱包体系，则需将结算金额退回至用户钱包
            break;
        case "4":
            // 订单挂单（中间状态，挂单原因会在订单详细状态信息返回）
            // TODO 提示用户结算中，其他逻辑如：若因余额不足导致的挂单，可通知财务及时充值，72小时内补足余额后可自动继续支付
            break;
        case "9":
            // 退汇，（最终状态，银行卡渠道特有现象，会先收到"成功"回调，然后再收到"退汇"的回调，一般以成功状态间隔24小时以上）
            // TODO 更新业务订单状态为“退汇”（失败），通知用户结算失败，建议用户更换其他银行卡结算，若有用户钱包体系，则需将结算金额退回至用户钱包
            break;
        case "15":
            // 订单取消，（最终状态，只有挂单的订单才可以取消）
            // TODO 更新业务订单状态为“取消”（失败），通知用户结算失败，若有用户钱包体系，则需将结算金额退回至用户钱包
            break;
    }
}
echo "success";       //回写success，终止本次回调