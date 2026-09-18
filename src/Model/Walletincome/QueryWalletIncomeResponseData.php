<?php

namespace Yzh\Model\Walletincome;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 查询钱包余额入账结果返回
 * Class QueryWalletIncomeResponseData
 */
class QueryWalletIncomeResponseData extends BaseModel implements ResponseDataInterface
{
    /**
     * 综合服务主体 ID
     * @var string
     */
    protected $broker_id;
    /**
     * 平台企业 ID
     * @var string
     */
    protected $dealer_id;
    /**
     * 劳动者信息
     * @var WalletIncomeUserInfo
     */
    protected $user_info;
    /**
     * 钱包 ID
     * @var string
     */
    protected $wallet_id;
    /**
     * 平台信息
     * @var WalletIncomePlatformInfo
     */
    protected $platform_info;
    /**
     * 平台企业订单号
     * @var string
     */
    protected $order_id;
    /**
     * 云账户钱包入账订单号
     * @var string
     */
    protected $ref;
    /**
     * 下单金额
     * @var string
     */
    protected $amount;
    /**
     * 税前金额
     * @var string
     */
    protected $before_tax_amount;
    /**
     * 备注
     * @var string
     */
    protected $remark;
    /**
     * 获得收入时间
     * @var string
     */
    protected $earned_at;
    /**
     * 订单状态
     * @var string
     */
    protected $status;
    /**
     * 订单状态详情
     * @var string
     */
    protected $status_detail;
    /**
     * 订单状态描述
     * @var string
     */
    protected $status_message;
    /**
     * 订单状态详情描述
     * @var string
     */
    protected $status_detail_message;
    /**
     * 创建时间
     * @var string
     */
    protected $created_at;
    /**
     * 完成时间
     * @var string
     */
    protected $finished_at;
    /**
     * 服务费信息
     * @var WalletIncomeFeeInfo
     */
    protected $fee_info;
    /**
     * 税费信息
     * @var WalletIncomeTaxInfo
     */
    protected $tax_info;
    /**
     * 劳动者历史订单需补缴税费金额
     * @var string
     */
    protected $user_debt_repayment_amount;
    /**
     * 劳动者历史订单需补缴个税金额
     * @var string
     */
    protected $user_debt_repayment_personal_amount;
    /**
     * 劳动者历史订单需补缴增附税金额
     * @var string
     */
    protected $user_debt_repayment_added_amount;
    /**
     * 钱包入账金额
     * @var string
     */
    protected $wallet_inflow_amount;
    /**
     * 钱包余额信息
     * @var WalletIncomeWalletBalance
     */
    protected $wallet_balance;

    /**
     * 综合服务主体 ID
     * @var string $broker_id
     */
    public function setBrokerId($broker_id)
    {
        $this->broker_id = $broker_id;
    }

    /**
     * 综合服务主体 ID
     * @return string
     */
    public function getBrokerId()
    {
        return $this->broker_id;
    }

    /**
     * 平台企业 ID
     * @var string $dealer_id
     */
    public function setDealerId($dealer_id)
    {
        $this->dealer_id = $dealer_id;
    }

    /**
     * 平台企业 ID
     * @return string
     */
    public function getDealerId()
    {
        return $this->dealer_id;
    }

    /**
     * 劳动者信息
     * @var WalletIncomeUserInfo $user_info
     */
    public function setUserInfo($user_info)
    {
        $this->user_info = new WalletIncomeUserInfo($user_info);
    }

    /**
     * 劳动者信息
     * @return WalletIncomeUserInfo
     */
    public function getUserInfo()
    {
        return $this->user_info;
    }

    /**
     * 钱包 ID
     * @var string $wallet_id
     */
    public function setWalletId($wallet_id)
    {
        $this->wallet_id = $wallet_id;
    }

    /**
     * 钱包 ID
     * @return string
     */
    public function getWalletId()
    {
        return $this->wallet_id;
    }

    /**
     * 平台信息
     * @var WalletIncomePlatformInfo $platform_info
     */
    public function setPlatformInfo($platform_info)
    {
        $this->platform_info = new WalletIncomePlatformInfo($platform_info);
    }

    /**
     * 平台信息
     * @return WalletIncomePlatformInfo
     */
    public function getPlatformInfo()
    {
        return $this->platform_info;
    }

    /**
     * 平台企业订单号
     * @var string $order_id
     */
    public function setOrderId($order_id)
    {
        $this->order_id = $order_id;
    }

    /**
     * 平台企业订单号
     * @return string
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * 云账户钱包入账订单号
     * @var string $ref
     */
    public function setRef($ref)
    {
        $this->ref = $ref;
    }

    /**
     * 云账户钱包入账订单号
     * @return string
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * 下单金额
     * @var string $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * 下单金额
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * 税前金额
     * @var string $before_tax_amount
     */
    public function setBeforeTaxAmount($before_tax_amount)
    {
        $this->before_tax_amount = $before_tax_amount;
    }

    /**
     * 税前金额
     * @return string
     */
    public function getBeforeTaxAmount()
    {
        return $this->before_tax_amount;
    }

    /**
     * 备注
     * @var string $remark
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;
    }

    /**
     * 备注
     * @return string
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * 获得收入时间
     * @var string $earned_at
     */
    public function setEarnedAt($earned_at)
    {
        $this->earned_at = $earned_at;
    }

    /**
     * 获得收入时间
     * @return string
     */
    public function getEarnedAt()
    {
        return $this->earned_at;
    }

    /**
     * 订单状态
     * @var string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * 订单状态
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * 订单状态详情
     * @var string $status_detail
     */
    public function setStatusDetail($status_detail)
    {
        $this->status_detail = $status_detail;
    }

    /**
     * 订单状态详情
     * @return string
     */
    public function getStatusDetail()
    {
        return $this->status_detail;
    }

    /**
     * 订单状态描述
     * @var string $status_message
     */
    public function setStatusMessage($status_message)
    {
        $this->status_message = $status_message;
    }

    /**
     * 订单状态描述
     * @return string
     */
    public function getStatusMessage()
    {
        return $this->status_message;
    }

    /**
     * 订单状态详情描述
     * @var string $status_detail_message
     */
    public function setStatusDetailMessage($status_detail_message)
    {
        $this->status_detail_message = $status_detail_message;
    }

    /**
     * 订单状态详情描述
     * @return string
     */
    public function getStatusDetailMessage()
    {
        return $this->status_detail_message;
    }

    /**
     * 创建时间
     * @var string $created_at
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    /**
     * 创建时间
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * 完成时间
     * @var string $finished_at
     */
    public function setFinishedAt($finished_at)
    {
        $this->finished_at = $finished_at;
    }

    /**
     * 完成时间
     * @return string
     */
    public function getFinishedAt()
    {
        return $this->finished_at;
    }

    /**
     * 服务费信息
     * @var WalletIncomeFeeInfo $fee_info
     */
    public function setFeeInfo($fee_info)
    {
        $this->fee_info = new WalletIncomeFeeInfo($fee_info);
    }

    /**
     * 服务费信息
     * @return WalletIncomeFeeInfo
     */
    public function getFeeInfo()
    {
        return $this->fee_info;
    }

    /**
     * 税费信息
     * @var WalletIncomeTaxInfo $tax_info
     */
    public function setTaxInfo($tax_info)
    {
        $this->tax_info = new WalletIncomeTaxInfo($tax_info);
    }

    /**
     * 税费信息
     * @return WalletIncomeTaxInfo
     */
    public function getTaxInfo()
    {
        return $this->tax_info;
    }

    /**
     * 劳动者历史订单需补缴税费金额
     * @var string $user_debt_repayment_amount
     */
    public function setUserDebtRepaymentAmount($user_debt_repayment_amount)
    {
        $this->user_debt_repayment_amount = $user_debt_repayment_amount;
    }

    /**
     * 劳动者历史订单需补缴税费金额
     * @return string
     */
    public function getUserDebtRepaymentAmount()
    {
        return $this->user_debt_repayment_amount;
    }

    /**
     * 劳动者历史订单需补缴个税金额
     * @var string $user_debt_repayment_personal_amount
     */
    public function setUserDebtRepaymentPersonalAmount($user_debt_repayment_personal_amount)
    {
        $this->user_debt_repayment_personal_amount = $user_debt_repayment_personal_amount;
    }

    /**
     * 劳动者历史订单需补缴个税金额
     * @return string
     */
    public function getUserDebtRepaymentPersonalAmount()
    {
        return $this->user_debt_repayment_personal_amount;
    }

    /**
     * 劳动者历史订单需补缴增附税金额
     * @var string $user_debt_repayment_added_amount
     */
    public function setUserDebtRepaymentAddedAmount($user_debt_repayment_added_amount)
    {
        $this->user_debt_repayment_added_amount = $user_debt_repayment_added_amount;
    }

    /**
     * 劳动者历史订单需补缴增附税金额
     * @return string
     */
    public function getUserDebtRepaymentAddedAmount()
    {
        return $this->user_debt_repayment_added_amount;
    }

    /**
     * 钱包入账金额
     * @var string $wallet_inflow_amount
     */
    public function setWalletInflowAmount($wallet_inflow_amount)
    {
        $this->wallet_inflow_amount = $wallet_inflow_amount;
    }

    /**
     * 钱包入账金额
     * @return string
     */
    public function getWalletInflowAmount()
    {
        return $this->wallet_inflow_amount;
    }

    /**
     * 钱包余额信息
     * @var WalletIncomeWalletBalance $wallet_balance
     */
    public function setWalletBalance($wallet_balance)
    {
        $this->wallet_balance = new WalletIncomeWalletBalance($wallet_balance);
    }

    /**
     * 钱包余额信息
     * @return WalletIncomeWalletBalance
     */
    public function getWalletBalance()
    {
        return $this->wallet_balance;
    }
}
