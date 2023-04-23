<?php

namespace Yzh\Model\Invoice;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 下载 PDF 版发票返回
 * Class GetInvoiceFileResponseData
 */
class GetInvoiceFileResponseData extends BaseModel implements ResponseDataInterface
{
  /**
   * 下载地址
   * @var string
   */
  protected $url;
  /**
   * 文件名称
   * @var string
   */
  protected $name;

  /**
   * 下载地址
   *  @var string $url
   */
  public function setUrl($url)
  {
    $this->url = $url;
  }


  /**
   * 下载地址
   * @var string
   */
  public function getUrl()
  {
    return $this->url;
  }

  /**
   * 文件名称
   *  @var string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }


  /**
   * 文件名称
   * @var string
   */
  public function getName()
  {
    return $this->name;
  }
}
