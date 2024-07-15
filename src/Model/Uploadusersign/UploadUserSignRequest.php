<?php

namespace Yzh\Model\Uploadusersign;

use Yzh\Model\BaseRequest;

/**
 * 用户签约信息上传请求
 * Class UploadUserSignRequest
 */
class UploadUserSignRequest extends BaseRequest
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
     * 手机号
     * @var string
     */
    public $phone;
    /**
     * 是否是海外用户
     * @var bool
     */
    public $is_abroad;
    /**
     * 签约回调地址
     * @var string
     */
    public $notify_url;

    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}
