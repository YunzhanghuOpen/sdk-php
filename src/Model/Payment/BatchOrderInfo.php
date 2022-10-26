<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseModel;

/**
 * 批量下单订单信息
 * Class BatchOrderInfo
 */
class BatchOrderInfo extends BaseModel
{

    /**
     * 平台企业订单号
     * @var string
     */
    public $order_id;

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
     * 收款账号
     * @var string
     */
    public $card_no;

    /**
     * 微信用户 openid
     * @var string
     */
    public $openid;

    /**
     * 手机号
     * @var string
     */
    public $phone_no;

    /**
     * 项目标识
     * @var string
     */
    public $project_id;

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
}