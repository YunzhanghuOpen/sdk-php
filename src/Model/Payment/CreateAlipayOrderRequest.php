<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseRequest;

/**
 * 支付宝实时支付请求
 * Class CreateAlipayOrderRequest
 */
class CreateAlipayOrderRequest extends BaseRequest
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
     * 支付宝账户
     * @var string
     */
    public $card_no;
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
     * 业务线标识
     * @var string
     */
    public $project_id;
    /**
     * 校验支付宝账户姓名，固定值：Check
     * @var string
     */
    public $check_name;
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
