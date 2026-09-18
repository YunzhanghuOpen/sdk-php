<?php

namespace Yzh\Model\Walletdeduct;

use Yzh\Model\BaseRequest;

/**
 * 钱包余额扣减申请结果回调通知请求
 * Class NotifyWalletDeductRequest
 */
class NotifyWalletDeductRequest extends BaseRequest
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
     * @var WalletDeductUserInfo
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
     * 业务场景
     * @var string
     */
    public $scene;
    /**
     * 云账户钱包余额扣减订单号
     * @var string
     */
    public $ref;
    /**
     * 扣减金额
     * @var string
     */
    public $amount;
    /**
     * 备注
     * @var string
     */
    public $remark;
    /**
     * 申请处理状态
     * @var string
     */
    public $status;
    /**
     * 申请处理状态详情
     * @var string
     */
    public $status_detail;
    /**
     * 申请处理状态描述
     * @var string
     */
    public $status_message;
    /**
     * 申请处理状态详情描述
     * @var string
     */
    public $status_detail_message;
    /**
     * 创建时间
     * @var string
     */
    public $created_at;
    /**
     * 处理完成时间
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
     * 钱包出账金额
     * @var string
     */
    public $wallet_outflow_amount;
    /**
     * 钱包余额信息
     * @var WalletDeductWalletBalance
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
