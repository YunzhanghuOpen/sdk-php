<?php

namespace Yzh\Model\Authentication;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 银行卡四要素鉴权请求（下发短信验证码）返回
 * Class BankCardFourAuthVerifyResponse
 */
class BankCardFourAuthVerifyResponse extends BaseResponse implements ResponseInterface
{
  /**
   * 获取数据对象
   * @return  BankCardFourAuthVerifyResponseData
   */
  public function getData()
  {
    return $this->data;
  }

  /**
   * 设置数据对象
   * @param  array $data
   * @return BankCardFourAuthVerifyResponseData
   */
  public function setData($data)
  {
    $this->data = new BankCardFourAuthVerifyResponseData($data);
    return $this;
  }
}
