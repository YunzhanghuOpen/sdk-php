<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 批次下单返回
 * Class CreateBatchOrderResponse
 */
class CreateBatchOrderResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return CreateBatchOrderResponseData
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
        $this->data = new CreateBatchOrderResponseData($data);
        return $this;
    }
}
