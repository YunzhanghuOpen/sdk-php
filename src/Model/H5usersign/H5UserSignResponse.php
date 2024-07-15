<?php

namespace Yzh\Model\H5usersign;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 申请签约返回
 * Class H5UserSignResponse
 */
class H5UserSignResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return H5UserSignResponseData
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
        $this->data = new H5UserSignResponseData($data);
        return $this;
    }
}
