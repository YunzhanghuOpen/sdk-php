<?php

namespace Yzh\Model\Invoice;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 查询可开具发票额度和发票开具信息返回
 * Class GetInvoiceAmountResponse
 */
class GetInvoiceAmountResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return GetInvoiceAmountResponseData
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
        $this->data = new GetInvoiceAmountResponseData($data);
        return $this;
    }
}
