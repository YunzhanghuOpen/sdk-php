<?php

namespace Yzh\Model\Dataservice;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 查询日订单数据返回
 * Class ListDailyOrderResponse
 */
class ListDailyOrderResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return ListDailyOrderResponseData
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
        $this->data = new ListDailyOrderResponseData($data);
        return $this;
    }
}
