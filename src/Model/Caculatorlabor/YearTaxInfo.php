<?php

namespace Yzh\Model\Caculatorlabor;

use Yzh\Model\BaseModel;

/**
 * 综合所得汇算清缴信息
 * Class YearTaxInfo
 */
class YearTaxInfo extends BaseModel
{
    /**
     * 连续劳务年度个税
     * @var string
     */
    protected $continuous_month_personal_tax;
    /**
     * 综合所得汇算清缴年度个税
     * @var string
     */
    protected $personal_tax;
    /**
     * 年度扣除费用
     * @var string
     */
    protected $deduct_cost;
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
     * 税负率
     * @var string
     */
    protected $total_tax_rate;

    /**
     * 连续劳务年度个税
     * @var string $continuous_month_personal_tax
     */
    public function setContinuousMonthPersonalTax($continuous_month_personal_tax)
    {
        $this->continuous_month_personal_tax = $continuous_month_personal_tax;
    }

    /**
     * 连续劳务年度个税
     * @return string
     */
    public function getContinuousMonthPersonalTax()
    {
        return $this->continuous_month_personal_tax;
    }

    /**
     * 综合所得汇算清缴年度个税
     * @var string $personal_tax
     */
    public function setPersonalTax($personal_tax)
    {
        $this->personal_tax = $personal_tax;
    }

    /**
     * 综合所得汇算清缴年度个税
     * @return string
     */
    public function getPersonalTax()
    {
        return $this->personal_tax;
    }

    /**
     * 年度扣除费用
     * @var string $deduct_cost
     */
    public function setDeductCost($deduct_cost)
    {
        $this->deduct_cost = $deduct_cost;
    }

    /**
     * 年度扣除费用
     * @return string
     */
    public function getDeductCost()
    {
        return $this->deduct_cost;
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
