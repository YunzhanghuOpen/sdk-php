<?php

namespace Yzh\Model\Caculatorlabor;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 连续劳务税费试算（计算器）返回
 * Class LaborCaculatorResponseData
 */
class LaborCaculatorResponseData extends BaseModel implements ResponseDataInterface
{
    /**
     * 综合所得汇算清缴
     * @var YearTaxInfo
     */
    protected $year_tax_info;
    /**
     * 月度税务信息列表
     * @var MontTax[]
     */
    protected $month_tax_list;

    /**
     * 综合所得汇算清缴
     * @var YearTaxInfo $year_tax_info
     */
    public function setYearTaxInfo($year_tax_info)
    {
        $this->year_tax_info = $year_tax_info;
    }

    /**
     * 综合所得汇算清缴
     * @return YearTaxInfo
     */
    public function getYearTaxInfo()
    {
        return $this->year_tax_info;
    }

    /**
     * @var array $items
     */
    public function setMonthTaxList($items)
    {
        $this->month_tax_list = array();
        foreach ($items as $k => $v) {
            array_push($this->month_tax_list, new MontTax($v));
        }
    }

    /**
     * 月度税务信息列表
     * @return MontTax[]
     */
    public function getMonthTaxList()
    {
        return $this->month_tax_list;
    }
}
