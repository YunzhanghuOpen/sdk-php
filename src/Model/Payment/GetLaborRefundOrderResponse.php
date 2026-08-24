<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 查询劳动者退款订单信息返回
 * Class GetLaborRefundOrderResponse
 */
class GetLaborRefundOrderResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return GetLaborRefundOrderResponseData
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
        $this->data = new GetLaborRefundOrderResponseData($data);
        return $this;
    }
}

