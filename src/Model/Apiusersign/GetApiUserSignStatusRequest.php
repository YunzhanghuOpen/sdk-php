<?php

namespace Yzh\Model\Apiusersign;

use Yzh\Model\BaseRequest;

/**
 * 获取用户签约状态请求
 * Class GetApiUserSignStatusRequest
 */
class GetApiUserSignStatusRequest extends BaseRequest
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


    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}