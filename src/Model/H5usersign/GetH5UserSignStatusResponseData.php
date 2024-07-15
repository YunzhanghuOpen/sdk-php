<?php

namespace Yzh\Model\H5usersign;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 获取用户签约状态返回
 * Class GetH5UserSignStatusResponseData
 */
class GetH5UserSignStatusResponseData extends BaseModel implements ResponseDataInterface
{
    /**
     * 签约时间
     * @var string
     */
    protected $signed_at;
    /**
     * 用户签约状态
     * @var int32
     */
    protected $status;

    /**
     * 签约时间
     * @var string $signed_at
     */
    public function setSignedAt($signed_at)
    {
        $this->signed_at = $signed_at;
    }

    /**
     * 签约时间
     * @return string
     */
    public function getSignedAt()
    {
        return $this->signed_at;
    }

    /**
     * 用户签约状态
     * @var int32 $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * 用户签约状态
     * @return int32
     */
    public function getStatus()
    {
        return $this->status;
    }
}
