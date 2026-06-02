<?php

namespace Yzh\Model\Faceauth;

use Yzh\Model\BaseModel;

/**
 * 人脸识别实名核验失败详情
 * Class FaceAuthDetail
 */
class FaceAuthDetail extends BaseModel
{
    /**
     * 实名核验失败原因
     * @var string
     */
    protected $fail_reason;

    /**
     * 实名核验失败原因
     * @var string $fail_reason
     */
    public function setFailReason($fail_reason)
    {
        $this->fail_reason = $fail_reason;
    }

    /**
     * 实名核验失败原因
     * @return string
     */
    public function getFailReason()
    {
        return $this->fail_reason;
    }
}
