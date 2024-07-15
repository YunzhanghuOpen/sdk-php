<?php

namespace Yzh\Model\Uploadusersign;

use Yzh\Model\BaseRequest;

/**
 * 签约成功状态回调通知
 * Class NotifyUploadUserSignRequest
 */
class NotifyUploadUserSignRequest extends BaseRequest
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

    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}
