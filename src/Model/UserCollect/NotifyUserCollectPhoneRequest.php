<?php

namespace Yzh\Model\UserCollect;

use Yzh\Model\BaseRequest;

/**
 * 收集手机号码结果回调通知
 * Class NotifyUserCollectPhoneRequest
 */
class NotifyUserCollectPhoneRequest extends BaseRequest
{
    /**
     * 平台企业用户 ID
     * @var string
     */
    public $dealer_user_id;
    /**
     * 手机号码绑定状态
     * @var string
     */
    public $status;

    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}
