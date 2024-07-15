<?php

namespace Yzh\Model\Authentication;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 身份证实名验证返回
 * Class IDCardVerifyResponse
 */
class IDCardVerifyResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return IDCardVerifyResponseData
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
        $this->data = new IDCardVerifyResponseData($data);
        return $this;
    }
}
