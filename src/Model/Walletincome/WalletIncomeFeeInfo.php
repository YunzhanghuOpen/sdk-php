<?php

namespace Yzh\Model\Walletincome;

use Yzh\Model\BaseModel;

/**
 * 服务费信息
 * Class WalletIncomeFeeInfo
 */
class WalletIncomeFeeInfo extends BaseModel
{
    /**
     * 总服务费
     * @var string
     */
    protected $total_fee;
    /**
     * 总服务费率
     * @var string
     */
    protected $total_fee_rate;
    /**
     * 平台企业加成服务费
     * @var string
     */
    protected $dealer_fee;
    /**
     * 平台企业加成服务费率
     * @var string
     */
    protected $dealer_fee_rate;
    /**
     * 抵扣账户支付的加成服务费
     * @var string
     */
    protected $dealer_deduct_fee;
    /**
     * 抵扣后应支付的加成服务费
     * @var string
     */
    protected $dealer_payable_fee;
    /**
     * 劳动者加成服务费
     * @var string
     */
    protected $user_fee;
    /**
     * 劳动者加成服务费率
     * @var string
     */
    protected $user_fee_rate;

    /**
     * 总服务费
     * @var string $total_fee
     */
    public function setTotalFee($total_fee)
    {
        $this->total_fee = $total_fee;
    }

    /**
     * 总服务费
     * @return string
     */
    public function getTotalFee()
    {
        return $this->total_fee;
    }

    /**
     * 总服务费率
     * @var string $total_fee_rate
     */
    public function setTotalFeeRate($total_fee_rate)
    {
        $this->total_fee_rate = $total_fee_rate;
    }

    /**
     * 总服务费率
     * @return string
     */
    public function getTotalFeeRate()
    {
        return $this->total_fee_rate;
    }

    /**
     * 平台企业加成服务费
     * @var string $dealer_fee
     */
    public function setDealerFee($dealer_fee)
    {
        $this->dealer_fee = $dealer_fee;
    }

    /**
     * 平台企业加成服务费
     * @return string
     */
    public function getDealerFee()
    {
        return $this->dealer_fee;
    }

    /**
     * 平台企业加成服务费率
     * @var string $dealer_fee_rate
     */
    public function setDealerFeeRate($dealer_fee_rate)
    {
        $this->dealer_fee_rate = $dealer_fee_rate;
    }

    /**
     * 平台企业加成服务费率
     * @return string
     */
    public function getDealerFeeRate()
    {
        return $this->dealer_fee_rate;
    }

    /**
     * 抵扣账户支付的加成服务费
     * @var string $dealer_deduct_fee
     */
    public function setDealerDeductFee($dealer_deduct_fee)
    {
        $this->dealer_deduct_fee = $dealer_deduct_fee;
    }

    /**
     * 抵扣账户支付的加成服务费
     * @return string
     */
    public function getDealerDeductFee()
    {
        return $this->dealer_deduct_fee;
    }

    /**
     * 抵扣后应支付的加成服务费
     * @var string $dealer_payable_fee
     */
    public function setDealerPayableFee($dealer_payable_fee)
    {
        $this->dealer_payable_fee = $dealer_payable_fee;
    }

    /**
     * 抵扣后应支付的加成服务费
     * @return string
     */
    public function getDealerPayableFee()
    {
        return $this->dealer_payable_fee;
    }

    /**
     * 劳动者加成服务费
     * @var string $user_fee
     */
    public function setUserFee($user_fee)
    {
        $this->user_fee = $user_fee;
    }

    /**
     * 劳动者加成服务费
     * @return string
     */
    public function getUserFee()
    {
        return $this->user_fee;
    }

    /**
     * 劳动者加成服务费率
     * @var string $user_fee_rate
     */
    public function setUserFeeRate($user_fee_rate)
    {
        $this->user_fee_rate = $user_fee_rate;
    }

    /**
     * 劳动者加成服务费率
     * @return string
     */
    public function getUserFeeRate()
    {
        return $this->user_fee_rate;
    }
}
