<?php

namespace Yzh\Model\Realname;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 
 * Class CollectRealNameInfoResponse
 */
class CollectRealNameInfoResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return CollectRealNameInfoResponseData
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
        $this->data = new CollectRealNameInfoResponseData($data);
        return $this;
    }
}
