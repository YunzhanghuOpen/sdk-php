<?php

namespace Yzh\Model\Authentication;

use Yzh\Model\BaseRequest;

/**
 * 银行卡三要素验证返回
 * Class BankCardThreeVerifyRequest
 */
class BankCardThreeVerifyRequest extends BaseRequest
{

    /**
     * 银行卡号
     * @var string
     */
    public $card_no;

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