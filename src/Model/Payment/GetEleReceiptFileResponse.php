<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 查询电子回单返回
 * Class GetEleReceiptFileResponse
 */
class GetEleReceiptFileResponse extends BaseResponse implements ResponseInterface
{
  /**
   * 获取数据对象
   * @return  GetEleReceiptFileResponseData
   */
  public function getData()
  {
    return $this->data;
  }

  /**
   * 设置数据对象
   * @param  array $data
   * @return GetEleReceiptFileResponseData
   */
  public function setData($data)
  {
    $this->data = new GetEleReceiptFileResponseData($data);
    return $this;
  }
}
