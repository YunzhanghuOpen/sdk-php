<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 微信实时支付返回
 * Class CreateWxpayOrderResponse
 */
class CreateWxpayOrderResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return CreateWxpayOrderResponseData
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
        $this->data = new CreateWxpayOrderResponseData($data);
        return $this;
    }
}
