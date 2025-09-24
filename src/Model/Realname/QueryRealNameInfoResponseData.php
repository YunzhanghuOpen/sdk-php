<?php

namespace Yzh\Model\Realname;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**

 * Class QueryRealNameInfoResponseData
 */
class QueryRealNameInfoResponseData extends BaseModel implements ResponseDataInterface
{
    /**
     * 实名认证结果
     * @var int32
     */
    protected $realname_result;
    /**
     * 实名认证通过时间
     * @var string
     */
    protected $realname_time;
    /**
     * 实名认证方式
     * @var int32
     */
    protected $realname_type;
    /**
     * 实名认证唯一可追溯编码
     * @var string
     */
    protected $realname_trace_id;
    /**
     * 认证平台
     * @var string
     */
    protected $realname_platform;
    /**
     * 是否存在人脸照片
     * @var string
     */
    protected $face_image;
    /**
     * 人脸识别验证分数
     * @var string
     */
    protected $face_verify_score;
    /**
     * 银行卡号
     * @var string
     */
    protected $bank_no;
    /**
     * 银行预留手机号
     * @var string
     */
    protected $bank_phone;
    /**
     * 平台企业审核人
     * @var string
     */
    protected $reviewer;

    /**
     * 实名认证结果
     * @var int32 $realname_result
     */
    public function setRealnameResult($realname_result)
    {
        $this->realname_result = $realname_result;
    }

    /**
     * 实名认证结果
     * @return int32
     */
    public function getRealnameResult()
    {
        return $this->realname_result;
    }

    /**
     * 实名认证通过时间
     * @var string $realname_time
     */
    public function setRealnameTime($realname_time)
    {
        $this->realname_time = $realname_time;
    }

    /**
     * 实名认证通过时间
     * @return string
     */
    public function getRealnameTime()
    {
        return $this->realname_time;
    }

    /**
     * 实名认证方式
     * @var int32 $realname_type
     */
    public function setRealnameType($realname_type)
    {
        $this->realname_type = $realname_type;
    }

    /**
     * 实名认证方式
     * @return int32
     */
    public function getRealnameType()
    {
        return $this->realname_type;
    }

    /**
     * 实名认证唯一可追溯编码
     * @var string $realname_trace_id
     */
    public function setRealnameTraceId($realname_trace_id)
    {
        $this->realname_trace_id = $realname_trace_id;
    }

    /**
     * 实名认证唯一可追溯编码
     * @return string
     */
    public function getRealnameTraceId()
    {
        return $this->realname_trace_id;
    }

    /**
     * 认证平台
     * @var string $realname_platform
     */
    public function setRealnamePlatform($realname_platform)
    {
        $this->realname_platform = $realname_platform;
    }

    /**
     * 认证平台
     * @return string
     */
    public function getRealnamePlatform()
    {
        return $this->realname_platform;
    }

    /**
     * 是否存在人脸照片
     * @var string $face_image
     */
    public function setFaceImage($face_image)
    {
        $this->face_image = $face_image;
    }

    /**
     * 是否存在人脸照片
     * @return string
     */
    public function getFaceImage()
    {
        return $this->face_image;
    }

    /**
     * 人脸识别验证分数
     * @var string $face_verify_score
     */
    public function setFaceVerifyScore($face_verify_score)
    {
        $this->face_verify_score = $face_verify_score;
    }

    /**
     * 人脸识别验证分数
     * @return string
     */
    public function getFaceVerifyScore()
    {
        return $this->face_verify_score;
    }

    /**
     * 银行卡号
     * @var string $bank_no
     */
    public function setBankNo($bank_no)
    {
        $this->bank_no = $bank_no;
    }

    /**
     * 银行卡号
     * @return string
     */
    public function getBankNo()
    {
        return $this->bank_no;
    }

    /**
     * 银行预留手机号
     * @var string $bank_phone
     */
    public function setBankPhone($bank_phone)
    {
        $this->bank_phone = $bank_phone;
    }

    /**
     * 银行预留手机号
     * @return string
     */
    public function getBankPhone()
    {
        return $this->bank_phone;
    }

    /**
     * 平台企业审核人
     * @var string $reviewer
     */
    public function setReviewer($reviewer)
    {
        $this->reviewer = $reviewer;
    }

    /**
     * 平台企业审核人
     * @return string
     */
    public function getReviewer()
    {
        return $this->reviewer;
    }
}
