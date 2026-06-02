<?php

namespace Yzh\Model\Faceauth;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 查询人脸识别实名核验结果返回
 * Class GetFaceAuthResultResponseData
 */
class GetFaceAuthResultResponseData extends BaseModel implements ResponseDataInterface
{
    /**
     * 姓名
     * @var string
     */
    protected $real_name;
    /**
     * 身份证号码
     * @var string
     */
    protected $id_card;
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
     * 实名核验状态
     * @var string
     */
    protected $status;
    /**
     * 实名核验完成时间
     * @var string
     */
    protected $verify_time;
    /**
     * 实名核验失败详情
     * @var FaceAuthDetail
     */
    protected $detail;

    /**
     * 姓名
     * @var string $real_name
     */
    public function setRealName($real_name)
    {
        $this->real_name = $real_name;
    }

    /**
     * 姓名
     * @return string
     */
    public function getRealName()
    {
        return $this->real_name;
    }

    /**
     * 身份证号码
     * @var string $id_card
     */
    public function setIdCard($id_card)
    {
        $this->id_card = $id_card;
    }

    /**
     * 身份证号码
     * @return string
     */
    public function getIdCard()
    {
        return $this->id_card;
    }

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
     * 实名核验状态
     * @var string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * 实名核验状态
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * 实名核验完成时间
     * @var string $verify_time
     */
    public function setVerifyTime($verify_time)
    {
        $this->verify_time = $verify_time;
    }

    /**
     * 实名核验完成时间
     * @return string
     */
    public function getVerifyTime()
    {
        return $this->verify_time;
    }

    /**
     * 实名核验失败详情
     * @var FaceAuthDetail $detail
     */
    public function setDetail($detail)
    {
        $this->detail = $detail;
    }

    /**
     * 实名核验失败详情
     * @return FaceAuthDetail
     */
    public function getDetail()
    {
        return $this->detail;
    }
}
