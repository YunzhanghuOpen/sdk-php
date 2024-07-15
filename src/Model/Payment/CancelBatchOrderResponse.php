<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 批次撤销返回
 * Class CancelBatchOrderResponse
 */
class CancelBatchOrderResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return CancelBatchOrderResponseData
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
        $this->data = new CancelBatchOrderResponseData($data);
        return $this;
    }
}
