<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseRequest;

/**
    * 订单支付状态回调通知
    * Class NotifyOrderRequest
    */
class NotifyOrderRequest extends BaseRequest
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
        * @var NotifyOrderData
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