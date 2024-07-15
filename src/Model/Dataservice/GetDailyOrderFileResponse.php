<?php

namespace Yzh\Model\Dataservice;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 查询日订单文件返回
 * Class GetDailyOrderFileResponse
 */
class GetDailyOrderFileResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return GetDailyOrderFileResponseData
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
        $this->data = new GetDailyOrderFileResponseData($data);
        return $this;
    }
}
