<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 查询单笔订单信息返回
 * Class GetOrderResponse
 */
class GetOrderResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return GetOrderResponseData
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
        $this->data = new GetOrderResponseData($data);
        return $this;
    }
}
