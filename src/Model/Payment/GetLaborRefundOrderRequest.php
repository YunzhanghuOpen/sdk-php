<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseRequest;

/**
 * 查询劳动者退款订单信息请求
 * Class GetLaborRefundOrderRequest
 */
class GetLaborRefundOrderRequest extends BaseRequest
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
     * 支付路径
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

