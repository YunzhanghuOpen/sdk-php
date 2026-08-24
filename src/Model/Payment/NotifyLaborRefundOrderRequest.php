<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseRequest;

/**
 * 劳动者退款订单回调通知
 * Class NotifyLaborRefundOrderRequest
 */
class NotifyLaborRefundOrderRequest extends BaseRequest
{
    /**
     * 通知 ID
     * @var string
     */
    public $notify_id;
    /**
     * 通知时间
     * @var string
     */
    public $notify_time;
    /**
     * 返回数据
     * @var NotifyLaborRefundOrderData
     */
    public $data;

    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}
