<?php

namespace Yzh\Model\Dataservice;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 查询日订单汇总数据返回
 * Class ListDailyOrderSummaryResponse
 */
class ListDailyOrderSummaryResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return ListDailyOrderSummaryResponseData
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
        $this->data = new ListDailyOrderSummaryResponseData($data);
        return $this;
    }
}
