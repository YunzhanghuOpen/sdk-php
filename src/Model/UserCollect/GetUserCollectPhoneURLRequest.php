<?php

namespace Yzh\Model\UserCollect;

use Yzh\Model\BaseRequest;

/**
 * 获取收集手机号码页面请求
 * Class GetUserCollectPhoneURLRequest
 */
class GetUserCollectPhoneURLRequest extends BaseRequest
{
    /**
     * 手机号码收集 Token
     * @var string
     */
    public $token;
    /**
     * 主题颜色
     * @var string
     */
    public $color;
    /**
     * 回调地址
     * @var string
     */
    public $url;
    /**
     * 跳转 URL
     * @var string
     */
    public $redirect_url;

    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}
