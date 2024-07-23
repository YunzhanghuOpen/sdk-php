<?php

namespace Yzh\Model\Authentication;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 上传非居民身份证验证名单信息返回
 * Class UserExemptedInfoResponse
 */
class UserExemptedInfoResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return UserExemptedInfoResponseData
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
        $this->data = new UserExemptedInfoResponseData($data);
        return $this;
    }
}
