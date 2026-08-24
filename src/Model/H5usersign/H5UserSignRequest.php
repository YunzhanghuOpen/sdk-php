<?php

namespace Yzh\Model\H5usersign;

use Yzh\Model\BaseRequest;

/**
 * 申请签约请求
 * Class H5UserSignRequest
 */
class H5UserSignRequest extends BaseRequest
{
    /**
     * 签约 token
     * @var string
     */
    public $token;
    /**
     * 主题颜色
     * @var string
     */
    public $color;
    /**
     * 签约完成回调地址
     * @var string
     */
    public $url;
    /**
     * 签约事件状态回调地址
     * @var string
     */
    public $event_callback_url;
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
