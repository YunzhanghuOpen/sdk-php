<?php

namespace Yzh\Model\Authentication;

use Yzh\Model\BaseResponse;

/**
 *  * 上传用户免验证名单信息响应
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