<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseResponse;

class AlipayResponse extends BaseResponse
{
    /**
     * 平台企业订单号
     * @var
     */
    public $order_id;

    /**
     * 综合服务平台流水号
     * @var
     */
    public $ref;

    /**
     * 订单金额
     * @var
     */
    public $pay;
}
