<?php

namespace Yzh\Model\Walletincome;

use Yzh\Model\BaseModel;

/**
 * 取消计税处理明细
 * Class WalletIncomeCancelDetail
 */
class WalletIncomeCancelDetail extends BaseModel
{
    /**
     * 服务费信息
     * @var WalletIncomeCancelFeeInfo
     */
    protected $fee_info;
    /**
     * 税费信息
     * @var WalletIncomeCancelTaxInfo
     */
    protected $tax_info;
    /**
     * 劳动者钱包扣减金额
     * @var string
     */
    protected $wallet_outflow_amount;
    /**
     * 历史订单补缴税费退回金额
     * @var string
     */
    protected $user_debt_repayment_amount;
    /**
     * 钱包余额信息
     * @var WalletIncomeWalletBalance
     */
    protected $wallet_balance;

    /**
     * 服务费信息
     * @var WalletIncomeCancelFeeInfo $fee_info
     */
    public function setFeeInfo($fee_info)
    {
        $this->fee_info = new WalletIncomeCancelFeeInfo($fee_info);
    }

    /**
     * 服务费信息
     * @return WalletIncomeCancelFeeInfo
     */
    public function getFeeInfo()
    {
        return $this->fee_info;
    }

    /**
     * 税费信息
     * @var WalletIncomeCancelTaxInfo $tax_info
     */
    public function setTaxInfo($tax_info)
    {
        $this->tax_info = new WalletIncomeCancelTaxInfo($tax_info);
    }

    /**
     * 税费信息
     * @return WalletIncomeCancelTaxInfo
     */
    public function getTaxInfo()
    {
        return $this->tax_info;
    }

    /**
     * 劳动者钱包扣减金额
     * @var string $wallet_outflow_amount
     */
    public function setWalletOutflowAmount($wallet_outflow_amount)
    {
        $this->wallet_outflow_amount = $wallet_outflow_amount;
    }

    /**
     * 劳动者钱包扣减金额
     * @return string
     */
    public function getWalletOutflowAmount()
    {
        return $this->wallet_outflow_amount;
    }

    /**
     * 历史订单补缴税费退回金额
     * @var string $user_debt_repayment_amount
     */
    public function setUserDebtRepaymentAmount($user_debt_repayment_amount)
    {
        $this->user_debt_repayment_amount = $user_debt_repayment_amount;
    }

    /**
     * 历史订单补缴税费退回金额
     * @return string
     */
    public function getUserDebtRepaymentAmount()
    {
        return $this->user_debt_repayment_amount;
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
