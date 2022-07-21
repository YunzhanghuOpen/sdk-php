<?php

namespace Yzh\Model\H5usersign;

use Yzh\Model\BaseResponse;

/**
 * H5 预申请签约接口返回
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
}