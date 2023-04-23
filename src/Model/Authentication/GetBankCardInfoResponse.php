<?php

namespace Yzh\Model\Authentication;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 银行卡信息查询返回
 * Class GetBankCardInfoResponse
 */
class GetBankCardInfoResponse extends BaseResponse implements ResponseInterface
{
  /**
   * 获取数据对象
   * @return  GetBankCardInfoResponseData
   */
  public function getData()
  {
    return $this->data;
  }

  /**
   * 设置数据对象
   * @param  array $data
   * @return GetBankCardInfoResponseData
   */
  public function setData($data)
  {
    $this->data = new GetBankCardInfoResponseData($data);
    return $this;
  }
}
