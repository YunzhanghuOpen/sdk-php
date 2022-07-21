<?php

namespace Yzh\Model\H5usersign;

use Yzh\Model\BaseResponse;

/**
 * 获取用户签约状态返回
 * Class GetH5UserSignStatusResponse
 */
class GetH5UserSignStatusResponse extends BaseResponse
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