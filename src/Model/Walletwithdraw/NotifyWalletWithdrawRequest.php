<?php

namespace Yzh\Model\Walletwithdraw;

use Yzh\Model\BaseRequest;

/**
 * 通知钱包余额提现结果回调通知请求
 * Class NotifyWalletWithdrawRequest
 */
class NotifyWalletWithdrawRequest extends BaseRequest
{
    /**
     * 通知类型
     * @var string
     */
    public $notify_type;
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
     * 云账户钱包提现订单号
     * @var string
     */
    public $ref;
    /**
     * 提现金额支付金额
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
     * 平台企业的微信 AppID
     * @var string
     */
    public $wx_app_id;
    /**
     * 备注
     * @var string
     */
    public $remark;
    /**
     * 订单状态
     * @var string
     */
    public $status;
    /**
     * 订单状态详情
     * @var string
     */
    public $status_detail;
    /**
     * 订单状态描述
     * @var string
     */
    public $status_message;
    /**
     * 订单状态详情描述
     * @var string
     */
    public $status_detail_message;
    /**
     * 创建时间
     * @var string
     */
    public $created_at;
    /**
     * 完成时间
     * @var string
     */
    public $finished_at;
    /**
     * 劳动者实收金额
     * @var string
     */
    public $user_received_amount;
    /**
     * 劳动者历史订单需补缴税费金额
     * @var string
     */
    public $user_debt_repayment_amount;
    /**
     * 劳动者历史订单需补缴个税金额
     * @var string
     */
    public $user_debt_repayment_personal_amount;
    /**
     * 劳动者历史订单需补缴增附税金额
     * @var string
     */
    public $user_debt_repayment_added_amount;
    /**
     * 钱包出账金额
     * @var string
     */
    public $wallet_outflow_amount;
    /**
     * 钱包余额信息
     * @var WalletWithdrawWalletBalance
     */
    public $wallet_balance;

    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}
