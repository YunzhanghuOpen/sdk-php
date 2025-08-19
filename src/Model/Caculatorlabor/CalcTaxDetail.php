<?php

namespace Yzh\Model\Caculatorlabor;

use Yzh\Model\BaseModel;

/**
 * 税费明细
 * Class CalcTaxDetail
 */
class CalcTaxDetail extends BaseModel
{
    /**
     * 应纳个税
     * @var string
     */
    protected $personal_tax;
    /**
     * 应纳增值税
     * @var string
     */
    protected $value_added_tax;
    /**
     * 应纳附加税费
     * @var string
     */
    protected $additional_tax;

    /**
     * 应纳个税
     * @var string $personal_tax
     */
    public function setPersonalTax($personal_tax)
    {
        $this->personal_tax = $personal_tax;
    }

    /**
     * 应纳个税
     * @return string
     */
    public function getPersonalTax()
    {
        return $this->personal_tax;
    }

    /**
     * 应纳增值税
     * @var string $value_added_tax
     */
    public function setValueAddedTax($value_added_tax)
    {
        $this->value_added_tax = $value_added_tax;
    }

    /**
     * 应纳增值税
     * @return string
     */
    public function getValueAddedTax()
    {
        return $this->value_added_tax;
    }

    /**
     * 应纳附加税费
     * @var string $additional_tax
     */
    public function setAdditionalTax($additional_tax)
    {
        $this->additional_tax = $additional_tax;
    }

    /**
     * 应纳附加税费
     * @return string
     */
    public function getAdditionalTax()
    {
        return $this->additional_tax;
    }
}
