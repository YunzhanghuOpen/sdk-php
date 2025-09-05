<?php

namespace Yzh\Model\CustomerLink;

use Yzh\Model\BaseRequest;

use Yzh\Model\BaseRequest;

/**
 * 获取客户链接请求
 * Class GetCustomerLinkRequest
 */
class GetCustomerLinkRequest extends BaseRequest
{
    /**
     * baseurl
     * @var string
     */
    public $baseurl;
    /**
     * memberID
     * @var string
     */
    public $memberID;

    public $mess;
    public $timestamp;

    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}