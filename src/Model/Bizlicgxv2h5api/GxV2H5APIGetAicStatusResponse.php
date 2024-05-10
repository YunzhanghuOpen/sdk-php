<?php

namespace Yzh\Model\Bizlicgxv2h5api;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 查询个体工商户状态返回
 * Class GxV2H5APIGetAicStatusResponse
 */
class GxV2H5APIGetAicStatusResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return  GxV2H5APIGetAicStatusResponseData
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
        $this->data = new GxV2H5APIGetAicStatusResponseData($data);
        return $this;
    }
}
