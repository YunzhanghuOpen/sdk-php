<?php

namespace Yzh\Model\Apiusersign;

use Yzh\Model\BaseResponse;

/**
 * 获取协议预览 URL 返回
 * Class ApiUserSignContractResponse
 */
class ApiUserSignContractResponse extends BaseResponse
{

    /**
     * 预览跳转 URL
     * @var string
     */
    public $url;

    /**
     * 协议名称
     * @var string
     */
    public $title;
}