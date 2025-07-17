<?php

namespace Yzh\Model\UserCollect;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 获取收集手机号码页面返回
 * Class GetUserCollectPhoneURLResponse
 */
class GetUserCollectPhoneURLResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return GetUserCollectPhoneURLResponseData
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
        $this->data = new GetUserCollectPhoneURLResponseData($data);
        return $this;
    }
}
