<?php

namespace Yzh\Dataservice;

use Yzh\Model\BaseModel;

/**
 * 平台企业支付订单信息
 * Class DealerOrderInfo
 */
class DealerOrderInfo extends BaseModel
{

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
     * 平台企业订单号
     * @var string
     */
    public $order_id;

    /**
     * 订单流水号
     * @var string
     */
    public $ref;

    /**
     * 批次 ID
     * @var string
     */
    public $batch_id;

    /**
     * 姓名
     * @var string
     */
    public $real_name;

    /**
     * 收款账号
     * @var string
     */
    public $card_no;

    /**
     * 综合服务主体订单金额
     * @var string
     */
    public $broker_amount;

    /**
     * 综合服务主体加成服务费
     * @var string
     */
    public $broker_fee;

    /**
     * 支付路径流水号
     * @var string
     */
    public $bill;

    /**
     * 订单状态
     * @var string
     */
    public $status;

    /**
     * 订单详情
     * @var string
     */
    public $status_detail;

    /**
     * 订单详细状态码描述
     * @var string
     */
    public $status_detail_message;

    /**
     * 短周期授信账单号
     * @var string
     */
    public $statement_id;

    /**
     * 服务费账单号
     * @var string
     */
    public $fee_statement_id;

    /**
     * 余额账单号
     * @var string
     */
    public $bal_statement_id;

    /**
     * 支付路径
     * @var string
     */
    public $channel;

    /**
     * 创建时间
     * @var string
     */
    public $created_at;

    /**
     * 完成时间
     * @var string
     */
    public $finished_time;
}