<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 批次下单返回
 * Class CreateBatchOrderResponseData
 */
class CreateBatchOrderResponseData extends BaseModel implements ResponseDataInterface
{
  /**
   * 平台企业批次号
   * @var string
   */
  protected $batch_id;
  /**
   * 订单结果列表
   * @var BatchOrderResult[]
   */
  protected $result_list;

  /**
   * 平台企业批次号
   *  @var string $batch_id
   */
  public function setBatchId($batch_id)
  {
    $this->batch_id = $batch_id;
  }


  /**
   * 平台企业批次号
   * @var string
   */
  public function getBatchId()
  {
    return $this->batch_id;
  }

  /**
   * @var array $items
   */
  public function setResultList($items)
  {
      $this->result_list = array();
      foreach ($items as $k => $v) {
          array_push($this->result_list, new BatchOrderResult($v));
      }
  }


  /**
   * 订单结果列表
   * @var BatchOrderResult[]
   */
  public function getResultList()
  {
    return $this->result_list;
  }
}
