<?php

namespace Yzh\Model\Authentication;

use Yzh\Model\BaseRequest;

/**
 *  * 查看用户免验证名单是否存在请求
 * Class UserWhiteCheckRequest
 */
class UserWhiteCheckRequest extends BaseRequest
{

    /**
     * 身份证号
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