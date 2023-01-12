<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseModel;

/**
 * 订单支付状态回调通知数据
 * Class NotifyOrderData
 */
class NotifyOrderData extends BaseModel
{

    /**
     * 平台企业订单号
     * @var string
     */
    public $order_id;

    /**
     * 订单金额
     * @var string
     */
    public $pay;

    /**
     * 综合服务主体 ID
     * @var string
     */
    public $broker_id;

    /**
     * 平台企业 ID
     * @var string
     */
    public $dealer_id;

    /**
     * 姓名
     * @var string
     */
    public $real_name;

    /**
     * 收款人账号
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
     * 订单状态码
     * @var string
     */
    public $status;

    /**
     * 订单详细状态码
     * @var string
     */
    public $status_detail;

    /**
     * 订单状态码描述
     * @var string
     */
    public $status_message;

    /**
     * 订单详细状态码描述
     * @var string
     */
    public $status_detail_message;

    /**
     * 综合服务主体支付金额
     * @var string
     */
    public $broker_amount;

    /**
     * 综合服务平台流水号
     * @var string
     */
    public $ref;

    /**
     * 支付交易流水号
     * @var string
     */
    public $broker_bank_bill;

    /**
     * 支付路径
     * @var string
     */
    public $withdraw_platform;

    /**
     * 订单接收时间，精确到秒
     * @var string
     */
    public $created_at;

    /**
     * 订单完成时间，精确到秒
     * @var string
     */
    public $finished_time;

    /**
     * 综合服务主体加成服务费
     * @var string
     */
    public $broker_fee;

    /**
     * 余额账户支出加成服务费
     * @var string
     */
    public $broker_real_fee;

    /**
     * 抵扣账户支出加成服务费
     * @var string
     */
    public $broker_deduct_fee;

    /**
     * 订单备注
     * @var string
     */
    public $pay_remark;

    /**
     * 用户加成服务费
     * @var string
     */
    public $user_fee;

    /**
     * 银行名称
     * @var string
     */
    public $bank_name;

    /**
     * 项目标识
     * @var string
     */
    public $project_id;

    /**
     * 平台企业用户 ID
     * @var string
     */
    public $user_id;
}