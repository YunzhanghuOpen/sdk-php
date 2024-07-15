<?php

namespace Yzh\Model\Authentication;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 银行卡三要素验证返回
 * Class BankCardThreeVerifyResponse
 */
class BankCardThreeVerifyResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return BankCardThreeVerifyResponseData
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
        $this->data = new BankCardThreeVerifyResponseData($data);
        return $this;
    }
}
