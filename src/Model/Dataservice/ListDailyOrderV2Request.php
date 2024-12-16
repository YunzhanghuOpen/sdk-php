<?php

namespace Yzh\Model\Dataservice;

use Yzh\Model\BaseRequest;

/**
 * 查询日订单数据（支付和退款订单）请求
 * Class ListDailyOrderV2Request
 */
class ListDailyOrderV2Request extends BaseRequest
{
    /**
     * 订单查询日期, yyyy-MM-dd 格式
     * @var string
     */
    public $order_date;
    /**
     * 偏移量
     * @var int32
     */
    public $offset;
    /**
     * 每页返回条数
     * @var int32
     */
    public $length;
    /**
     * 支付路径名，bankpay：银行卡 alipay：支付宝 wxpay：微信
     * @var string
     */
    public $channel;
    /**
     * 当且仅当参数值为 encryption 时，对返回的 data 进行加密
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
