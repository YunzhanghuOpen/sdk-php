<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 用户结算金额校验返回
 * Class RiskCheckAmountResponse
 */
class RiskCheckAmountResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return RiskCheckAmountResponseData
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
        $this->data = new RiskCheckAmountResponseData($data);
        return $this;
    }
}
