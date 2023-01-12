<?php

namespace Yzh\Model\H5usersign;

use Yzh\Model\BaseResponse;

/**
 * 预申请签约返回
 * Class H5UserPresignResponse
 */
class H5UserPresignResponse extends BaseResponse
{

    /**
     * 用户 ID（废弃字段）
     * @var string
     */
    public $uid;

    /**
     * H5 签约 token
     * @var string
     */
    public $token;

    /**
     * 签约状态
     * @var int32
     */
    public $status;
}