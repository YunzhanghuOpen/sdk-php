<?php

namespace Yzh\Model\Authentication;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 银行卡四要素确认请求（上传短信验证码）返回
 * Class BankCardFourAuthConfirmResponse
 */
class BankCardFourAuthConfirmResponse extends BaseResponse implements ResponseInterface
{
  /**
   * 获取数据对象
   * @return  BankCardFourAuthConfirmResponseData
   */
  public function getData()
  {
    return $this->data;
  }

  /**
   * 设置数据对象
   * @param  array $data
   * @return BankCardFourAuthConfirmResponseData
   */
  public function setData($data)
  {
    $this->data = new BankCardFourAuthConfirmResponseData($data);
    return $this;
  }
}
