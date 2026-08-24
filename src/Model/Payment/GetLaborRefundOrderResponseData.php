<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 查询劳动者退款订单信息返回
 * Class GetLaborRefundOrderResponseData
 */
class GetLaborRefundOrderResponseData extends BaseModel implements ResponseDataInterface
{
    /**
     * 综合服务主体 ID
     * @var string
     */
    protected $broker_id;
    /**
     * 平台企业 ID
     * @var string
     */
    protected $dealer_id;
    /**
     * 综合服务平台流水号
     * @var string
     */
    protected $ref;
    /**
     * 退款流水号
     * @var string
     */
    protected $refund_ref;
    /**
     * 平台企业订单号
     * @var string
     */
    protected $order_id;
    /**
     * 姓名
     * @var string
     */
    protected $real_name;
    /**
     * 账号
     * @var string
     */
    protected $card_no;
    /**
     * 身份证号码
     * @var string
     */
    protected $id_card;
    /**
     * 手机号
     * @var string
     */
    protected $phone_no;
    /**
     * 退款类型
     * @var string
     */
    protected $refund_type;
    /**
     * 退款总金额
     * @var string
     */
    protected $refund_total_amount;
    /**
     * 退回劳动者实收金额
     * @var string
     */
    protected $refund_user_real_amount;
    /**
     * 是否退加成服务费
     * @var string
     */
    protected $is_refund_fee;
    /**
     * 退回劳动者加成服务费金额
     * @var string
     */
    protected $refund_user_fee;
    /**
     * 退回平台企业加成服务费金额
     * @var string
     */
    protected $refund_broker_fee;
    /**
     * 退回平台企业服务费实收金额
     * @var string
     */
    protected $refund_real_fee;
    /**
     * 退回平台企业服务费抵扣金额
     * @var string
     */
    protected $refund_deduct_fee;
    /**
     * 是否退税费
     * @var string
     */
    protected $is_refund_tax;
    /**
     * 退回税费总额
     * @var string
     */
    protected $refund_tax_amount;
    /**
     * 退回个税金额
     * @var string
     */
    protected $refund_personal_tax;
    /**
     * 退回增值税金额
     * @var string
     */
    protected $refund_value_added_tax;
    /**
     * 退回附加税金额
     * @var string
     */
    protected $refund_additional_tax;
    /**
     * 退回已追缴个税
     * @var string
     */
    protected $refund_labor_recovery_personal_tax;
    /**
     * 退回已追缴增附税
     * @var string
     */
    protected $refund_labor_recovery_added_tax;
    /**
     * 退回劳动者个税
     * @var string
     */
    protected $refund_user_personal_tax;
    /**
     * 退回劳动者增值税
     * @var string
     */
    protected $refund_user_value_added_tax;
    /**
     * 退回劳动者附加税
     * @var string
     */
    protected $refund_user_additional_tax;
    /**
     * 退回平台企业个税
     * @var string
     */
    protected $refund_dealer_personal_tax;
    /**
     * 退回平台企业增值税
     * @var string
     */
    protected $refund_dealer_value_added_tax;
    /**
     * 退回平台企业附加税
     * @var string
     */
    protected $refund_dealer_additional_tax;
    /**
     * 退回云账户个税
     * @var string
     */
    protected $refund_broker_personal_tax;
    /**
     * 退回云账户增值税
     * @var string
     */
    protected $refund_broker_value_added_tax;
    /**
     * 退回云账户附加税
     * @var string
     */
    protected $refund_broker_additional_tax;
    /**
     * 退款状态
     * @var string
     */
    protected $refund_status;
    /**
     * 退款创建时间
     * @var string
     */
    protected $create_time;
    /**
     * 退款完成时间
     * @var string
     */
    protected $finished_at;

    /**
     * 综合服务主体 ID
     * @var string $broker_id
     */
    public function setBrokerId($broker_id)
    {
        $this->broker_id = $broker_id;
    }

    /**
     * 综合服务主体 ID
     * @return string
     */
    public function getBrokerId()
    {
        return $this->broker_id;
    }

    /**
     * 平台企业 ID
     * @var string $dealer_id
     */
    public function setDealerId($dealer_id)
    {
        $this->dealer_id = $dealer_id;
    }

    /**
     * 平台企业 ID
     * @return string
     */
    public function getDealerId()
    {
        return $this->dealer_id;
    }

    /**
     * 综合服务平台流水号
     * @var string $ref
     */
    public function setRef($ref)
    {
        $this->ref = $ref;
    }

    /**
     * 综合服务平台流水号
     * @return string
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * 退款流水号
     * @var string $refund_ref
     */
    public function setRefundRef($refund_ref)
    {
        $this->refund_ref = $refund_ref;
    }

    /**
     * 退款流水号
     * @return string
     */
    public function getRefundRef()
    {
        return $this->refund_ref;
    }

    /**
     * 平台企业订单号
     * @var string $order_id
     */
    public function setOrderId($order_id)
    {
        $this->order_id = $order_id;
    }

    /**
     * 平台企业订单号
     * @return string
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * 姓名
     * @var string $real_name
     */
    public function setRealName($real_name)
    {
        $this->real_name = $real_name;
    }

    /**
     * 姓名
     * @return string
     */
    public function getRealName()
    {
        return $this->real_name;
    }

    /**
     * 账号
     * @var string $card_no
     */
    public function setCardNo($card_no)
    {
        $this->card_no = $card_no;
    }

    /**
     * 账号
     * @return string
     */
    public function getCardNo()
    {
        return $this->card_no;
    }

    /**
     * 身份证号码
     * @var string $id_card
     */
    public function setIdCard($id_card)
    {
        $this->id_card = $id_card;
    }

    /**
     * 身份证号码
     * @return string
     */
    public function getIdCard()
    {
        return $this->id_card;
    }

    /**
     * 手机号
     * @var string $phone_no
     */
    public function setPhoneNo($phone_no)
    {
        $this->phone_no = $phone_no;
    }

    /**
     * 手机号
     * @return string
     */
    public function getPhoneNo()
    {
        return $this->phone_no;
    }

    /**
     * 退款类型
     * @var string $refund_type
     */
    public function setRefundType($refund_type)
    {
        $this->refund_type = $refund_type;
    }

    /**
     * 退款类型
     * @return string
     */
    public function getRefundType()
    {
        return $this->refund_type;
    }

    /**
     * 退款总金额
     * @var string $refund_total_amount
     */
    public function setRefundTotalAmount($refund_total_amount)
    {
        $this->refund_total_amount = $refund_total_amount;
    }

    /**
     * 退款总金额
     * @return string
     */
    public function getRefundTotalAmount()
    {
        return $this->refund_total_amount;
    }

    /**
     * 退回劳动者实收金额
     * @var string $refund_user_real_amount
     */
    public function setRefundUserRealAmount($refund_user_real_amount)
    {
        $this->refund_user_real_amount = $refund_user_real_amount;
    }

    /**
     * 退回劳动者实收金额
     * @return string
     */
    public function getRefundUserRealAmount()
    {
        return $this->refund_user_real_amount;
    }

    /**
     * 是否退加成服务费
     * @var string $is_refund_fee
     */
    public function setIsRefundFee($is_refund_fee)
    {
        $this->is_refund_fee = $is_refund_fee;
    }

    /**
     * 是否退加成服务费
     * @return string
     */
    public function getIsRefundFee()
    {
        return $this->is_refund_fee;
    }

    /**
     * 退回劳动者加成服务费金额
     * @var string $refund_user_fee
     */
    public function setRefundUserFee($refund_user_fee)
    {
        $this->refund_user_fee = $refund_user_fee;
    }

    /**
     * 退回劳动者加成服务费金额
     * @return string
     */
    public function getRefundUserFee()
    {
        return $this->refund_user_fee;
    }

    /**
     * 退回平台企业加成服务费金额
     * @var string $refund_broker_fee
     */
    public function setRefundBrokerFee($refund_broker_fee)
    {
        $this->refund_broker_fee = $refund_broker_fee;
    }

    /**
     * 退回平台企业加成服务费金额
     * @return string
     */
    public function getRefundBrokerFee()
    {
        return $this->refund_broker_fee;
    }

    /**
     * 退回平台企业服务费实收金额
     * @var string $refund_real_fee
     */
    public function setRefundRealFee($refund_real_fee)
    {
        $this->refund_real_fee = $refund_real_fee;
    }

    /**
     * 退回平台企业服务费实收金额
     * @return string
     */
    public function getRefundRealFee()
    {
        return $this->refund_real_fee;
    }

    /**
     * 退回平台企业服务费抵扣金额
     * @var string $refund_deduct_fee
     */
    public function setRefundDeductFee($refund_deduct_fee)
    {
        $this->refund_deduct_fee = $refund_deduct_fee;
    }

    /**
     * 退回平台企业服务费抵扣金额
     * @return string
     */
    public function getRefundDeductFee()
    {
        return $this->refund_deduct_fee;
    }

    /**
     * 是否退税费
     * @var string $is_refund_tax
     */
    public function setIsRefundTax($is_refund_tax)
    {
        $this->is_refund_tax = $is_refund_tax;
    }

    /**
     * 是否退税费
     * @return string
     */
    public function getIsRefundTax()
    {
        return $this->is_refund_tax;
    }

    /**
     * 退回税费总额
     * @var string $refund_tax_amount
     */
    public function setRefundTaxAmount($refund_tax_amount)
    {
        $this->refund_tax_amount = $refund_tax_amount;
    }

    /**
     * 退回税费总额
     * @return string
     */
    public function getRefundTaxAmount()
    {
        return $this->refund_tax_amount;
    }

    /**
     * 退回个税金额
     * @var string $refund_personal_tax
     */
    public function setRefundPersonalTax($refund_personal_tax)
    {
        $this->refund_personal_tax = $refund_personal_tax;
    }

    /**
     * 退回个税金额
     * @return string
     */
    public function getRefundPersonalTax()
    {
        return $this->refund_personal_tax;
    }

    /**
     * 退回增值税金额
     * @var string $refund_value_added_tax
     */
    public function setRefundValueAddedTax($refund_value_added_tax)
    {
        $this->refund_value_added_tax = $refund_value_added_tax;
    }

    /**
     * 退回增值税金额
     * @return string
     */
    public function getRefundValueAddedTax()
    {
        return $this->refund_value_added_tax;
    }

    /**
     * 退回附加税金额
     * @var string $refund_additional_tax
     */
    public function setRefundAdditionalTax($refund_additional_tax)
    {
        $this->refund_additional_tax = $refund_additional_tax;
    }

    /**
     * 退回附加税金额
     * @return string
     */
    public function getRefundAdditionalTax()
    {
        return $this->refund_additional_tax;
    }

    /**
     * 退回已追缴个税
     * @var string $refund_labor_recovery_personal_tax
     */
    public function setRefundLaborRecoveryPersonalTax($refund_labor_recovery_personal_tax)
    {
        $this->refund_labor_recovery_personal_tax = $refund_labor_recovery_personal_tax;
    }

    /**
     * 退回已追缴个税
     * @return string
     */
    public function getRefundLaborRecoveryPersonalTax()
    {
        return $this->refund_labor_recovery_personal_tax;
    }

    /**
     * 退回已追缴增附税
     * @var string $refund_labor_recovery_added_tax
     */
    public function setRefundLaborRecoveryAddedTax($refund_labor_recovery_added_tax)
    {
        $this->refund_labor_recovery_added_tax = $refund_labor_recovery_added_tax;
    }

    /**
     * 退回已追缴增附税
     * @return string
     */
    public function getRefundLaborRecoveryAddedTax()
    {
        return $this->refund_labor_recovery_added_tax;
    }

    /**
     * 退回劳动者个税
     * @var string $refund_user_personal_tax
     */
    public function setRefundUserPersonalTax($refund_user_personal_tax)
    {
        $this->refund_user_personal_tax = $refund_user_personal_tax;
    }

    /**
     * 退回劳动者个税
     * @return string
     */
    public function getRefundUserPersonalTax()
    {
        return $this->refund_user_personal_tax;
    }

    /**
     * 退回劳动者增值税
     * @var string $refund_user_value_added_tax
     */
    public function setRefundUserValueAddedTax($refund_user_value_added_tax)
    {
        $this->refund_user_value_added_tax = $refund_user_value_added_tax;
    }

    /**
     * 退回劳动者增值税
     * @return string
     */
    public function getRefundUserValueAddedTax()
    {
        return $this->refund_user_value_added_tax;
    }

    /**
     * 退回劳动者附加税
     * @var string $refund_user_additional_tax
     */
    public function setRefundUserAdditionalTax($refund_user_additional_tax)
    {
        $this->refund_user_additional_tax = $refund_user_additional_tax;
    }

    /**
     * 退回劳动者附加税
     * @return string
     */
    public function getRefundUserAdditionalTax()
    {
        return $this->refund_user_additional_tax;
    }

    /**
     * 退回平台企业个税
     * @var string $refund_dealer_personal_tax
     */
    public function setRefundDealerPersonalTax($refund_dealer_personal_tax)
    {
        $this->refund_dealer_personal_tax = $refund_dealer_personal_tax;
    }

    /**
     * 退回平台企业个税
     * @return string
     */
    public function getRefundDealerPersonalTax()
    {
        return $this->refund_dealer_personal_tax;
    }

    /**
     * 退回平台企业增值税
     * @var string $refund_dealer_value_added_tax
     */
    public function setRefundDealerValueAddedTax($refund_dealer_value_added_tax)
    {
        $this->refund_dealer_value_added_tax = $refund_dealer_value_added_tax;
    }

    /**
     * 退回平台企业增值税
     * @return string
     */
    public function getRefundDealerValueAddedTax()
    {
        return $this->refund_dealer_value_added_tax;
    }

    /**
     * 退回平台企业附加税
     * @var string $refund_dealer_additional_tax
     */
    public function setRefundDealerAdditionalTax($refund_dealer_additional_tax)
    {
        $this->refund_dealer_additional_tax = $refund_dealer_additional_tax;
    }

    /**
     * 退回平台企业附加税
     * @return string
     */
    public function getRefundDealerAdditionalTax()
    {
        return $this->refund_dealer_additional_tax;
    }

    /**
     * 退回云账户个税
     * @var string $refund_broker_personal_tax
     */
    public function setRefundBrokerPersonalTax($refund_broker_personal_tax)
    {
        $this->refund_broker_personal_tax = $refund_broker_personal_tax;
    }

    /**
     * 退回云账户个税
     * @return string
     */
    public function getRefundBrokerPersonalTax()
    {
        return $this->refund_broker_personal_tax;
    }

    /**
     * 退回云账户增值税
     * @var string $refund_broker_value_added_tax
     */
    public function setRefundBrokerValueAddedTax($refund_broker_value_added_tax)
    {
        $this->refund_broker_value_added_tax = $refund_broker_value_added_tax;
    }

    /**
     * 退回云账户增值税
     * @return string
     */
    public function getRefundBrokerValueAddedTax()
    {
        return $this->refund_broker_value_added_tax;
    }

    /**
     * 退回云账户附加税
     * @var string $refund_broker_additional_tax
     */
    public function setRefundBrokerAdditionalTax($refund_broker_additional_tax)
    {
        $this->refund_broker_additional_tax = $refund_broker_additional_tax;
    }

    /**
     * 退回云账户附加税
     * @return string
     */
    public function getRefundBrokerAdditionalTax()
    {
        return $this->refund_broker_additional_tax;
    }

    /**
     * 退款状态
     * @var string $refund_status
     */
    public function setRefundStatus($refund_status)
    {
        $this->refund_status = $refund_status;
    }

    /**
     * 退款状态
     * @return string
     */
    public function getRefundStatus()
    {
        return $this->refund_status;
    }

    /**
     * 退款创建时间
     * @var string $create_time
     */
    public function setCreateTime($create_time)
    {
        $this->create_time = $create_time;
    }

    /**
     * 退款创建时间
     * @return string
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    /**
     * 退款完成时间
     * @var string $finished_at
     */
    public function setFinishedAt($finished_at)
    {
        $this->finished_at = $finished_at;
    }

    /**
     * 退款完成时间
     * @return string
     */
    public function getFinishedAt()
    {
        return $this->finished_at;
    }
}

