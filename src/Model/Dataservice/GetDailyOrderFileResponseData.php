<?php

namespace Yzh\Model\Dataservice;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 查询日订单文件返回
 * Class GetDailyOrderFileResponseData
 */
class GetDailyOrderFileResponseData extends BaseModel implements ResponseDataInterface
{
  /**
   * 下载地址
   * @var string
   */
  protected $order_download_url;

  /**
   * 下载地址
   *  @var string $order_download_url
   */
  public function setOrderDownloadUrl($order_download_url)
  {
    $this->order_download_url = $order_download_url;
  }


  /**
   * 下载地址
   * @var string
   */
  public function getOrderDownloadUrl()
  {
    return $this->order_download_url;
  }
}
