<?php

namespace Yzh\Model\Dataservice;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 查询日订单数据（支付和退款订单）返回
 * Class ListDailyOrderV2Response
 */
class ListDailyOrderV2Response extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return ListDailyOrderV2ResponseData
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
        $this->data = new ListDailyOrderV2ResponseData($data);
        return $this;
    }
}
