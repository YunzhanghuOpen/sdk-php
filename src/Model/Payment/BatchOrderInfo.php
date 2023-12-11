<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseModel;

/**
 * 批次下单订单信息
 * Class BatchOrderInfo
 */
class BatchOrderInfo extends BaseModel
{
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
   * 身份证号码
   * @var string
   */
  protected $id_card;
  /**
   * 收款账号
   * @var string
   */
  protected $card_no;
  /**
   * 微信用户 openid
   * @var string
   */
  protected $openid;
  /**
   * 手机号
   * @var string
   */
  protected $phone_no;
  /**
   * 项目标识
   * @var string
   */
  protected $project_id;
  /**
   * 订单金额
   * @var string
   */
  protected $pay;
  /**
   * 订单备注
   * @var string
   */
  protected $pay_remark;
  /**
   * 回调地址
   * @var string
   */
  protected $notify_url;
  
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
   * 收款账号
   *  @var string $card_no
   */
  public function setCardNo($card_no)
  {
    $this->card_no = $card_no;
  }


  /**
   * 收款账号
   * @var string
   */
  public function getCardNo()
  {
    return $this->card_no;
  }
  
  /**
   * 微信用户 openid
   *  @var string $openid
   */
  public function setOpenid($openid)
  {
    $this->openid = $openid;
  }


  /**
   * 微信用户 openid
   * @var string
   */
  public function getOpenid()
  {
    return $this->openid;
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
   * 回调地址
   *  @var string $notify_url
   */
  public function setNotifyUrl($notify_url)
  {
    $this->notify_url = $notify_url;
  }


  /**
   * 回调地址
   * @var string
   */
  public function getNotifyUrl()
  {
    return $this->notify_url;
  }
}
