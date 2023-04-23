<?php

namespace Yzh\Model\Bizlicxjjh5api;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 预启动返回
 * Class H5APIGetStartUrlResponse
 */
class H5APIGetStartUrlResponse extends BaseResponse implements ResponseInterface
{
  /**
   * 获取数据对象
   * @return  H5APIGetStartUrlResponseData
   */
  public function getData()
  {
    return $this->data;
  }

  /**
   * 设置数据对象
   * @param  array $data
   * @return H5APIGetStartUrlResponseData
   */
  public function setData($data)
  {
    $this->data = new H5APIGetStartUrlResponseData($data);
    return $this;
  }
}
