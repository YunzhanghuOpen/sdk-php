<?php

namespace Yzh\Model\Calculatelabor;

use Yzh\Model\BaseModel;

/**
 * 税费明细
 * Class CalcTaxDetail
 */
class CalcTaxDetail extends BaseModel
{
    /**
     * 预扣个税
     * @var string
     */
    protected $personal_tax;
    /**
     * 预扣增值税
     * @var string
     */
    protected $value_added_tax;
    /**
     * 预扣附加税费
     * @var string
     */
    protected $additional_tax;
    /**
     * 用户预扣个税
     * @var string
     */
    protected $user_personal_tax;
    /**
     * 平台企业预扣个税
     * @var string
     */
    protected $dealer_personal_tax;
    /**
     * 云账户预扣个税
     * @var string
     */
    protected $broker_personal_tax;
    /**
     * 用户预扣增值税
     * @var string
     */
    protected $user_value_added_tax;
    /**
     * 平台企业预扣增值税
     * @var string
     */
    protected $dealer_value_added_tax;
    /**
     * 云账户预扣增值税
     * @var string
     */
    protected $broker_value_added_tax;
    /**
     * 用户预扣附加税费
     * @var string
     */
    protected $user_additional_tax;
    /**
     * 平台企业预扣附加税费
     * @var string
     */
    protected $dealer_additional_tax;
    /**
     * 云账户预扣附加税费
     * @var string
     */
    protected $broker_additional_tax;
    /**
     * 预扣个税税率
     * @var string
     */
    protected $personal_tax_rate;
    /**
     * 预扣个税速算扣除数
     * @var string
     */
    protected $deduct_tax;

    /**
     * 预扣个税
     * @var string $personal_tax
     */
    public function setPersonalTax($personal_tax)
    {
        $this->personal_tax = $personal_tax;
    }

    /**
     * 预扣个税
     * @return string
     */
    public function getPersonalTax()
    {
        return $this->personal_tax;
    }

    /**
     * 预扣增值税
     * @var string $value_added_tax
     */
    public function setValueAddedTax($value_added_tax)
    {
        $this->value_added_tax = $value_added_tax;
    }

    /**
     * 预扣增值税
     * @return string
     */
    public function getValueAddedTax()
    {
        return $this->value_added_tax;
    }

    /**
     * 预扣附加税费
     * @var string $additional_tax
     */
    public function setAdditionalTax($additional_tax)
    {
        $this->additional_tax = $additional_tax;
    }

    /**
     * 预扣附加税费
     * @return string
     */
    public function getAdditionalTax()
    {
        return $this->additional_tax;
    }

    /**
     * 用户预扣个税
     * @var string $user_personal_tax
     */
    public function setUserPersonalTax($user_personal_tax)
    {
        $this->user_personal_tax = $user_personal_tax;
    }

    /**
     * 用户预扣个税
     * @return string
     */
    public function getUserPersonalTax()
    {
        return $this->user_personal_tax;
    }

    /**
     * 平台企业预扣个税
     * @var string $dealer_personal_tax
     */
    public function setDealerPersonalTax($dealer_personal_tax)
    {
        $this->dealer_personal_tax = $dealer_personal_tax;
    }

    /**
     * 平台企业预扣个税
     * @return string
     */
    public function getDealerPersonalTax()
    {
        return $this->dealer_personal_tax;
    }

    /**
     * 云账户预扣个税
     * @var string $broker_personal_tax
     */
    public function setBrokerPersonalTax($broker_personal_tax)
    {
        $this->broker_personal_tax = $broker_personal_tax;
    }

    /**
     * 云账户预扣个税
     * @return string
     */
    public function getBrokerPersonalTax()
    {
        return $this->broker_personal_tax;
    }

    /**
     * 用户预扣增值税
     * @var string $user_value_added_tax
     */
    public function setUserValueAddedTax($user_value_added_tax)
    {
        $this->user_value_added_tax = $user_value_added_tax;
    }

    /**
     * 用户预扣增值税
     * @return string
     */
    public function getUserValueAddedTax()
    {
        return $this->user_value_added_tax;
    }

    /**
     * 平台企业预扣增值税
     * @var string $dealer_value_added_tax
     */
    public function setDealerValueAddedTax($dealer_value_added_tax)
    {
        $this->dealer_value_added_tax = $dealer_value_added_tax;
    }

    /**
     * 平台企业预扣增值税
     * @return string
     */
    public function getDealerValueAddedTax()
    {
        return $this->dealer_value_added_tax;
    }

    /**
     * 云账户预扣增值税
     * @var string $broker_value_added_tax
     */
    public function setBrokerValueAddedTax($broker_value_added_tax)
    {
        $this->broker_value_added_tax = $broker_value_added_tax;
    }

    /**
     * 云账户预扣增值税
     * @return string
     */
    public function getBrokerValueAddedTax()
    {
        return $this->broker_value_added_tax;
    }

    /**
     * 用户预扣附加税费
     * @var string $user_additional_tax
     */
    public function setUserAdditionalTax($user_additional_tax)
    {
        $this->user_additional_tax = $user_additional_tax;
    }

    /**
     * 用户预扣附加税费
     * @return string
     */
    public function getUserAdditionalTax()
    {
        return $this->user_additional_tax;
    }

    /**
     * 平台企业预扣附加税费
     * @var string $dealer_additional_tax
     */
    public function setDealerAdditionalTax($dealer_additional_tax)
    {
        $this->dealer_additional_tax = $dealer_additional_tax;
    }

    /**
     * 平台企业预扣附加税费
     * @return string
     */
    public function getDealerAdditionalTax()
    {
        return $this->dealer_additional_tax;
    }

    /**
     * 云账户预扣附加税费
     * @var string $broker_additional_tax
     */
    public function setBrokerAdditionalTax($broker_additional_tax)
    {
        $this->broker_additional_tax = $broker_additional_tax;
    }

    /**
     * 云账户预扣附加税费
     * @return string
     */
    public function getBrokerAdditionalTax()
    {
        return $this->broker_additional_tax;
    }

    /**
     * 预扣个税税率
     * @var string $personal_tax_rate
     */
    public function setPersonalTaxRate($personal_tax_rate)
    {
        $this->personal_tax_rate = $personal_tax_rate;
    }

    /**
     * 预扣个税税率
     * @return string
     */
    public function getPersonalTaxRate()
    {
        return $this->personal_tax_rate;
    }

    /**
     * 预扣个税速算扣除数
     * @var string $deduct_tax
     */
    public function setDeductTax($deduct_tax)
    {
        $this->deduct_tax = $deduct_tax;
    }

    /**
     * 预扣个税速算扣除数
     * @return string
     */
    public function getDeductTax()
    {
        return $this->deduct_tax;
    }
}
