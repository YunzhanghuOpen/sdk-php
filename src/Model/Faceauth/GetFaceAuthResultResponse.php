<?php

namespace Yzh\Model\Faceauth;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 查询人脸识别实名核验结果返回
 * Class GetFaceAuthResultResponse
 */
class GetFaceAuthResultResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return GetFaceAuthResultResponseData
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
        $this->data = new GetFaceAuthResultResponseData($data);
        return $this;
    }
}
