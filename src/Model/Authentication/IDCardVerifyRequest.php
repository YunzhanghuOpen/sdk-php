<?php

namespace Yzh\Model\Authentication;

use Yzh\Model\BaseRequest;

/**
 * 身份证实名验证返回
 * Class IDCardVerifyRequest
 */
class IDCardVerifyRequest extends BaseRequest
{

    /**
     * 身份证号码
     * @var string
     */
    public $id_card;

    /**
     * 姓名
     * @var string
     */
    public $real_name;


    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}