<?php

namespace Yzh\Model\Dataservice;

use Yzh\Model\BaseModel;

/**
 * 月订单汇总详情
 * Class MonthlyOrderSummary
 */
class MonthlyOrderSummary extends BaseModel
{
    /**
     * 订单数量
     * @var int32
     */
    protected $order_num;
    /**
     * 订单金额
     * @var string
     */
    protected $pay;
    /**
     * 应收综合服务主体加成服务费金额
     * @var string
     */
    protected $broker_fee;
    /**
     * 应收余额账户支出加成服务费金额
     * @var string
     */
    protected $broker_real_fee;
    /**
     * 应收加成服务费抵扣金额
     * @var string
     */
    protected $broker_rebate_fee;
    /**
     * 应收用户加成服务费金额
     * @var string
     */
    protected $user_fee;
    /**
     * 实收综合服务主体加成服务费金额
     * @var string
     */
    protected $received_broker_fee;
    /**
     * 实收余额账户支出加成服务费金额
     * @var string
     */
    protected $received_broker_real_fee;
    /**
     * 实收加成服务费抵扣金额
     * @var string
     */
    protected $received_broker_deduct_fee;
    /**
     * 实收用户加成服务费金额
     * @var string
     */
    protected $received_user_fee;
    /**
     * 预扣税费总额
     * @var string
     */
    protected $tax;
    /**
     * 实缴税费总额
     * @var string
     */
    protected $received_tax_amount;
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
     * 订单数量
     * @var int32 $order_num
     */
    public function setOrderNum($order_num)
    {
        $this->order_num = $order_num;
    }

    /**
     * 订单数量
     * @return int32
     */
    public function getOrderNum()
    {
        return $this->order_num;
    }

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
     * 应收综合服务主体加成服务费金额
     * @var string $broker_fee
     */
    public function setBrokerFee($broker_fee)
    {
        $this->broker_fee = $broker_fee;
    }

    /**
     * 应收综合服务主体加成服务费金额
     * @return string
     */
    public function getBrokerFee()
    {
        return $this->broker_fee;
    }

    /**
     * 应收余额账户支出加成服务费金额
     * @var string $broker_real_fee
     */
    public function setBrokerRealFee($broker_real_fee)
    {
        $this->broker_real_fee = $broker_real_fee;
    }

    /**
     * 应收余额账户支出加成服务费金额
     * @return string
     */
    public function getBrokerRealFee()
    {
        return $this->broker_real_fee;
    }

    /**
     * 应收加成服务费抵扣金额
     * @var string $broker_rebate_fee
     */
    public function setBrokerRebateFee($broker_rebate_fee)
    {
        $this->broker_rebate_fee = $broker_rebate_fee;
    }

    /**
     * 应收加成服务费抵扣金额
     * @return string
     */
    public function getBrokerRebateFee()
    {
        return $this->broker_rebate_fee;
    }

    /**
     * 应收用户加成服务费金额
     * @var string $user_fee
     */
    public function setUserFee($user_fee)
    {
        $this->user_fee = $user_fee;
    }

    /**
     * 应收用户加成服务费金额
     * @return string
     */
    public function getUserFee()
    {
        return $this->user_fee;
    }

    /**
     * 实收综合服务主体加成服务费金额
     * @var string $received_broker_fee
     */
    public function setReceivedBrokerFee($received_broker_fee)
    {
        $this->received_broker_fee = $received_broker_fee;
    }

    /**
     * 实收综合服务主体加成服务费金额
     * @return string
     */
    public function getReceivedBrokerFee()
    {
        return $this->received_broker_fee;
    }

    /**
     * 实收余额账户支出加成服务费金额
     * @var string $received_broker_real_fee
     */
    public function setReceivedBrokerRealFee($received_broker_real_fee)
    {
        $this->received_broker_real_fee = $received_broker_real_fee;
    }

    /**
     * 实收余额账户支出加成服务费金额
     * @return string
     */
    public function getReceivedBrokerRealFee()
    {
        return $this->received_broker_real_fee;
    }

    /**
     * 实收加成服务费抵扣金额
     * @var string $received_broker_deduct_fee
     */
    public function setReceivedBrokerDeductFee($received_broker_deduct_fee)
    {
        $this->received_broker_deduct_fee = $received_broker_deduct_fee;
    }

    /**
     * 实收加成服务费抵扣金额
     * @return string
     */
    public function getReceivedBrokerDeductFee()
    {
        return $this->received_broker_deduct_fee;
    }

    /**
     * 实收用户加成服务费金额
     * @var string $received_user_fee
     */
    public function setReceivedUserFee($received_user_fee)
    {
        $this->received_user_fee = $received_user_fee;
    }

    /**
     * 实收用户加成服务费金额
     * @return string
     */
    public function getReceivedUserFee()
    {
        return $this->received_user_fee;
    }

    /**
     * 预扣税费总额
     * @var string $tax
     */
    public function setTax($tax)
    {
        $this->tax = $tax;
    }

    /**
     * 预扣税费总额
     * @return string
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * 实缴税费总额
     * @var string $received_tax_amount
     */
    public function setReceivedTaxAmount($received_tax_amount)
    {
        $this->received_tax_amount = $received_tax_amount;
    }

    /**
     * 实缴税费总额
     * @return string
     */
    public function getReceivedTaxAmount()
    {
        return $this->received_tax_amount;
    }

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
}
