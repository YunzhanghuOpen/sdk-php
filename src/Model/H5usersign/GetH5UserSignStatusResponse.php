<?php

namespace Yzh\Model\H5usersign;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 获取用户签约状态返回
 * Class GetH5UserSignStatusResponse
 */
class GetH5UserSignStatusResponse extends BaseResponse implements ResponseInterface
{
  /**
   * 获取数据对象
   * @return  GetH5UserSignStatusResponseData
   */
  public function getData()
  {
    return $this->data;
  }

  /**
   * 设置数据对象
   * @param  array $data
   * @return GetH5UserSignStatusResponseData
   */
  public function setData($data)
  {
    $this->data = new GetH5UserSignStatusResponseData($data);
    return $this;
  }
}
