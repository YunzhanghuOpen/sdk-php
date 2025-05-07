<?php

namespace Yzh\Model\Dataservice;

use Yzh\Model\BaseRequest;

/**
 * 查询日订单汇总数据请求
 * Class ListDailyOrderSummaryRequest
 */
class ListDailyOrderSummaryRequest extends BaseRequest
{
    /**
     * 综合服务主体 ID
     * @var string
     */
    public $broker_id;
    /**
     * 平台企业 ID
     * @var string
     */
    public $dealer_id;
    /**
     * 支付路径，银行卡、支付宝、微信
     * @var string
     */
    public $channel;
    /**
     * 订单查询开始日期，格式：yyyy-MM-dd
     * @var string
     */
    public $begin_at;
    /**
     * 订单查询结束日期，格式：yyyy-MM-dd
     * @var string
     */
    public $end_at;
    /**
     * 筛选类型，apply：按订单创建时间汇总 complete：按订单完成时间汇总
     * @var string
     */
    public $filter_type;

    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}
