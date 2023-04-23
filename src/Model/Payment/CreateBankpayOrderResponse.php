<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 银行卡实时支付返回
 * Class CreateBankpayOrderResponse
 */
class CreateBankpayOrderResponse extends BaseResponse implements ResponseInterface
{
  /**
   * 获取数据对象
   * @return  CreateBankpayOrderResponseData
   */
  public function getData()
  {
    return $this->data;
  }

  /**
   * 设置数据对象
   * @param  array $data
   * @return CreateBankpayOrderResponseData
   */
  public function setData($data)
  {
    $this->data = new CreateBankpayOrderResponseData($data);
    return $this;
  }
}
