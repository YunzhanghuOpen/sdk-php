<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseModel;

/**
 * 缴税明细
 * Class TaxDetail
 */
class TaxDetail extends BaseModel
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
     * 实缴个税
     * @var string
     */
    protected $received_personal_tax;
    /**
     * 实缴增值税
     * @var string
     */
    protected $received_value_added_tax;
    /**
     * 实缴附加税费
     * @var string
     */
    protected $received_additional_tax;
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
     * 用户实缴个税
     * @var string
     */
    protected $user_received_personal_tax;
    /**
     * 平台企业实缴个税
     * @var string
     */
    protected $dealer_received_personal_tax;
    /**
     * 用户实缴增值税
     * @var string
     */
    protected $user_received_value_added_tax;
    /**
     * 平台企业实缴增值税
     * @var string
     */
    protected $dealer_received_value_added_tax;
    /**
     * 用户实缴附加税费
     * @var string
     */
    protected $user_received_additional_tax;
    /**
     * 平台企业实缴附加税费
     * @var string
     */
    protected $dealer_received_additional_tax;
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
     * 实缴个税
     * @var string $received_personal_tax
     */
    public function setReceivedPersonalTax($received_personal_tax)
    {
        $this->received_personal_tax = $received_personal_tax;
    }

    /**
     * 实缴个税
     * @return string
     */
    public function getReceivedPersonalTax()
    {
        return $this->received_personal_tax;
    }

    /**
     * 实缴增值税
     * @var string $received_value_added_tax
     */
    public function setReceivedValueAddedTax($received_value_added_tax)
    {
        $this->received_value_added_tax = $received_value_added_tax;
    }

    /**
     * 实缴增值税
     * @return string
     */
    public function getReceivedValueAddedTax()
    {
        return $this->received_value_added_tax;
    }

    /**
     * 实缴附加税费
     * @var string $received_additional_tax
     */
    public function setReceivedAdditionalTax($received_additional_tax)
    {
        $this->received_additional_tax = $received_additional_tax;
    }

    /**
     * 实缴附加税费
     * @return string
     */
    public function getReceivedAdditionalTax()
    {
        return $this->received_additional_tax;
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
     * 用户实缴个税
     * @var string $user_received_personal_tax
     */
    public function setUserReceivedPersonalTax($user_received_personal_tax)
    {
        $this->user_received_personal_tax = $user_received_personal_tax;
    }

    /**
     * 用户实缴个税
     * @return string
     */
    public function getUserReceivedPersonalTax()
    {
        return $this->user_received_personal_tax;
    }

    /**
     * 平台企业实缴个税
     * @var string $dealer_received_personal_tax
     */
    public function setDealerReceivedPersonalTax($dealer_received_personal_tax)
    {
        $this->dealer_received_personal_tax = $dealer_received_personal_tax;
    }

    /**
     * 平台企业实缴个税
     * @return string
     */
    public function getDealerReceivedPersonalTax()
    {
        return $this->dealer_received_personal_tax;
    }

    /**
     * 用户实缴增值税
     * @var string $user_received_value_added_tax
     */
    public function setUserReceivedValueAddedTax($user_received_value_added_tax)
    {
        $this->user_received_value_added_tax = $user_received_value_added_tax;
    }

    /**
     * 用户实缴增值税
     * @return string
     */
    public function getUserReceivedValueAddedTax()
    {
        return $this->user_received_value_added_tax;
    }

    /**
     * 平台企业实缴增值税
     * @var string $dealer_received_value_added_tax
     */
    public function setDealerReceivedValueAddedTax($dealer_received_value_added_tax)
    {
        $this->dealer_received_value_added_tax = $dealer_received_value_added_tax;
    }

    /**
     * 平台企业实缴增值税
     * @return string
     */
    public function getDealerReceivedValueAddedTax()
    {
        return $this->dealer_received_value_added_tax;
    }

    /**
     * 用户实缴附加税费
     * @var string $user_received_additional_tax
     */
    public function setUserReceivedAdditionalTax($user_received_additional_tax)
    {
        $this->user_received_additional_tax = $user_received_additional_tax;
    }

    /**
     * 用户实缴附加税费
     * @return string
     */
    public function getUserReceivedAdditionalTax()
    {
        return $this->user_received_additional_tax;
    }

    /**
     * 平台企业实缴附加税费
     * @var string $dealer_received_additional_tax
     */
    public function setDealerReceivedAdditionalTax($dealer_received_additional_tax)
    {
        $this->dealer_received_additional_tax = $dealer_received_additional_tax;
    }

    /**
     * 平台企业实缴附加税费
     * @return string
     */
    public function getDealerReceivedAdditionalTax()
    {
        return $this->dealer_received_additional_tax;
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
