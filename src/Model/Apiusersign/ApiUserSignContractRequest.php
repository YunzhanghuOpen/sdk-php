<?php

namespace Yzh\Model\Apiusersign;

use Yzh\Model\BaseRequest;

/**
 * 获取协议预览 URL 请求 V2
 * Class ApiUserSignContractRequest
 */
class ApiUserSignContractRequest extends BaseRequest
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


    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}