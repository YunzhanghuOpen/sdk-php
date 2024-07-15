<?php

namespace Yzh\Model\Dataservice;

use Yzh\Model\BaseRequest;

/**
 * 查询日订单文件（支付和退款订单）请求
 * Class GetDailyOrderFileV2Request
 */
class GetDailyOrderFileV2Request extends BaseRequest
{
    /**
     * 订单查询日期, 格式：yyyy-MM-dd
     * @var string
     */
    public $order_date;

    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}
