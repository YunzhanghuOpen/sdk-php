<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 取消待支付订单返回
 * Class CancelOrderResponse
 */
class CancelOrderResponse extends BaseResponse implements ResponseInterface
{
  /**
   * 获取数据对象
   * @return  CancelOrderResponseData
   */
  public function getData()
  {
    return $this->data;
  }

  /**
   * 设置数据对象
   * @param  array $data
   * @return CancelOrderResponseData
   */
  public function setData($data)
  {
    $this->data = new CancelOrderResponseData($data);
    return $this;
  }
}
