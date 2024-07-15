<?php

namespace Yzh\Model\H5usersign;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 用户解约（测试账号专用接口）返回
 * Class H5UserReleaseResponse
 */
class H5UserReleaseResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return H5UserReleaseResponseData
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
        $this->data = new H5UserReleaseResponseData($data);
        return $this;
    }
}
