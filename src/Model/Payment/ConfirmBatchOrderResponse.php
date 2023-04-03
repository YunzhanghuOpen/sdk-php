<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 批次确认响应
 * Class ConfirmBatchOrderResponse
 */
class ConfirmBatchOrderResponse extends BaseResponse implements ResponseInterface
{
  /**
   * 获取数据对象
   * @return  ConfirmBatchOrderResponseData
   */
  public function getData()
  {
    return $this->data;
  }

  /**
   * 设置数据对象
   * @param  array $data
   * @return ConfirmBatchOrderResponseData
   */
  public function setData($data)
  {
    $this->data = new ConfirmBatchOrderResponseData($data);
    return $this;
  }
}
