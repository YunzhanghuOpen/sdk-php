<?php

namespace Yzh\Model\Apiusersign;

use Yzh\Model\BaseResponse;

/**
 * 获取用户签约状态返回
 * Class GetApiUserSignStatusResponse
 */
class GetApiUserSignStatusResponse extends BaseResponse
{

    /**
     * 签约时间
     * @var string
     */
    public $signed_at;

    /**
     * 用户签约状态
     * @var int32
     */
    public $status;
}