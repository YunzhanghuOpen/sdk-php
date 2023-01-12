<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseResponse;

/**
 * 银行卡实时支付返回
 * Class CreateBankpayOrderResponse
 */
class CreateBankpayOrderResponse extends BaseResponse
{

    /**
     
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