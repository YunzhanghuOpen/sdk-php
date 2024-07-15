<?php

namespace Yzh\Model\Invoice;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 查询发票信息返回
 * Class GetInvoiceInformationResponse
 */
class GetInvoiceInformationResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return GetInvoiceInformationResponseData
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
        $this->data = new GetInvoiceInformationResponseData($data);
        return $this;
    }
}
