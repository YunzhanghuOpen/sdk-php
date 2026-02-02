<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 取消批次中单笔订单返回
 * Class CancelOrderInBatchResponse
 */
class CancelOrderInBatchResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return CancelOrderInBatchResponseData
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
        $this->data = new CancelOrderInBatchResponseData($data);
        return $this;
    }
}
