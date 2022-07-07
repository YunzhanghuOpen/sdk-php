<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseResponse;

/**
 * 
 * Class CreateWxpayOrderReply
 */
class CreateWxpayOrderReply extends BaseResponse
{

    /**
     * 平台企业订单号，原值返回
     * @var string
     */
    public $order_id;

    /**
     * 综合服务平台流水号，唯一
     * @var string
     */
    public $ref;

    /**
     * 单位：元，支持小数点后两位
     * @var string
     */
    public $pay;
}
