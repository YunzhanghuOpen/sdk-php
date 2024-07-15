<?php

namespace Yzh\Model\Invoice;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 下载 PDF 版发票返回
 * Class GetInvoiceFileResponse
 */
class GetInvoiceFileResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return GetInvoiceFileResponseData
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
        $this->data = new GetInvoiceFileResponseData($data);
        return $this;
    }
}
