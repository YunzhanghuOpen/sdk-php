<?php

namespace Yzh\Model\Apiusersign;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 获取用户签约状态返回
 * Class GetApiUserSignStatusResponse
 */
class GetApiUserSignStatusResponse extends BaseResponse implements ResponseInterface
{
  /**
   * 获取数据对象
   * @return  GetApiUserSignStatusResponseData
   */
  public function getData()
  {
    return $this->data;
  }

  /**
   * 设置数据对象
   * @param  array $data
   * @return GetApiUserSignStatusResponseData
   */
  public function setData($data)
  {
    $this->data = new GetApiUserSignStatusResponseData($data);
    return $this;
  }
}
