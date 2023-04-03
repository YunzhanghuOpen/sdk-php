<?php

namespace Yzh\Model\Apiusersign;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 用户解约（测试账号专用接口）返回
 * Class ApiUserSignReleaseResponse
 */
class ApiUserSignReleaseResponse extends BaseResponse implements ResponseInterface
{
  /**
   * 获取数据对象
   * @return  ApiUserSignReleaseResponseData
   */
  public function getData()
  {
    return $this->data;
  }

  /**
   * 设置数据对象
   * @param  array $data
   * @return ApiUserSignReleaseResponseData
   */
  public function setData($data)
  {
    $this->data = new ApiUserSignReleaseResponseData($data);
    return $this;
  }
}
