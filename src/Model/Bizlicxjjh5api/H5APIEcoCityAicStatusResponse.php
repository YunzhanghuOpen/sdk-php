<?php

namespace Yzh\Model\Bizlicxjjh5api;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 查询个体工商户状态返回
 * Class H5APIEcoCityAicStatusResponse
 */
class H5APIEcoCityAicStatusResponse extends BaseResponse implements ResponseInterface
{
  /**
   * 获取数据对象
   * @return  H5APIEcoCityAicStatusResponseData
   */
  public function getData()
  {
    return $this->data;
  }

  /**
   * 设置数据对象
   * @param  array $data
   * @return H5APIEcoCityAicStatusResponseData
   */
  public function setData($data)
  {
    $this->data = new H5APIEcoCityAicStatusResponseData($data);
    return $this;
  }
}
