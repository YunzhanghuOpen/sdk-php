<?php

namespace Yzh\Model\Dataservice;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 查询日流水数据返回
 * Class ListDailyBillResponse
 */
class ListDailyBillResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return ListDailyBillResponseData
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
        $this->data = new ListDailyBillResponseData($data);
        return $this;
    }
}
