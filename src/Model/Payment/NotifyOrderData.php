<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseModel;

/**
 * 订单支付状态回调通知数据
 * Class NotifyOrderData
 */
class NotifyOrderData extends BaseModel
{
    /**
     * 平台企业订单号
     * @var string
     */
    protected $order_id;
    /**
     * 订单金额
     * @var string
     */
    protected $pay;
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
     * 姓名
     * @var string
     */
    protected $real_name;
    /**
     * 收款人账号
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
     * 订单状态码
     * @var string
     */
    protected $status;
    /**
     * 订单详细状态码
     * @var string
     */
    protected $status_detail;
    /**
     * 订单状态码描述
     * @var string
     */
    protected $status_message;
    /**
     * 订单详细状态码描述
     * @var string
     */
    protected $status_detail_message;
    /**
     * 订单状态补充信息
     * @var string
     */
    protected $supplemental_detail_message;
    /**
     * 综合服务主体支付金额
     * @var string
     */
    protected $broker_amount;
    /**
     * 综合服务平台流水号
     * @var string
     */
    protected $ref;
    /**
     * 支付交易流水号
     * @var string
     */
    protected $broker_bank_bill;
    /**
     * 支付路径
     * @var string
     */
    protected $withdraw_platform;
    /**
     * 订单接收时间，精确到秒
     * @var string
     */
    protected $created_at;
    /**
     * 订单完成时间，精确到秒
     * @var string
     */
    protected $finished_time;
    /**
     * 综合服务主体加成服务费
     * @var string
     */
    protected $broker_fee;
    /**
     * 余额账户支出加成服务费
     * @var string
     */
    protected $broker_real_fee;
    /**
     * 抵扣账户支出加成服务费
     * @var string
     */
    protected $broker_deduct_fee;
    /**
     * 订单备注
     * @var string
     */
    protected $pay_remark;
    /**
     * 用户加成服务费
     * @var string
     */
    protected $user_fee;
    /**
     * 银行名称
     * @var string
     */
    protected $bank_name;
    /**
     * 项目标识
     * @var string
     */
    protected $project_id;
    /**
     * 平台企业用户 ID
     * @var string
     */
    protected $user_id;

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
     * 收款人账号
     * @var string $card_no
     */
    public function setCardNo($card_no)
    {
        $this->card_no = $card_no;
    }


    /**
     * 收款人账号
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
     * 订单状态码
     * @var string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }


    /**
     * 订单状态码
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * 订单详细状态码
     * @var string $status_detail
     */
    public function setStatusDetail($status_detail)
    {
        $this->status_detail = $status_detail;
    }


    /**
     * 订单详细状态码
     * @return string
     */
    public function getStatusDetail()
    {
        return $this->status_detail;
    }

    /**
     * 订单状态码描述
     * @var string $status_message
     */
    public function setStatusMessage($status_message)
    {
        $this->status_message = $status_message;
    }


    /**
     * 订单状态码描述
     * @return string
     */
    public function getStatusMessage()
    {
        return $this->status_message;
    }

    /**
     * 订单详细状态码描述
     * @var string $status_detail_message
     */
    public function setStatusDetailMessage($status_detail_message)
    {
        $this->status_detail_message = $status_detail_message;
    }


    /**
     * 订单详细状态码描述
     * @return string
     */
    public function getStatusDetailMessage()
    {
        return $this->status_detail_message;
    }

    /**
     * 订单状态补充信息
     * @var string $supplemental_detail_message
     */
    public function setSupplementalDetailMessage($supplemental_detail_message)
    {
        $this->supplemental_detail_message = $supplemental_detail_message;
    }


    /**
     * 订单状态补充信息
     * @return string
     */
    public function getSupplementalDetailMessage()
    {
        return $this->supplemental_detail_message;
    }

    /**
     * 综合服务主体支付金额
     * @var string $broker_amount
     */
    public function setBrokerAmount($broker_amount)
    {
        $this->broker_amount = $broker_amount;
    }


    /**
     * 综合服务主体支付金额
     * @return string
     */
    public function getBrokerAmount()
    {
        return $this->broker_amount;
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
     * 支付交易流水号
     * @var string $broker_bank_bill
     */
    public function setBrokerBankBill($broker_bank_bill)
    {
        $this->broker_bank_bill = $broker_bank_bill;
    }


    /**
     * 支付交易流水号
     * @return string
     */
    public function getBrokerBankBill()
    {
        return $this->broker_bank_bill;
    }

    /**
     * 支付路径
     * @var string $withdraw_platform
     */
    public function setWithdrawPlatform($withdraw_platform)
    {
        $this->withdraw_platform = $withdraw_platform;
    }


    /**
     * 支付路径
     * @return string
     */
    public function getWithdrawPlatform()
    {
        return $this->withdraw_platform;
    }

    /**
     * 订单接收时间，精确到秒
     * @var string $created_at
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }


    /**
     * 订单接收时间，精确到秒
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * 订单完成时间，精确到秒
     * @var string $finished_time
     */
    public function setFinishedTime($finished_time)
    {
        $this->finished_time = $finished_time;
    }


    /**
     * 订单完成时间，精确到秒
     * @return string
     */
    public function getFinishedTime()
    {
        return $this->finished_time;
    }

    /**
     * 综合服务主体加成服务费
     * @var string $broker_fee
     */
    public function setBrokerFee($broker_fee)
    {
        $this->broker_fee = $broker_fee;
    }


    /**
     * 综合服务主体加成服务费
     * @return string
     */
    public function getBrokerFee()
    {
        return $this->broker_fee;
    }

    /**
     * 余额账户支出加成服务费
     * @var string $broker_real_fee
     */
    public function setBrokerRealFee($broker_real_fee)
    {
        $this->broker_real_fee = $broker_real_fee;
    }


    /**
     * 余额账户支出加成服务费
     * @return string
     */
    public function getBrokerRealFee()
    {
        return $this->broker_real_fee;
    }

    /**
     * 抵扣账户支出加成服务费
     * @var string $broker_deduct_fee
     */
    public function setBrokerDeductFee($broker_deduct_fee)
    {
        $this->broker_deduct_fee = $broker_deduct_fee;
    }


    /**
     * 抵扣账户支出加成服务费
     * @return string
     */
    public function getBrokerDeductFee()
    {
        return $this->broker_deduct_fee;
    }

    /**
     * 订单备注
     * @var string $pay_remark
     */
    public function setPayRemark($pay_remark)
    {
        $this->pay_remark = $pay_remark;
    }


    /**
     * 订单备注
     * @return string
     */
    public function getPayRemark()
    {
        return $this->pay_remark;
    }

    /**
     * 用户加成服务费
     * @var string $user_fee
     */
    public function setUserFee($user_fee)
    {
        $this->user_fee = $user_fee;
    }


    /**
     * 用户加成服务费
     * @return string
     */
    public function getUserFee()
    {
        return $this->user_fee;
    }

    /**
     * 银行名称
     * @var string $bank_name
     */
    public function setBankName($bank_name)
    {
        $this->bank_name = $bank_name;
    }


    /**
     * 银行名称
     * @return string
     */
    public function getBankName()
    {
        return $this->bank_name;
    }

    /**
     * 项目标识
     * @var string $project_id
     */
    public function setProjectId($project_id)
    {
        $this->project_id = $project_id;
    }


    /**
     * 项目标识
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * 平台企业用户 ID
     * @var string $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }


    /**
     * 平台企业用户 ID
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }
}
