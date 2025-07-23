<?php

namespace Yzh\Model\UserCollect;

use Yzh\Model\BaseRequest;

/**
 * 查询手机号码绑定状态请求
 * Class GetUserCollectPhoneStatusRequest
 */
class GetUserCollectPhoneStatusRequest extends BaseRequest
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
     * 平台企业用户 ID
     * @var string
     */
    public $dealer_user_id;
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
     * 证件类型编码
     * @var int32
     */
    public $certificate_type;

    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}
