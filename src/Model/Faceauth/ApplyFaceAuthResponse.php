<?php

namespace Yzh\Model\Faceauth;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 申请人脸识别实名核验返回
 * Class ApplyFaceAuthResponse
 */
class ApplyFaceAuthResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return ApplyFaceAuthResponseData
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
        $this->data = new ApplyFaceAuthResponseData($data);
        return $this;
    }
}
