<?php

namespace Yzh\Model\Walletincome;

use Yzh\Model\BaseModel;

/**
 * 取消计税退还服务费信息
 * Class WalletIncomeCancelFeeInfo
 */
class WalletIncomeCancelFeeInfo extends BaseModel
{
    /**
     * 总服务费
     * @var string
     */
    protected $total_fee;
    /**
     * 平台企业加成服务费
     * @var string
     */
    protected $dealer_fee;
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
}
