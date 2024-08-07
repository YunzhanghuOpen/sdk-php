<?php

namespace Yzh\Model\Authentication;

use Yzh\Model\BaseRequest;

/**
 * 银行卡四要素确认请求（上传短信验证码）请求
 * Class BankCardFourAuthConfirmRequest
 */
class BankCardFourAuthConfirmRequest extends BaseRequest
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
    /**
     * 短信验证码
     * @var string
     */
    public $captcha;
    /**
     * 交易凭证
     * @var string
     */
    public $ref;

    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}
