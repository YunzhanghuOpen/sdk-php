<?php

namespace Yzh\Model\Invoice;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 查询平台企业已开具和待开具发票金额返回
 * Class GetInvoiceStatResponse
 */
class GetInvoiceStatResponse extends BaseResponse implements ResponseInterface
{
  /**
   * 获取数据对象
   * @return  GetInvoiceStatResponseData
   */
  public function getData()
  {
    return $this->data;
  }

  /**
   * 设置数据对象
   * @param  array $data
   * @return GetInvoiceStatResponseData
   */
  public function setData($data)
  {
    $this->data = new GetInvoiceStatResponseData($data);
    return $this;
  }
}
