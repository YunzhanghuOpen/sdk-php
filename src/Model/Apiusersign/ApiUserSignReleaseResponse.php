<?php

namespace Yzh\Model\Apiusersign;

use Yzh\Model\BaseResponse;

/**
 *  * 用户解约响应
 * Class ApiUserSignReleaseResponse
 */
class ApiUserSignReleaseResponse extends BaseResponse
{

    /**
     * 解约是否成功
     * @var string
     */
    public $status;
}