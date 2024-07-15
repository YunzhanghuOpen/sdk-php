<?php

namespace Yzh\Model\Uploadusersign;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 获取用户签约状态返回
 * Class GetUploadUserSignStatusResponse
 */
class GetUploadUserSignStatusResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return GetUploadUserSignStatusResponseData
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
        $this->data = new GetUploadUserSignStatusResponseData($data);
        return $this;
    }
}
