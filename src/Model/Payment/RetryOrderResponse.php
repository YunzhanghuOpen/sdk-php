<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 重试挂起状态订单返回
 * Class RetryOrderResponse
 */
class RetryOrderResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return RetryOrderResponseData
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
        $this->data = new RetryOrderResponseData($data);
        return $this;
    }
}
