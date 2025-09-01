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
     * 订单金额
     * @var string
     */
    protected $pay;
    /**
     * 税费总额
     * @var string
     */
    protected $tax;
    /**
     * 税后金额
     * @var string
     */
    protected $after_tax_amount;
    /**
     * 税费明细
     * @var CalcTaxDetail
     */
    protected $tax_detail;

    /**
     * 订单金额
     * @var string $pay
     */
    public function setPay($pay)
    {
        $this->pay = $pay;
    }

    /**
     * 订单金额
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
     * 税后金额
     * @var string $after_tax_amount
     */
    public function setAfterTaxAmount($after_tax_amount)
    {
        $this->after_tax_amount = $after_tax_amount;
    }

    /**
     * 税后金额
     * @return string
     */
    public function getAfterTaxAmount()
    {
        return $this->after_tax_amount;
    }

    /**
     * 税费明细
     * @var CalcTaxDetail $tax_detail
     */
    public function setTaxDetail($tax_detail)
    {
        $this->tax_detail = $tax_detail;
    }

    /**
     * 税费明细
     * @return CalcTaxDetail
     */
    public function getTaxDetail()
    {
        return $this->tax_detail;
    }
}
