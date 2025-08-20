<?php

namespace Yzh\Model\Calculatelabor;

use Yzh\Model\BaseModel;

/**
 * 月度税务信息
 * Class MontTax
 */
class MontTax extends BaseModel
{
    /**
     * 月份
     * @var int32
     */
    protected $month;
    /**
     * 含增值税收入
     * @var string
     */
    protected $pre_tax_amount;
    /**
     * 不含增值税收入
     * @var string
     */
    protected $excluding_vat_amount;
    /**
     * 增值税
     * @var string
     */
    protected $value_added_tax;
    /**
     * 附加税
     * @var string
     */
    protected $additional_tax;
    /**
     * 个税
     * @var string
     */
    protected $personal_tax;
    /**
     * 个税税率
     * @var string
     */
    protected $personal_tax_rate;
    /**
     * 速算扣除数
     * @var string
     */
    protected $deduct_tax;
    /**
     * 税后金额
     * @var string
     */
    protected $post_tax_amount;
    /**
     * 税负率
     * @var string
     */
    protected $total_tax_rate;

    /**
     * 月份
     * @var int32 $month
     */
    public function setMonth($month)
    {
        $this->month = $month;
    }

    /**
     * 月份
     * @return int32
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * 含增值税收入
     * @var string $pre_tax_amount
     */
    public function setPreTaxAmount($pre_tax_amount)
    {
        $this->pre_tax_amount = $pre_tax_amount;
    }

    /**
     * 含增值税收入
     * @return string
     */
    public function getPreTaxAmount()
    {
        return $this->pre_tax_amount;
    }

    /**
     * 不含增值税收入
     * @var string $excluding_vat_amount
     */
    public function setExcludingVatAmount($excluding_vat_amount)
    {
        $this->excluding_vat_amount = $excluding_vat_amount;
    }

    /**
     * 不含增值税收入
     * @return string
     */
    public function getExcludingVatAmount()
    {
        return $this->excluding_vat_amount;
    }

    /**
     * 增值税
     * @var string $value_added_tax
     */
    public function setValueAddedTax($value_added_tax)
    {
        $this->value_added_tax = $value_added_tax;
    }

    /**
     * 增值税
     * @return string
     */
    public function getValueAddedTax()
    {
        return $this->value_added_tax;
    }

    /**
     * 附加税
     * @var string $additional_tax
     */
    public function setAdditionalTax($additional_tax)
    {
        $this->additional_tax = $additional_tax;
    }

    /**
     * 附加税
     * @return string
     */
    public function getAdditionalTax()
    {
        return $this->additional_tax;
    }

    /**
     * 个税
     * @var string $personal_tax
     */
    public function setPersonalTax($personal_tax)
    {
        $this->personal_tax = $personal_tax;
    }

    /**
     * 个税
     * @return string
     */
    public function getPersonalTax()
    {
        return $this->personal_tax;
    }

    /**
     * 个税税率
     * @var string $personal_tax_rate
     */
    public function setPersonalTaxRate($personal_tax_rate)
    {
        $this->personal_tax_rate = $personal_tax_rate;
    }

    /**
     * 个税税率
     * @return string
     */
    public function getPersonalTaxRate()
    {
        return $this->personal_tax_rate;
    }

    /**
     * 速算扣除数
     * @var string $deduct_tax
     */
    public function setDeductTax($deduct_tax)
    {
        $this->deduct_tax = $deduct_tax;
    }

    /**
     * 速算扣除数
     * @return string
     */
    public function getDeductTax()
    {
        return $this->deduct_tax;
    }

    /**
     * 税后金额
     * @var string $post_tax_amount
     */
    public function setPostTaxAmount($post_tax_amount)
    {
        $this->post_tax_amount = $post_tax_amount;
    }

    /**
     * 税后金额
     * @return string
     */
    public function getPostTaxAmount()
    {
        return $this->post_tax_amount;
    }

    /**
     * 税负率
     * @var string $total_tax_rate
     */
    public function setTotalTaxRate($total_tax_rate)
    {
        $this->total_tax_rate = $total_tax_rate;
    }

    /**
     * 税负率
     * @return string
     */
    public function getTotalTaxRate()
    {
        return $this->total_tax_rate;
    }
}
