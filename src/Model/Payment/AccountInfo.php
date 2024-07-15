<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseModel;

/**
 * 账户信息
 * Class AccountInfo
 */
class AccountInfo extends BaseModel
{
    /**
     * 综合服务主体 ID
     * @var string
     */
    protected $broker_id;
    /**
     * 银行卡余额
     * @var string
     */
    protected $bank_card_balance;
    /**
     * 是否开通银行卡支付路径
     * @var bool
     */
    protected $is_bank_card;
    /**
     * 支付宝余额
     * @var string
     */
    protected $alipay_balance;
    /**
     * 是否开通支付宝支付路径
     * @var bool
     */
    protected $is_alipay;
    /**
     * 微信余额
     * @var string
     */
    protected $wxpay_balance;
    /**
     * 是否开通微信支付路径
     * @var bool
     */
    protected $is_wxpay;
    /**
     * 加成服务费返点余额
     * @var string
     */
    protected $rebate_fee_balance;
    /**
     * 业务服务费余额
     * @var string
     */
    protected $acct_balance;
    /**
     * 总余额
     * @var string
     */
    protected $total_balance;

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
     * 银行卡余额
     * @var string $bank_card_balance
     */
    public function setBankCardBalance($bank_card_balance)
    {
        $this->bank_card_balance = $bank_card_balance;
    }

    /**
     * 银行卡余额
     * @return string
     */
    public function getBankCardBalance()
    {
        return $this->bank_card_balance;
    }

    /**
     * 是否开通银行卡支付路径
     * @var bool $is_bank_card
     */
    public function setIsBankCard($is_bank_card)
    {
        $this->is_bank_card = $is_bank_card;
    }

    /**
     * 是否开通银行卡支付路径
     * @return bool
     */
    public function getIsBankCard()
    {
        return $this->is_bank_card;
    }

    /**
     * 支付宝余额
     * @var string $alipay_balance
     */
    public function setAlipayBalance($alipay_balance)
    {
        $this->alipay_balance = $alipay_balance;
    }

    /**
     * 支付宝余额
     * @return string
     */
    public function getAlipayBalance()
    {
        return $this->alipay_balance;
    }

    /**
     * 是否开通支付宝支付路径
     * @var bool $is_alipay
     */
    public function setIsAlipay($is_alipay)
    {
        $this->is_alipay = $is_alipay;
    }

    /**
     * 是否开通支付宝支付路径
     * @return bool
     */
    public function getIsAlipay()
    {
        return $this->is_alipay;
    }

    /**
     * 微信余额
     * @var string $wxpay_balance
     */
    public function setWxpayBalance($wxpay_balance)
    {
        $this->wxpay_balance = $wxpay_balance;
    }

    /**
     * 微信余额
     * @return string
     */
    public function getWxpayBalance()
    {
        return $this->wxpay_balance;
    }

    /**
     * 是否开通微信支付路径
     * @var bool $is_wxpay
     */
    public function setIsWxpay($is_wxpay)
    {
        $this->is_wxpay = $is_wxpay;
    }

    /**
     * 是否开通微信支付路径
     * @return bool
     */
    public function getIsWxpay()
    {
        return $this->is_wxpay;
    }

    /**
     * 加成服务费返点余额
     * @var string $rebate_fee_balance
     */
    public function setRebateFeeBalance($rebate_fee_balance)
    {
        $this->rebate_fee_balance = $rebate_fee_balance;
    }

    /**
     * 加成服务费返点余额
     * @return string
     */
    public function getRebateFeeBalance()
    {
        return $this->rebate_fee_balance;
    }

    /**
     * 业务服务费余额
     * @var string $acct_balance
     */
    public function setAcctBalance($acct_balance)
    {
        $this->acct_balance = $acct_balance;
    }

    /**
     * 业务服务费余额
     * @return string
     */
    public function getAcctBalance()
    {
        return $this->acct_balance;
    }

    /**
     * 总余额
     * @var string $total_balance
     */
    public function setTotalBalance($total_balance)
    {
        $this->total_balance = $total_balance;
    }

    /**
     * 总余额
     * @return string
     */
    public function getTotalBalance()
    {
        return $this->total_balance;
    }
}
