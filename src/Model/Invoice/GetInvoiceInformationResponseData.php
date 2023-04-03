<?php

namespace Yzh\Model\Invoice;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 查询发票信息返回
 * Class GetInvoiceInformationResponseData
 */
class GetInvoiceInformationResponseData extends BaseModel implements ResponseDataInterface
{
  /**
   * 发票信息
   * @var InformationDataInfo[]
   */
  protected $information;

  /**
   * @var array $items
   */
  public function setInformation($items)
  {
      $this->information = array();
      foreach ($items as $k => $v) {
          array_push($this->information, new InformationDataInfo($v));
      }
  }


  /**
   * 发票信息
   * @var InformationDataInfo[]
   */
  public function getInformation()
  {
    return $this->information;
  }
}
