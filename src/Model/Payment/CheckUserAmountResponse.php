<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 用户结算金额校验返回
 * Class CheckUserAmountResponse
 */
class CheckUserAmountResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return CheckUserAmountResponseData
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
        $this->data = new CheckUserAmountResponseData($data);
        return $this;
    }
}
