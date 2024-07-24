<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseRequest;

/**
 * 用户结算金额校验请求
 * Class CheckUserAmountRequest
 */
class CheckUserAmountRequest extends BaseRequest
{
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
     * 身份证号码
     * @var string
     */
    public $id_card;
    /**
     * 校验金额
     * @var string
     */
    public $amount;

    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}
