<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 查询批次订单信息返回
 * Class QueryBatchOrderResponse
 */
class QueryBatchOrderResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return  QueryBatchOrderResponseData
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
        $this->data = new QueryBatchOrderResponseData($data);
        return $this;
    }
}
