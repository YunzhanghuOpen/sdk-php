<?php

namespace Yzh\Model\Invoice;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 查询平台企业已开具和待开具发票金额返回
 * Class GetInvoiceStatResponseData
 */
class GetInvoiceStatResponseData extends BaseModel implements ResponseDataInterface
{
  /**
   * 平台企业 ID
   * @var string
   */
  protected $dealer_id;
  /**
   * 综合服务主体 ID
   * @var string
   */
  protected $broker_id;
  /**
   * 已开发票金额
   * @var string
   */
  protected $invoiced;
  /**
   * 开票中发票金额
   * @var string
   */
  protected $invoicing;
  /**
   * 待开发票金额
   * @var string
   */
  protected $not_invoiced;

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
   * 已开发票金额
   *  @var string $invoiced
   */
  public function setInvoiced($invoiced)
  {
    $this->invoiced = $invoiced;
  }


  /**
   * 已开发票金额
   * @var string
   */
  public function getInvoiced()
  {
    return $this->invoiced;
  }

  /**
   * 开票中发票金额
   *  @var string $invoicing
   */
  public function setInvoicing($invoicing)
  {
    $this->invoicing = $invoicing;
  }


  /**
   * 开票中发票金额
   * @var string
   */
  public function getInvoicing()
  {
    return $this->invoicing;
  }

  /**
   * 待开发票金额
   *  @var string $not_invoiced
   */
  public function setNotInvoiced($not_invoiced)
  {
    $this->not_invoiced = $not_invoiced;
  }


  /**
   * 待开发票金额
   * @var string
   */
  public function getNotInvoiced()
  {
    return $this->not_invoiced;
  }
}
