<?php

namespace Yzh\Model\Dataservice;

use Yzh\Model\BaseRequest;

/**
    * 查询日订单数据请求
    * Class ListDailyOrderRequest
    */
class ListDailyOrderRequest extends BaseRequest
{

    /**
        * 订单查询日期, 格式：yyyy-MM-dd格式：yyyy-MM-dd
        * @var string
        */
    public $order_date;

    /**
        * 偏移量
        * @var int32
        */
    public $offset;

    /**
        * 长度
        * @var int32
        */
    public $length;

    /**
        * 支付路径名，银行卡（默认）、支付宝、微信
        * @var string
        */
    public $channel;

    /**
        * 如果为 encryption，则对返回的 data 进行加密
        * @var string
        */
    public $data_type;


    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}