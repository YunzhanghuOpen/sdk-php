<?php

namespace Yzh\Model\Uploadusersign;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 获取用户签约状态返回
 * Class GetUploadUserSignStatusResponseData
 */
class GetUploadUserSignStatusResponseData extends BaseModel implements ResponseDataInterface
{
    /**
     * 平台企业 ID
     * @var string
     */
    protected $dealer_id;
    /**
     * 综合服务主体 ID
     * @var string
     */
    protected $broker_id;
    /**
     * 姓名
     * @var string
     */
    protected $real_name;
    /**
     * 证件号码
     * @var string
     */
    protected $id_card;
    /**
     * 签约状态
     * @var int32
     */
    protected $status;
    /**
     * 创建时间
     * @var int64
     */
    protected $created_at;
    /**
     * 更新时间
     * @var int64
     */
    protected $updated_at;

    /**
     * 平台企业 ID
     * @var string $dealer_id
     */
    public function setDealerId($dealer_id)
    {
        $this->dealer_id = $dealer_id;
    }


    /**
     * 平台企业 ID
     * @return string
     */
    public function getDealerId()
    {
        return $this->dealer_id;
    }

    /**
     * 综合服务主体 ID
     * @var string $broker_id
     */
    public function setBrokerId($broker_id)
    {
        $this->broker_id = $broker_id;
    }


    /**
     * 综合服务主体 ID
     * @return string
     */
    public function getBrokerId()
    {
        return $this->broker_id;
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

    /**
     * 证件号码
     * @var string $id_card
     */
    public function setIdCard($id_card)
    {
        $this->id_card = $id_card;
    }


    /**
     * 证件号码
     * @return string
     */
    public function getIdCard()
    {
        return $this->id_card;
    }

    /**
     * 签约状态
     * @var int32 $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }


    /**
     * 签约状态
     * @return int32
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * 创建时间
     * @var int64 $created_at
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }


    /**
     * 创建时间
     * @return int64
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * 更新时间
     * @var int64 $updated_at
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
    }


    /**
     * 更新时间
     * @return int64
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }
}
