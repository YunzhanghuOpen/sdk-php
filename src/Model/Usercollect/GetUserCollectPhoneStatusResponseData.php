<?php

namespace Yzh\Model\UserCollect;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 查询手机号码绑定状态返回
 * Class GetUserCollectPhoneStatusResponseData
 */
class GetUserCollectPhoneStatusResponseData extends BaseModel implements ResponseDataInterface
{
    /**
     * 手机号码收集 Token
     * @var string
     */
    protected $token;
    /**
     * 绑定状态
     * @var int32
     */
    protected $status;

    /**
     * 手机号码收集 Token
     * @var string $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }

    /**
     * 手机号码收集 Token
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * 绑定状态
     * @var int32 $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * 绑定状态
     * @return int32
     */
    public function getStatus()
    {
        return $this->status;
    }
}
