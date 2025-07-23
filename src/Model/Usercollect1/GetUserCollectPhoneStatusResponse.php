<?php

namespace Yzh\Model\UserCollect;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 查询手机号码绑定状态返回
 * Class GetUserCollectPhoneStatusResponse
 */
class GetUserCollectPhoneStatusResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return GetUserCollectPhoneStatusResponseData
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
        $this->data = new GetUserCollectPhoneStatusResponseData($data);
        return $this;
    }
}
