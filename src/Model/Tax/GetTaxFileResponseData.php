<?php

namespace Yzh\Model\Tax;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 下载个人所得税扣缴明细表返回
 * Class GetTaxFileResponseData
 */
class GetTaxFileResponseData extends BaseModel implements ResponseDataInterface
{
  /**
   * 文件详情
   * @var FileInfo[]
   */
  protected $file_info;

  /**
   * @var array $items
   */
  public function setFileInfo($items)
  {
      $this->file_info = array();
      foreach ($items as $k => $v) {
          array_push($this->file_info, new FileInfo($v));
      }
  }


  /**
   * 文件详情
   * @var FileInfo[]
   */
  public function getFileInfo()
  {
    return $this->file_info;
  }
}
