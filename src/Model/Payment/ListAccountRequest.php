<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseRequest;

/**
 * 查询平台企业余额请求
 * Class ListAccountRequest
 */
class ListAccountRequest extends BaseRequest
{

    /**
     * 平台企业 ID
     * @var string
     */
    public $dealer_id;


    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}