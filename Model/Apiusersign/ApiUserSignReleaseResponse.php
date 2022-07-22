<?php

namespace Yzh\Model\Apiusersign;

use Yzh\Model\BaseResponse;

/**
 * 用户解约返回
 * Class ApiUserSignReleaseResponse
 */
class ApiUserSignReleaseResponse extends BaseResponse
{

    /**
     * 是否解约成功
     * @var string
     */
    public $status;
}