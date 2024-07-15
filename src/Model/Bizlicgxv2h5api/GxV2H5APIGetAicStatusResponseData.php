<?php

namespace Yzh\Model\Bizlicgxv2h5api;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 查询个体工商户状态返回
 * Class GxV2H5APIGetAicStatusResponseData
 */
class GxV2H5APIGetAicStatusResponseData extends BaseModel implements ResponseDataInterface
{
    /**
     * 用户注册状态
     * @var int32
     */
    protected $status;
    /**
     * 注册状态描述
     * @var string
     */
    protected $status_message;
    /**
     * 注册详情状态码
     * @var int32
     */
    protected $status_detail;
    /**
     * 注册详情状态码描述
     * @var string
     */
    protected $status_detail_message;
    /**
     * 注册发起时间
     * @var string
     */
    protected $applyed_at;
    /**
     * 注册完成时间
     * @var string
     */
    protected $registed_at;
    /**
     * 统一社会信用代码
     * @var string
     */
    protected $uscc;
    /**
     * 身份证号码
     * @var string
     */
    protected $id_card;
    /**
     * 姓名
     * @var string
     */
    protected $real_name;

    /**
     * 用户注册状态
     * @var int32 $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * 用户注册状态
     * @return int32
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * 注册状态描述
     * @var string $status_message
     */
    public function setStatusMessage($status_message)
    {
        $this->status_message = $status_message;
    }

    /**
     * 注册状态描述
     * @return string
     */
    public function getStatusMessage()
    {
        return $this->status_message;
    }

    /**
     * 注册详情状态码
     * @var int32 $status_detail
     */
    public function setStatusDetail($status_detail)
    {
        $this->status_detail = $status_detail;
    }

    /**
     * 注册详情状态码
     * @return int32
     */
    public function getStatusDetail()
    {
        return $this->status_detail;
    }

    /**
     * 注册详情状态码描述
     * @var string $status_detail_message
     */
    public function setStatusDetailMessage($status_detail_message)
    {
        $this->status_detail_message = $status_detail_message;
    }

    /**
     * 注册详情状态码描述
     * @return string
     */
    public function getStatusDetailMessage()
    {
        return $this->status_detail_message;
    }

    /**
     * 注册发起时间
     * @var string $applyed_at
     */
    public function setApplyedAt($applyed_at)
    {
        $this->applyed_at = $applyed_at;
    }

    /**
     * 注册发起时间
     * @return string
     */
    public function getApplyedAt()
    {
        return $this->applyed_at;
    }

    /**
     * 注册完成时间
     * @var string $registed_at
     */
    public function setRegistedAt($registed_at)
    {
        $this->registed_at = $registed_at;
    }

    /**
     * 注册完成时间
     * @return string
     */
    public function getRegistedAt()
    {
        return $this->registed_at;
    }

    /**
     * 统一社会信用代码
     * @var string $uscc
     */
    public function setUscc($uscc)
    {
        $this->uscc = $uscc;
    }

    /**
     * 统一社会信用代码
     * @return string
     */
    public function getUscc()
    {
        return $this->uscc;
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
}
