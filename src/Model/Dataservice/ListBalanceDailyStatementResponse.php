<?php

namespace Yzh\Model\Dataservice;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 查询余额日账单数据返回
 * Class ListBalanceDailyStatementResponse
 */
class ListBalanceDailyStatementResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return ListBalanceDailyStatementResponseData
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
        $this->data = new ListBalanceDailyStatementResponseData($data);
        return $this;
    }
}
