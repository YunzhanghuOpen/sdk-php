<?php

namespace Yzh\Model\Invoice;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 发票开具申请返回
 * Class ApplyInvoiceResponse
 */
class ApplyInvoiceResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return ApplyInvoiceResponseData
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * 设置数据对象
     * @param array $data
     * @return self
     */
    public function setData($data)
    {
        $this->data = new ApplyInvoiceResponseData($data);
        return $this;
    }
}
