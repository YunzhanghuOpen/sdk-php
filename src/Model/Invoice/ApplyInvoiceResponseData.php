<?php

namespace Yzh\Model\Invoice;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 发票开具申请返回
 * Class ApplyInvoiceResponseData
 */
class ApplyInvoiceResponseData extends BaseModel implements ResponseDataInterface
{
  /**
   * 发票申请单 ID
   * @var string
   */
  protected $application_id;
  /**
   * 发票张数
   * @var int64
   */
  protected $count;

  /**
   * 发票申请单 ID
   *  @var string $application_id
   */
  public function setApplicationId($application_id)
  {
    $this->application_id = $application_id;
  }


  /**
   * 发票申请单 ID
   * @var string
   */
  public function getApplicationId()
  {
    return $this->application_id;
  }

  /**
   * 发票张数
   *  @var int64 $count
   */
  public function setCount($count)
  {
    $this->count = $count;
  }


  /**
   * 发票张数
   * @var int64
   */
  public function getCount()
  {
    return $this->count;
  }
}
