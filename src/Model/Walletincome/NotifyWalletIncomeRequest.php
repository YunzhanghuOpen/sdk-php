<?php

namespace Yzh\Model\Walletincome;

use Yzh\Model\BaseRequest;

/**
 * 钱包余额入账结果回调通知请求
 * Class NotifyWalletIncomeRequest
 */
class NotifyWalletIncomeRequest extends BaseRequest
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
     * @var WalletIncomeUserInfo
     */
    public $user_info;
    /**
     * 钱包 ID
     * @var string
     */
    public $wallet_id;
    /**
     * 平台信息
     * @var WalletIncomePlatformInfo
     */
    public $platform_info;
    /**
     * 平台企业订单号
     * @var string
     */
    public $order_id;
    /**
     * 云账户钱包入账订单号
     * @var string
     */
    public $ref;
    /**
     * 下单金额
     * @var string
     */
    public $amount;
    /**
     * 税前金额
     * @var string
     */
    public $before_tax_amount;
    /**
     * 备注
     * @var string
     */
    public $remark;
    /**
     * 获得收入时间
     * @var string
     */
    public $earned_at;
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
     * 服务费信息
     * @var WalletIncomeFeeInfo
     */
    public $fee_info;
    /**
     * 税费信息
     * @var WalletIncomeTaxInfo
     */
    public $tax_info;
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
     * 钱包入账金额
     * @var string
     */
    public $wallet_inflow_amount;
    /**
     * 钱包余额信息
     * @var WalletIncomeWalletBalance
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
