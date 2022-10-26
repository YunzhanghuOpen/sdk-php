<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseModel;

/**
 * 批量下单返回订单信息
 * Class BatchOrderResult
 */
class BatchOrderResult extends BaseModel
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