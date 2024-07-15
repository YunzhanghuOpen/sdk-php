<?php

namespace Yzh\Model\Bizlicgxv2h5;

use Yzh\Model\BaseRequest;

/**
 * 预启动请求
 * Class GxV2H5GetStartUrlRequest
 */
class GxV2H5GetStartUrlRequest extends BaseRequest
{
    /**
     * 平台企业 ID
     * @var string
     */
    public $dealer_id;
    /**
     * 综合服务主体 ID
     * @var string
     */
    public $broker_id;
    /**
     * 平台企业端的用户 ID
     * @var string
     */
    public $dealer_user_id;
    /**
     * 客户端类型
     * @var int32
     */
    public $client_type;
    /**
     * 异步通知 URL
     * @var string
     */
    public $notify_url;
    /**
     * H5 页面主题颜色
     * @var string
     */
    public $color;
    /**
     * 跳转 URL
     * @var string
     */
    public $return_url;
    /**
     * H5 页面 Title
     * @var int32
     */
    public $customer_title;

    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}
