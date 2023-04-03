<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 查询单笔订单信息返回
 * Class GetOrderResponseData
 */
class GetOrderResponseData extends BaseModel implements ResponseDataInterface
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
   * 新就业形态劳动者 ID，该字段已废弃
   * @var string
   */
  protected $anchor_id;
  /**
   * 描述信息，该字段已废弃
   * @var string
   */
  protected $notes;
  /**
   * 系统支付金额，该字段已废弃
   * @var string
   */
  protected $sys_amount;
  /**
   * 税费，该字段已废弃
   * @var string
   */
  protected $tax;
  /**
   * 系统支付费用，该字段已废弃
   * @var string
   */
  protected $sys_fee;

  /**
   * 平台企业订单号
   *  @var string $order_id
   */
  public function setOrderId($order_id)
  {
    $this->order_id = $order_id;
  }


  /**
   * 平台企业订单号
   * @var string
   */
  public function getOrderId()
  {
    return $this->order_id;
  }

  /**
   * 订单金额
   *  @var string $pay
   */
  public function setPay($pay)
  {
    $this->pay = $pay;
  }


  /**
   * 订单金额
   * @var string
   */
  public function getPay()
  {
    return $this->pay;
  }

  /**
   * 综合服务主体 ID
   *  @var string $broker_id
   */
  public function setBrokerId($broker_id)
  {
    $this->broker_id = $broker_id;
  }


  /**
   * 综合服务主体 ID
   * @var string
   */
  public function getBrokerId()
  {
    return $this->broker_id;
  }

  /**
   * 平台企业 ID
   *  @var string $dealer_id
   */
  public function setDealerId($dealer_id)
  {
    $this->dealer_id = $dealer_id;
  }


  /**
   * 平台企业 ID
   * @var string
   */
  public function getDealerId()
  {
    return $this->dealer_id;
  }

  /**
   * 姓名
   *  @var string $real_name
   */
  public function setRealName($real_name)
  {
    $this->real_name = $real_name;
  }


  /**
   * 姓名
   * @var string
   */
  public function getRealName()
  {
    return $this->real_name;
  }

  /**
   * 收款人账号
   *  @var string $card_no
   */
  public function setCardNo($card_no)
  {
    $this->card_no = $card_no;
  }


  /**
   * 收款人账号
   * @var string
   */
  public function getCardNo()
  {
    return $this->card_no;
  }

  /**
   * 身份证号码
   *  @var string $id_card
   */
  public function setIdCard($id_card)
  {
    $this->id_card = $id_card;
  }


  /**
   * 身份证号码
   * @var string
   */
  public function getIdCard()
  {
    return $this->id_card;
  }

  /**
   * 手机号
   *  @var string $phone_no
   */
  public function setPhoneNo($phone_no)
  {
    $this->phone_no = $phone_no;
  }


  /**
   * 手机号
   * @var string
   */
  public function getPhoneNo()
  {
    return $this->phone_no;
  }

  /**
   * 订单状态码
   *  @var string $status
   */
  public function setStatus($status)
  {
    $this->status = $status;
  }


  /**
   * 订单状态码
   * @var string
   */
  public function getStatus()
  {
    return $this->status;
  }

  /**
   * 订单详细状态码
   *  @var string $status_detail
   */
  public function setStatusDetail($status_detail)
  {
    $this->status_detail = $status_detail;
  }


  /**
   * 订单详细状态码
   * @var string
   */
  public function getStatusDetail()
  {
    return $this->status_detail;
  }

  /**
   * 订单状态码描述
   *  @var string $status_message
   */
  public function setStatusMessage($status_message)
  {
    $this->status_message = $status_message;
  }


  /**
   * 订单状态码描述
   * @var string
   */
  public function getStatusMessage()
  {
    return $this->status_message;
  }

  /**
   * 订单详细状态码描述
   *  @var string $status_detail_message
   */
  public function setStatusDetailMessage($status_detail_message)
  {
    $this->status_detail_message = $status_detail_message;
  }


  /**
   * 订单详细状态码描述
   * @var string
   */
  public function getStatusDetailMessage()
  {
    return $this->status_detail_message;
  }

  /**
   * 综合服务主体支付金额
   *  @var string $broker_amount
   */
  public function setBrokerAmount($broker_amount)
  {
    $this->broker_amount = $broker_amount;
  }


  /**
   * 综合服务主体支付金额
   * @var string
   */
  public function getBrokerAmount()
  {
    return $this->broker_amount;
  }

  /**
   * 综合服务平台流水号
   *  @var string $ref
   */
  public function setRef($ref)
  {
    $this->ref = $ref;
  }


  /**
   * 综合服务平台流水号
   * @var string
   */
  public function getRef()
  {
    return $this->ref;
  }

  /**
   * 支付交易流水号
   *  @var string $broker_bank_bill
   */
  public function setBrokerBankBill($broker_bank_bill)
  {
    $this->broker_bank_bill = $broker_bank_bill;
  }


  /**
   * 支付交易流水号
   * @var string
   */
  public function getBrokerBankBill()
  {
    return $this->broker_bank_bill;
  }

  /**
   * 支付路径
   *  @var string $withdraw_platform
   */
  public function setWithdrawPlatform($withdraw_platform)
  {
    $this->withdraw_platform = $withdraw_platform;
  }


  /**
   * 支付路径
   * @var string
   */
  public function getWithdrawPlatform()
  {
    return $this->withdraw_platform;
  }

  /**
   * 订单接收时间，精确到秒
   *  @var string $created_at
   */
  public function setCreatedAt($created_at)
  {
    $this->created_at = $created_at;
  }


  /**
   * 订单接收时间，精确到秒
   * @var string
   */
  public function getCreatedAt()
  {
    return $this->created_at;
  }

  /**
   * 订单完成时间，精确到秒
   *  @var string $finished_time
   */
  public function setFinishedTime($finished_time)
  {
    $this->finished_time = $finished_time;
  }


  /**
   * 订单完成时间，精确到秒
   * @var string
   */
  public function getFinishedTime()
  {
    return $this->finished_time;
  }

  /**
   * 综合服务主体加成服务费
   *  @var string $broker_fee
   */
  public function setBrokerFee($broker_fee)
  {
    $this->broker_fee = $broker_fee;
  }


  /**
   * 综合服务主体加成服务费
   * @var string
   */
  public function getBrokerFee()
  {
    return $this->broker_fee;
  }

  /**
   * 余额账户支出加成服务费
   *  @var string $broker_real_fee
   */
  public function setBrokerRealFee($broker_real_fee)
  {
    $this->broker_real_fee = $broker_real_fee;
  }


  /**
   * 余额账户支出加成服务费
   * @var string
   */
  public function getBrokerRealFee()
  {
    return $this->broker_real_fee;
  }

  /**
   * 抵扣账户支出加成服务费
   *  @var string $broker_deduct_fee
   */
  public function setBrokerDeductFee($broker_deduct_fee)
  {
    $this->broker_deduct_fee = $broker_deduct_fee;
  }


  /**
   * 抵扣账户支出加成服务费
   * @var string
   */
  public function getBrokerDeductFee()
  {
    return $this->broker_deduct_fee;
  }

  /**
   * 订单备注
   *  @var string $pay_remark
   */
  public function setPayRemark($pay_remark)
  {
    $this->pay_remark = $pay_remark;
  }


  /**
   * 订单备注
   * @var string
   */
  public function getPayRemark()
  {
    return $this->pay_remark;
  }

  /**
   * 用户加成服务费
   *  @var string $user_fee
   */
  public function setUserFee($user_fee)
  {
    $this->user_fee = $user_fee;
  }


  /**
   * 用户加成服务费
   * @var string
   */
  public function getUserFee()
  {
    return $this->user_fee;
  }

  /**
   * 银行名称
   *  @var string $bank_name
   */
  public function setBankName($bank_name)
  {
    $this->bank_name = $bank_name;
  }


  /**
   * 银行名称
   * @var string
   */
  public function getBankName()
  {
    return $this->bank_name;
  }

  /**
   * 项目标识
   *  @var string $project_id
   */
  public function setProjectId($project_id)
  {
    $this->project_id = $project_id;
  }


  /**
   * 项目标识
   * @var string
   */
  public function getProjectId()
  {
    return $this->project_id;
  }

  /**
   * 新就业形态劳动者 ID，该字段已废弃
   *  @var string $anchor_id
   */
  public function setAnchorId($anchor_id)
  {
    $this->anchor_id = $anchor_id;
  }


  /**
   * 新就业形态劳动者 ID，该字段已废弃
   * @var string
   */
  public function getAnchorId()
  {
    return $this->anchor_id;
  }

  /**
   * 描述信息，该字段已废弃
   *  @var string $notes
   */
  public function setNotes($notes)
  {
    $this->notes = $notes;
  }


  /**
   * 描述信息，该字段已废弃
   * @var string
   */
  public function getNotes()
  {
    return $this->notes;
  }

  /**
   * 系统支付金额，该字段已废弃
   *  @var string $sys_amount
   */
  public function setSysAmount($sys_amount)
  {
    $this->sys_amount = $sys_amount;
  }


  /**
   * 系统支付金额，该字段已废弃
   * @var string
   */
  public function getSysAmount()
  {
    return $this->sys_amount;
  }

  /**
   * 税费，该字段已废弃
   *  @var string $tax
   */
  public function setTax($tax)
  {
    $this->tax = $tax;
  }


  /**
   * 税费，该字段已废弃
   * @var string
   */
  public function getTax()
  {
    return $this->tax;
  }

  /**
   * 系统支付费用，该字段已废弃
   *  @var string $sys_fee
   */
  public function setSysFee($sys_fee)
  {
    $this->sys_fee = $sys_fee;
  }


  /**
   * 系统支付费用，该字段已废弃
   * @var string
   */
  public function getSysFee()
  {
    return $this->sys_fee;
  }
}
