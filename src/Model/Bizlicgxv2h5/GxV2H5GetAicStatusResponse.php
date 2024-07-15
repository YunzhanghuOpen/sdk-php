<?php

namespace Yzh\Model\Bizlicgxv2h5;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 查询个体工商户状态返回
 * Class GxV2H5GetAicStatusResponse
 */
class GxV2H5GetAicStatusResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return GxV2H5GetAicStatusResponseData
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
        $this->data = new GxV2H5GetAicStatusResponseData($data);
        return $this;
    }
}
