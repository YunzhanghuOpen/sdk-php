<?php

namespace Yzh\Model\H5usersign;

use Yzh\Model\BaseRequest;

/**
 * 申请解约请求
 * Class H5UserReleaseApplyRequest
 */
class H5UserReleaseApplyRequest extends BaseRequest
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
     * 姓名
     * @var string
     */
    public $real_name;
    /**
     * 证件号码
     * @var string
     */
    public $id_card;
    /**
     * 主题颜色
     * @var string
     */
    public $color;
    /**
     * 回调 URL
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
