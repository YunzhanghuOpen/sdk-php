<?php

namespace Yzh\Model\H5usersign;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 申请签约返回
 * Class H5UserSignResponseData
 */
class H5UserSignResponseData extends BaseModel implements ResponseDataInterface
{
  /**
   * H5 签约页面 URL
   * @var string
   */
  protected $url;

  /**
   * H5 签约页面 URL
   *  @var string $url
   */
  public function setUrl($url)
  {
    $this->url = $url;
  }


  /**
   * H5 签约页面 URL
   * @var string
   */
  public function getUrl()
  {
    return $this->url;
  }
}
