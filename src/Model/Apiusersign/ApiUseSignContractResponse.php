<?php

namespace Yzh\Model\Apiusersign;

use Yzh\Model\BaseResponse;

/**
 *  * 获取协议预览 URL响应
 * Class ApiUseSignContractResponse
 */
class ApiUseSignContractResponse extends BaseResponse
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