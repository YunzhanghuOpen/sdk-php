<?php

namespace Yzh\Model\Apiusersign;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 用户签约返回
 * Class ApiUserSignResponse
 */
class ApiUserSignResponse extends BaseResponse implements ResponseInterface
{
  /**
   * 获取数据对象
   * @return  ApiUserSignResponseData
   */
  public function getData()
  {
    return $this->data;
  }

  /**
   * 设置数据对象
   * @param  array $data
   * @return ApiUserSignResponseData
   */
  public function setData($data)
  {
    $this->data = new ApiUserSignResponseData($data);
    return $this;
  }
}
