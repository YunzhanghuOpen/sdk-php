<?php

namespace Yzh\Model\Calculatelabor;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 订单税费试算返回
 * Class CalcTaxResponseData
 */
class CalcTaxResponseData extends BaseModel implements ResponseDataInterface
{
    /**
     * 测算金额
     * @var string
     */
    protected $pay;
    /**
     * 税费总额
     * @var string
     */
    protected $tax;
    /**
     * 税后结算金额
     * @var string
     */
    protected $after_tax_amount;
    /**
     * 缴税明细
     * @var CalcTaxDetail
     */
    protected $tax_detail;
    /**
     * 税前订单金额
     * @var string
     */
    protected $before_tax_amount;
    /**
     * 用户税费总额
     * @var string
     */
    protected $user_tax;
    /**
     * 平台企业税费总额
     * @var string
     */
    protected $dealer_tax;
    /**
     * 云账户税费总额
     * @var string
     */
    protected $broker_tax;
    /**
     * 用户服务费
     * @var string
     */
    protected $user_fee;
    /**
     * 结果
     * @var string
     */
    protected $status;
    /**
     * 结果详细状态码
     * @var string
     */
    protected $status_detail;
    /**
     * 结果说明
     * @var string
     */
    protected $status_message;
    /**
     * 结果详细状态码描述
     * @var string
     */
    protected $status_detail_message;

    /**
     * 测算金额
     * @var string $pay
     */
    public function setPay($pay)
    {
        $this->pay = $pay;
    }

    /**
     * 测算金额
     * @return string
     */
    public function getPay()
    {
        return $this->pay;
    }

    /**
     * 税费总额
     * @var string $tax
     */
    public function setTax($tax)
    {
        $this->tax = $tax;
    }

    /**
     * 税费总额
     * @return string
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * 税后结算金额
     * @var string $after_tax_amount
     */
    public function setAfterTaxAmount($after_tax_amount)
    {
        $this->after_tax_amount = $after_tax_amount;
    }

    /**
     * 税后结算金额
     * @return string
     */
    public function getAfterTaxAmount()
    {
        return $this->after_tax_amount;
    }

    /**
     * 缴税明细
     * @var CalcTaxDetail $tax_detail
     */
    public function setTaxDetail($tax_detail)
    {
        $this->tax_detail = $tax_detail;
    }

    /**
     * 缴税明细
     * @return CalcTaxDetail
     */
    public function getTaxDetail()
    {
        return $this->tax_detail;
    }

    /**
     * 税前订单金额
     * @var string $before_tax_amount
     */
    public function setBeforeTaxAmount($before_tax_amount)
    {
        $this->before_tax_amount = $before_tax_amount;
    }

    /**
     * 税前订单金额
     * @return string
     */
    public function getBeforeTaxAmount()
    {
        return $this->before_tax_amount;
    }

    /**
     * 用户税费总额
     * @var string $user_tax
     */
    public function setUserTax($user_tax)
    {
        $this->user_tax = $user_tax;
    }

    /**
     * 用户税费总额
     * @return string
     */
    public function getUserTax()
    {
        return $this->user_tax;
    }

    /**
     * 平台企业税费总额
     * @var string $dealer_tax
     */
    public function setDealerTax($dealer_tax)
    {
        $this->dealer_tax = $dealer_tax;
    }

    /**
     * 平台企业税费总额
     * @return string
     */
    public function getDealerTax()
    {
        return $this->dealer_tax;
    }

    /**
     * 云账户税费总额
     * @var string $broker_tax
     */
    public function setBrokerTax($broker_tax)
    {
        $this->broker_tax = $broker_tax;
    }

    /**
     * 云账户税费总额
     * @return string
     */
    public function getBrokerTax()
    {
        return $this->broker_tax;
    }

    /**
     * 用户服务费
     * @var string $user_fee
     */
    public function setUserFee($user_fee)
    {
        $this->user_fee = $user_fee;
    }

    /**
     * 用户服务费
     * @return string
     */
    public function getUserFee()
    {
        return $this->user_fee;
    }

    /**
     * 结果
     * @var string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * 结果
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * 结果详细状态码
     * @var string $status_detail
     */
    public function setStatusDetail($status_detail)
    {
        $this->status_detail = $status_detail;
    }

    /**
     * 结果详细状态码
     * @return string
     */
    public function getStatusDetail()
    {
        return $this->status_detail;
    }

    /**
     * 结果说明
     * @var string $status_message
     */
    public function setStatusMessage($status_message)
    {
        $this->status_message = $status_message;
    }

    /**
     * 结果说明
     * @return string
     */
    public function getStatusMessage()
    {
        return $this->status_message;
    }

    /**
     * 结果详细状态码描述
     * @var string $status_detail_message
     */
    public function setStatusDetailMessage($status_detail_message)
    {
        $this->status_detail_message = $status_detail_message;
    }

    /**
     * 结果详细状态码描述
     * @return string
     */
    public function getStatusDetailMessage()
    {
        return $this->status_detail_message;
    }
}
