<?php

namespace Yzh\Model\Dataservice;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 查询月订单汇总数据返回
 * Class ListMonthlyOrderSummaryResponse
 */
class ListMonthlyOrderSummaryResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return ListMonthlyOrderSummaryResponseData
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
        $this->data = new ListMonthlyOrderSummaryResponseData($data);
        return $this;
    }
}
