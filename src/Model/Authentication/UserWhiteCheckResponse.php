<?php

namespace Yzh\Model\Authentication;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 查看用户是否在非居民身份证验证名单中返回
 * Class UserWhiteCheckResponse
 */
class UserWhiteCheckResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return UserWhiteCheckResponseData
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
        $this->data = new UserWhiteCheckResponseData($data);
        return $this;
    }
}
