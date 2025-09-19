<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseRequest;

/**
 * 微信实时支付请求
 * Class CreateWxpayOrderRequest
 */
class CreateWxpayOrderRequest extends BaseRequest
{
    /**
     * 平台企业订单号
     * @var string
     */
    public $order_id;
    /**
     * 平台企业 ID
     * @var string
     */
    public $dealer_id;
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
     * 微信用户 openid
     * @var string
     */
    public $openid;
    /**
     * 身份证号码
     * @var string
     */
    public $id_card;
    /**
     * 手机号
     * @var string
     */
    public $phone_no;
    /**
     * 订单金额
     * @var string
     */
    public $pay;
    /**
     * 订单备注
     * @var string
     */
    public $pay_remark;
    /**
     * 回调地址
     * @var string
     */
    public $notify_url;
    /**
     * 平台企业微信 AppID
     * @var string
     */
    public $wx_app_id;
    /**
     * 微信支付模式，固定值：transfer
     * @var string
     */
    public $wxpay_mode;
    /**
     * 业务线标识
     * @var string
     */
    public $project_id;
    /**
     * 描述信息，该字段已废弃
     * @var string
     */
    public $notes;
    /**
     * 互联网平台名称
     * @var string
     */
    public $dealer_platform_name;
    /**
     * 用户名称/昵称
     * @var string
     */
    public $dealer_user_nickname;
    /**
     * 用户唯一标识码
     * @var string
     */
    public $dealer_user_id;

    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}
