<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseRequest;

/**
 * 查询劳务模式单笔订单信息请求
 * Class GetOrderLxlwRequest
 */
class GetOrderLxlwRequest extends BaseRequest
{
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
    /**
     * 数据类型
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
