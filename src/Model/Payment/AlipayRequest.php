<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseRequest;

class AlipayRequest extends BaseRequest
{
    /**
     * 平台企业订单号
     * @var RegExp-app_order_id
     */
    public $order_id;

    /**
     * 平台企业ID
     * @var string
     */
    public $dealer_id;

    /**
     * 综合服务主体ID
     * @var string
     */
    public $broker_id;

    /**
     * 姓名
     * @var string
     */
    public $real_name;

    /**
     * 银行卡号
     * @var RegExp-bank_card_no
     */
    public $card_no;

    /**
     * 身份证号
     * @var RegExp-id_card_no
     */
    public $id_card;

    /**
     * 手机号
     * @var RegExp-phone_no
     */
    public $phone_no;

    /**
     * 订单金额
     * @var RegExp-money
     */
    public $pay;

    /**
     * 订单备注
     * @var RegExp-pay_remark
     */
    public $pay_remark;

    /**
     * 校验支付宝姓名
     * @var string
     */
    public $check_name;

    /**
     * 回调地址
     * @var RegExp-url
     */
    public $notify_url;


    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}
