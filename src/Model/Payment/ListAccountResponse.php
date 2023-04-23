<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 查询平台企业余额返回
 * Class ListAccountResponse
 */
class ListAccountResponse extends BaseResponse implements ResponseInterface
{
  /**
   * 获取数据对象
   * @return  ListAccountResponseData
   */
  public function getData()
  {
    return $this->data;
  }

  /**
   * 设置数据对象
   * @param  array $data
   * @return ListAccountResponseData
   */
  public function setData($data)
  {
    $this->data = new ListAccountResponseData($data);
    return $this;
  }
}
