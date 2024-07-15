<?php

namespace Yzh\Model\Dataservice;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 查询日订单文件（支付和退款订单）返回
 * Class GetDailyOrderFileV2Response
 */
class GetDailyOrderFileV2Response extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return GetDailyOrderFileV2ResponseData
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
        $this->data = new GetDailyOrderFileV2ResponseData($data);
        return $this;
    }
}
