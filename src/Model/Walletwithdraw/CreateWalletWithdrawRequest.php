<?php

namespace Yzh\Model\Walletwithdraw;

use Yzh\Model\BaseRequest;

/**
 * 发起钱包余额提现请求
 * Class CreateWalletWithdrawRequest
 */
class CreateWalletWithdrawRequest extends BaseRequest
{
    /**
     * 综合服务主体 ID
     * @var string
     */
    public $broker_id;
    /**
     * 平台企业 ID
     * @var string
     */
    public $dealer_id;
    /**
     * 劳动者信息
     * @var WalletWithdrawUserInfo
     */
    public $user_info;
    /**
     * 钱包 ID
     * @var string
     */
    public $wallet_id;
    /**
     * 平台企业订单号
     * @var string
     */
    public $order_id;
    /**
     * 平台企业的微信 AppID
     * @var string
     */
    public $wx_app_id;
    /**
     * 提现金额
     * @var string
     */
    public $amount;
    /**
     * 提现渠道
     * @var string
     */
    public $channel;
    /**
     * 收款账号
     * @var string
     */
    public $account;
    /**
     * 备注
     * @var string
     */
    public $remark;
    /**
     * 通知地址
     * @var string
     */
    public $notify_url;

    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}
