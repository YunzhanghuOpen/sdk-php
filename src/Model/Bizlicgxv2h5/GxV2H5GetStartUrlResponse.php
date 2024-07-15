<?php

namespace Yzh\Model\Bizlicgxv2h5;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 预启动返回
 * Class GxV2H5GetStartUrlResponse
 */
class GxV2H5GetStartUrlResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return GxV2H5GetStartUrlResponseData
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
        $this->data = new GxV2H5GetStartUrlResponseData($data);
        return $this;
    }
}
