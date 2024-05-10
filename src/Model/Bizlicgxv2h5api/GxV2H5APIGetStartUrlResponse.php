<?php

namespace Yzh\Model\Bizlicgxv2h5api;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 预启动返回
 * Class GxV2H5APIGetStartUrlResponse
 */
class GxV2H5APIGetStartUrlResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return  GxV2H5APIGetStartUrlResponseData
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
        $this->data = new GxV2H5APIGetStartUrlResponseData($data);
        return $this;
    }
}
