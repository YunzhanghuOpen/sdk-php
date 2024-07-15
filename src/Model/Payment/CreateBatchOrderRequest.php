<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseRequest;

/**
 * 批次下单请求
 * Class CreateBatchOrderRequest
 */
class CreateBatchOrderRequest extends BaseRequest
{
    /**
     * 平台企业批次号
     * @var string
     */
    public $batch_id;
    /**
     * 平台企业 ID
     * @var string
     */
    public $dealer_id;
    /**
     * 综合服务主体 ID
     * @var string
     */
    public $broker_id;
    /**
     * 支付路径
     * @var string
     */
    public $channel;
    /**
     * 平台企业的微信 AppID
     * @var string
     */
    public $wx_app_id;
    /**
     * 订单总金额
     * @var string
     */
    public $total_pay;
    /**
     * 总笔数
     * @var string
     */
    public $total_count;
    /**
     * 支付模式
     * @var string
     */
    public $mode;
    /**
     * 订单列表
     * @var BatchOrderInfo[]
     */
    public $order_list;

    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}
