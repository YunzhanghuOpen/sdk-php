<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 查询劳务模式单笔订单信息返回
 * Class GetOrderLxlwResponse
 */
class GetOrderLxlwResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return GetOrderLxlwResponseData
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
        $this->data = new GetOrderLxlwResponseData($data);
        return $this;
    }
}
