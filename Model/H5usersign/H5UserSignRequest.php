<?php

namespace Yzh\Model\H5usersign;

use Yzh\Model\BaseRequest;

/**
 * H5 签约接口请求
 * Class H5UserSignRequest
 */
class H5UserSignRequest extends BaseRequest
{

    /**
     * H5 签约 token
     * @var string
     */
    public $token;

    /**
     * H5 页面主题颜色
     * @var string
     */
    public $color;

    /**
     * 回调 URL 地址
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