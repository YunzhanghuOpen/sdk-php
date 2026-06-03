<?php

namespace Yzh\Model\Faceauth;

use Yzh\Model\BaseRequest;

/**
 * 申请人脸识别实名核验请求
 * Class ApplyFaceAuthRequest
 */
class ApplyFaceAuthRequest extends BaseRequest
{
    /**
     * 综合服务主体 ID
     * @var string
     */
    public $broker_id;
    /**
     * 平台企业 ID
     * @var string
     */
    public $dealer_id;
    /**
     * 平台企业实名核验 ID
     * @var string
     */
    public $verification_id;
    /**
     * 姓名
     * @var string
     */
    public $real_name;
    /**
     * 身份证号码
     * @var string
     */
    public $id_card;
    /**
     * 回调地址
     * @var string
     */
    public $callback_url;
    /**
     * 跳转 URL
     * @var string
     */
    public $redirect_url;
    /**
     * 主题颜色
     * @var string
     */
    public $color;

    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}
