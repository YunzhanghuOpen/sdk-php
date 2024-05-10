<?php

namespace Yzh\Model\Bizlicgxv2h5api;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 工商实名信息录入返回
 * Class GxV2H5APIPreCollectBizlicMsgResponse
 */
class GxV2H5APIPreCollectBizlicMsgResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return  GxV2H5APIPreCollectBizlicMsgResponseData
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
        $this->data = new GxV2H5APIPreCollectBizlicMsgResponseData($data);
        return $this;
    }
}
