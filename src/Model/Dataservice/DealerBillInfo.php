<?php

namespace Yzh\Model\Dataservice;

use Yzh\Model\BaseModel;

/**
 * 流水详情
 * Class DealerBillInfo
 */
class DealerBillInfo extends BaseModel
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
   * 平台企业订单号
   * @var string
   */
  protected $order_id;
  /**
   * 资金流水号
   * @var string
   */
  protected $ref;
  /**
   * 综合服务主体名称
   * @var string
   */
  protected $broker_product_name;
  /**
   * 平台企业名称
   * @var string
   */
  protected $dealer_product_name;
  /**
   * 业务订单流水号
   * @var string
   */
  protected $biz_ref;
  /**
   * 账户类型
   * @var string
   */
  protected $acct_type;
  /**
   * 入账金额
   * @var string
   */
  protected $amount;
  /**
   * 账户余额
   * @var string
   */
  protected $balance;
  /**
   * 业务分类
   * @var string
   */
  protected $business_category;
  /**
   * 业务类型
   * @var string
   */
  protected $business_type;
  /**
   * 收支类型
   * @var string
   */
  protected $consumption_type;
  /**
   * 入账时间
   * @var string
   */
  protected $created_at;
  /**
   * 备注
   * @var string
   */
  protected $remark;
  
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
   * 资金流水号
   *  @var string $ref
   */
  public function setRef($ref)
  {
    $this->ref = $ref;
  }


  /**
   * 资金流水号
   * @var string
   */
  public function getRef()
  {
    return $this->ref;
  }
  
  /**
   * 综合服务主体名称
   *  @var string $broker_product_name
   */
  public function setBrokerProductName($broker_product_name)
  {
    $this->broker_product_name = $broker_product_name;
  }


  /**
   * 综合服务主体名称
   * @var string
   */
  public function getBrokerProductName()
  {
    return $this->broker_product_name;
  }
  
  /**
   * 平台企业名称
   *  @var string $dealer_product_name
   */
  public function setDealerProductName($dealer_product_name)
  {
    $this->dealer_product_name = $dealer_product_name;
  }


  /**
   * 平台企业名称
   * @var string
   */
  public function getDealerProductName()
  {
    return $this->dealer_product_name;
  }
  
  /**
   * 业务订单流水号
   *  @var string $biz_ref
   */
  public function setBizRef($biz_ref)
  {
    $this->biz_ref = $biz_ref;
  }


  /**
   * 业务订单流水号
   * @var string
   */
  public function getBizRef()
  {
    return $this->biz_ref;
  }
  
  /**
   * 账户类型
   *  @var string $acct_type
   */
  public function setAcctType($acct_type)
  {
    $this->acct_type = $acct_type;
  }


  /**
   * 账户类型
   * @var string
   */
  public function getAcctType()
  {
    return $this->acct_type;
  }
  
  /**
   * 入账金额
   *  @var string $amount
   */
  public function setAmount($amount)
  {
    $this->amount = $amount;
  }


  /**
   * 入账金额
   * @var string
   */
  public function getAmount()
  {
    return $this->amount;
  }
  
  /**
   * 账户余额
   *  @var string $balance
   */
  public function setBalance($balance)
  {
    $this->balance = $balance;
  }


  /**
   * 账户余额
   * @var string
   */
  public function getBalance()
  {
    return $this->balance;
  }
  
  /**
   * 业务分类
   *  @var string $business_category
   */
  public function setBusinessCategory($business_category)
  {
    $this->business_category = $business_category;
  }


  /**
   * 业务分类
   * @var string
   */
  public function getBusinessCategory()
  {
    return $this->business_category;
  }
  
  /**
   * 业务类型
   *  @var string $business_type
   */
  public function setBusinessType($business_type)
  {
    $this->business_type = $business_type;
  }


  /**
   * 业务类型
   * @var string
   */
  public function getBusinessType()
  {
    return $this->business_type;
  }
  
  /**
   * 收支类型
   *  @var string $consumption_type
   */
  public function setConsumptionType($consumption_type)
  {
    $this->consumption_type = $consumption_type;
  }


  /**
   * 收支类型
   * @var string
   */
  public function getConsumptionType()
  {
    return $this->consumption_type;
  }
  
  /**
   * 入账时间
   *  @var string $created_at
   */
  public function setCreatedAt($created_at)
  {
    $this->created_at = $created_at;
  }


  /**
   * 入账时间
   * @var string
   */
  public function getCreatedAt()
  {
    return $this->created_at;
  }
  
  /**
   * 备注
   *  @var string $remark
   */
  public function setRemark($remark)
  {
    $this->remark = $remark;
  }


  /**
   * 备注
   * @var string
   */
  public function getRemark()
  {
    return $this->remark;
  }
}
