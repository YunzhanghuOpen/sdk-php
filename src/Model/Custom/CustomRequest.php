<?php

namespace Yzh\Model\Custom;

use Yzh\Model\BaseRequest;

/*
 * 自定义请求
 */
class CustomRequest extends BaseRequest
{
    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}