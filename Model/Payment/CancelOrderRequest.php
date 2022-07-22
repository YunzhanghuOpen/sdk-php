<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseRequest;

/**
 * 取消待支付订单请求
 * Class CancelOrderRequest
 */
class CancelOrderRequest extends BaseRequest
{

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
     * 综合服务平台流水号
     * @var string
     */
    public $ref;

    /**
     * 支付路径名，银行卡（默认）、支付宝、微信
     * @var string
     */
    public $channel;


    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}