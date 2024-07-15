<?php

namespace Yzh\Model\Bizlicxjjh5;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 查询个体工商户状态返回
 * Class H5EcoCityAicStatusResponse
 */
class H5EcoCityAicStatusResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return H5EcoCityAicStatusResponseData
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
        $this->data = new H5EcoCityAicStatusResponseData($data);
        return $this;
    }
}
