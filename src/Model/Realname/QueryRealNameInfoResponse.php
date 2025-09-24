<?php

namespace Yzh\Model\Realname;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 
 * Class QueryRealNameInfoResponse
 */
class QueryRealNameInfoResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return QueryRealNameInfoResponseData
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
        $this->data = new QueryRealNameInfoResponseData($data);
        return $this;
    }
}
