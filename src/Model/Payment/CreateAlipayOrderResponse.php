<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 支付宝实时支付返回
 * Class CreateAlipayOrderResponse
 */
class CreateAlipayOrderResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return CreateAlipayOrderResponseData
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
        $this->data = new CreateAlipayOrderResponseData($data);
        return $this;
    }
}
