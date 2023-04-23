<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 银行卡实时支付返回
 * Class CreateBankpayOrderResponseData
 */
class CreateBankpayOrderResponseData extends BaseModel implements ResponseDataInterface
{
  /**
   
   * @var string
   */
  protected $order_id;
  /**
   * 综合服务平台流水号
   * @var string
   */
  protected $ref;
  /**
   * 订单金额
   * @var string
   */
  protected $pay;

  /**
  
   *  @var string $order_id
   */
  public function setOrderId($order_id)
  {
    $this->order_id = $order_id;
  }


  /**
  
   * @var string
   */
  public function getOrderId()
  {
    return $this->order_id;
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
}
