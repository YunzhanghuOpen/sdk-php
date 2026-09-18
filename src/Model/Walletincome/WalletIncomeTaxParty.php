<?php

namespace Yzh\Model\Walletincome;

use Yzh\Model\BaseModel;

/**
 * 税费承担方明细
 * Class WalletIncomeTaxParty
 */
class WalletIncomeTaxParty extends BaseModel
{
    /**
     * 税费总额
     * @var string
     */
    protected $total_tax;
    /**
     * 个人所得税
     * @var string
     */
    protected $personal_tax;
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
     * 城市维护建设税
     * @var string
     */
    protected $additional_urban_tax;
    /**
     * 教育费附加
     * @var string
     */
    protected $additional_tuition_tax;
    /**
     * 地方教育附加
     * @var string
     */
    protected $additional_local_tuition_tax;

    /**
     * 税费总额
     * @var string $total_tax
     */
    public function setTotalTax($total_tax)
    {
        $this->total_tax = $total_tax;
    }

    /**
     * 税费总额
     * @return string
     */
    public function getTotalTax()
    {
        return $this->total_tax;
    }

    /**
     * 个人所得税
     * @var string $personal_tax
     */
    public function setPersonalTax($personal_tax)
    {
        $this->personal_tax = $personal_tax;
    }

    /**
     * 个人所得税
     * @return string
     */
    public function getPersonalTax()
    {
        return $this->personal_tax;
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
     * 城市维护建设税
     * @var string $additional_urban_tax
     */
    public function setAdditionalUrbanTax($additional_urban_tax)
    {
        $this->additional_urban_tax = $additional_urban_tax;
    }

    /**
     * 城市维护建设税
     * @return string
     */
    public function getAdditionalUrbanTax()
    {
        return $this->additional_urban_tax;
    }

    /**
     * 教育费附加
     * @var string $additional_tuition_tax
     */
    public function setAdditionalTuitionTax($additional_tuition_tax)
    {
        $this->additional_tuition_tax = $additional_tuition_tax;
    }

    /**
     * 教育费附加
     * @return string
     */
    public function getAdditionalTuitionTax()
    {
        return $this->additional_tuition_tax;
    }

    /**
     * 地方教育附加
     * @var string $additional_local_tuition_tax
     */
    public function setAdditionalLocalTuitionTax($additional_local_tuition_tax)
    {
        $this->additional_local_tuition_tax = $additional_local_tuition_tax;
    }

    /**
     * 地方教育附加
     * @return string
     */
    public function getAdditionalLocalTuitionTax()
    {
        return $this->additional_local_tuition_tax;
    }
}
