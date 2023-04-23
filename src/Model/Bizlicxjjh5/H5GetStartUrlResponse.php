<?php

namespace Yzh\Model\Bizlicxjjh5;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 预启动返回
 * Class H5GetStartUrlResponse
 */
class H5GetStartUrlResponse extends BaseResponse implements ResponseInterface
{
  /**
   * 获取数据对象
   * @return  H5GetStartUrlResponseData
   */
  public function getData()
  {
    return $this->data;
  }

  /**
   * 设置数据对象
   * @param  array $data
   * @return H5GetStartUrlResponseData
   */
  public function setData($data)
  {
    $this->data = new H5GetStartUrlResponseData($data);
    return $this;
  }
}
