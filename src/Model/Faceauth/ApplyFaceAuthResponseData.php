<?php

namespace Yzh\Model\Faceauth;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 申请人脸识别实名核验返回
 * Class ApplyFaceAuthResponseData
 */
class ApplyFaceAuthResponseData extends BaseModel implements ResponseDataInterface
{
    /**
     * 人脸识别实名核验唯一 ID
     * @var string
     */
    protected $record_id;
    /**
     * 平台企业实名核验 ID
     * @var string
     */
    protected $verification_id;
    /**
     * 人脸识别实名核验 H5 页面地址
     * @var string
     */
    protected $verification_url;

    /**
     * 人脸识别实名核验唯一 ID
     * @var string $record_id
     */
    public function setRecordId($record_id)
    {
        $this->record_id = $record_id;
    }

    /**
     * 人脸识别实名核验唯一 ID
     * @return string
     */
    public function getRecordId()
    {
        return $this->record_id;
    }

    /**
     * 平台企业实名核验 ID
     * @var string $verification_id
     */
    public function setVerificationId($verification_id)
    {
        $this->verification_id = $verification_id;
    }

    /**
     * 平台企业实名核验 ID
     * @return string
     */
    public function getVerificationId()
    {
        return $this->verification_id;
    }

    /**
     * 人脸识别实名核验 H5 页面地址
     * @var string $verification_url
     */
    public function setVerificationUrl($verification_url)
    {
        $this->verification_url = $verification_url;
    }

    /**
     * 人脸识别实名核验 H5 页面地址
     * @return string
     */
    public function getVerificationUrl()
    {
        return $this->verification_url;
    }
}
