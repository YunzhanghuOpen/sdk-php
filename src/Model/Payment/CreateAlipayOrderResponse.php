<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseResponse;

/**
 * 支付宝实时下单返回
 * Class CreateAlipayOrderResponse
 */
class CreateAlipayOrderResponse extends BaseResponse
{

    /**
     * 平台企业订单号
     * @var string
     */
    public $order_id;

    /**
     * 综合服务平台流水号
     * @var string
     */
    public $ref;

    /**
     * 订单金额
     * @var string
     */
    public $pay;
}