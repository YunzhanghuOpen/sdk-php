<?php

namespace Yzh\Model\Authentication;

use Yzh\Model\BaseResponse;

/**
 * 上传免验证用户名单信息返回
 * Class UserExemptedInfoResponse
 */
class UserExemptedInfoResponse extends BaseResponse
{

    /**
     * 是否上传成功
     * @var string
     */
    public $ok;
}