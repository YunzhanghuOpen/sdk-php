<?php

namespace Yzh\Model\Tax;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 下载个人所得税扣缴明细表返回
 * Class GetTaxFileResponse
 */
class GetTaxFileResponse extends BaseResponse implements ResponseInterface
{
  /**
   * 获取数据对象
   * @return  GetTaxFileResponseData
   */
  public function getData()
  {
    return $this->data;
  }

  /**
   * 设置数据对象
   * @param  array $data
   * @return GetTaxFileResponseData
   */
  public function setData($data)
  {
    $this->data = new GetTaxFileResponseData($data);
    return $this;
  }
}
