<?php

namespace Yzh\Model\Authentication;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 银行卡四要素验证返回
 * Class BankCardFourVerifyResponse
 */
class BankCardFourVerifyResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return BankCardFourVerifyResponseData
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
        $this->data = new BankCardFourVerifyResponseData($data);
        return $this;
    }
}
