<?php

namespace Yzh\Model\Authentication;

use Yzh\Model\BaseRequest;

/**
 * 银行卡四要素鉴权请求（下发短信验证码）请求
 * Class BankCardFourAuthVerifyRequest
 */
class BankCardFourAuthVerifyRequest extends BaseRequest
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
    /**
     * 银行预留手机号
     * @var string
     */
    public $mobile;

    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}
