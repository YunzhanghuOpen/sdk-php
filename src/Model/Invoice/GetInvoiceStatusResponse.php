<?php

namespace Yzh\Model\Invoice;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 查询发票开具申请状态返回
 * Class GetInvoiceStatusResponse
 */
class GetInvoiceStatusResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return GetInvoiceStatusResponseData
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
        $this->data = new GetInvoiceStatusResponseData($data);
        return $this;
    }
}
