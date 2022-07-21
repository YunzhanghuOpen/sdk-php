<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseRequest;

/**
 * 查询单笔订单信息请求
 * Class GetOrderRequest
 */
class GetOrderRequest extends BaseRequest
{

    /**
     * 平台企业订单号
     * @var string
     */
    public $order_id;

    /**
     * 支付路径名，银行卡（默认）、支付宝、微信
     * @var string
     */
    public $channel;

    /**
     * 数据类型，如果为 encryption，则对返回的 data 进行加密
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