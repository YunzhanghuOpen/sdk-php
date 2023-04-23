<?php

namespace Yzh\Model\Apiusersign;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 获取协议预览 URL 返回 V2
 * Class ApiUserSignContractResponse
 */
class ApiUserSignContractResponse extends BaseResponse implements ResponseInterface
{
  /**
   * 获取数据对象
   * @return  ApiUserSignContractResponseData
   */
  public function getData()
  {
    return $this->data;
  }

  /**
   * 设置数据对象
   * @param  array $data
   * @return ApiUserSignContractResponseData
   */
  public function setData($data)
  {
    $this->data = new ApiUserSignContractResponseData($data);
    return $this;
  }
}
