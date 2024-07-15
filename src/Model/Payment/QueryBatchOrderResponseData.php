<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 查询批次订单信息返回
 * Class QueryBatchOrderResponseData
 */
class QueryBatchOrderResponseData extends BaseModel implements ResponseDataInterface
{
    /**
     * 综合服务主体 ID
     * @var string
     */
    protected $broker_id;
    /**
     * 平台企业 ID
     * @var string
     */
    protected $dealer_id;
    /**
     * 平台企业批次号
     * @var string
     */
    protected $batch_id;
    /**
     * 总笔数
     * @var string
     */
    protected $total_count;
    /**
     * 订单总金额
     * @var string
     */
    protected $total_pay;
    /**
     * 支付路径
     * @var string
     */
    protected $channel;
    /**
     * 批次状态码
     * @var string
     */
    protected $batch_status;
    /**
     * 批次状态码描述
     * @var string
     */
    protected $batch_status_message;
    /**
     * 批次接收时间
     * @var string
     */
    protected $batch_received_time;
    /**
     * 批次订单列表
     * @var QueryBatchOrderInfo[]
     */
    protected $order_list;

    /**
     * 综合服务主体 ID
     * @var string $broker_id
     */
    public function setBrokerId($broker_id)
    {
        $this->broker_id = $broker_id;
    }

    /**
     * 综合服务主体 ID
     * @return string
     */
    public function getBrokerId()
    {
        return $this->broker_id;
    }

    /**
     * 平台企业 ID
     * @var string $dealer_id
     */
    public function setDealerId($dealer_id)
    {
        $this->dealer_id = $dealer_id;
    }

    /**
     * 平台企业 ID
     * @return string
     */
    public function getDealerId()
    {
        return $this->dealer_id;
    }

    /**
     * 平台企业批次号
     * @var string $batch_id
     */
    public function setBatchId($batch_id)
    {
        $this->batch_id = $batch_id;
    }

    /**
     * 平台企业批次号
     * @return string
     */
    public function getBatchId()
    {
        return $this->batch_id;
    }

    /**
     * 总笔数
     * @var string $total_count
     */
    public function setTotalCount($total_count)
    {
        $this->total_count = $total_count;
    }

    /**
     * 总笔数
     * @return string
     */
    public function getTotalCount()
    {
        return $this->total_count;
    }

    /**
     * 订单总金额
     * @var string $total_pay
     */
    public function setTotalPay($total_pay)
    {
        $this->total_pay = $total_pay;
    }

    /**
     * 订单总金额
     * @return string
     */
    public function getTotalPay()
    {
        return $this->total_pay;
    }

    /**
     * 支付路径
     * @var string $channel
     */
    public function setChannel($channel)
    {
        $this->channel = $channel;
    }

    /**
     * 支付路径
     * @return string
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * 批次状态码
     * @var string $batch_status
     */
    public function setBatchStatus($batch_status)
    {
        $this->batch_status = $batch_status;
    }

    /**
     * 批次状态码
     * @return string
     */
    public function getBatchStatus()
    {
        return $this->batch_status;
    }

    /**
     * 批次状态码描述
     * @var string $batch_status_message
     */
    public function setBatchStatusMessage($batch_status_message)
    {
        $this->batch_status_message = $batch_status_message;
    }

    /**
     * 批次状态码描述
     * @return string
     */
    public function getBatchStatusMessage()
    {
        return $this->batch_status_message;
    }

    /**
     * 批次接收时间
     * @var string $batch_received_time
     */
    public function setBatchReceivedTime($batch_received_time)
    {
        $this->batch_received_time = $batch_received_time;
    }

    /**
     * 批次接收时间
     * @return string
     */
    public function getBatchReceivedTime()
    {
        return $this->batch_received_time;
    }

    /**
     * 批次订单列表
     * @var array $items
     */
    public function setOrderList($items)
    {
        $this->order_list = array();
        foreach ($items as $k => $v) {
            array_push($this->order_list, new QueryBatchOrderInfo($v));
        }
    }

    /**
     * 批次订单列表
     * @return QueryBatchOrderInfo[]
     */
    public function getOrderList()
    {
        return $this->order_list;
    }
}
