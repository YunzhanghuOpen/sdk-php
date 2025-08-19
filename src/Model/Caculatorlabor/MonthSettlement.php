<?php

namespace Yzh\Model\Caculatorlabor;

use Yzh\Model\BaseModel;

/**
 * 月度收入
 * Class MonthSettlement
 */
class MonthSettlement extends BaseModel
{
    /**
     * 月份
     * @var int32
     */
    protected $month;
    /**
     * 月度收入
     * @var string
     */
    protected $month_pre_tax_amount;

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
     * 月度收入
     * @var string $month_pre_tax_amount
     */
    public function setMonthPreTaxAmount($month_pre_tax_amount)
    {
        $this->month_pre_tax_amount = $month_pre_tax_amount;
    }

    /**
     * 月度收入
     * @return string
     */
    public function getMonthPreTaxAmount()
    {
        return $this->month_pre_tax_amount;
    }
}
