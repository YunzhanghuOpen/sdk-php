<?php

namespace Yzh\Model\Dataservice;

use Yzh\Model\BaseModel;

/**
 * 平台企业支付订单信息
 * Class DealerOrderInfo
 */
class DealerOrderInfo extends BaseModel
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
     * 平台企业订单号
     * @var string
     */
    protected $order_id;
    /**
     * 订单流水号
     * @var string
     */
    protected $ref;
    /**
     * 批次ID
     * @var string
     */
    protected $batch_id;
    /**
     * 姓名
     * @var string
     */
    protected $real_name;
    /**
     * 收款账号
     * @var string
     */
    protected $card_no;
    /**
     * 综合服务主体订单金额
     * @var string
     */
    protected $broker_amount;
    /**
     * 应收综合服务主体加成服务费金额
     * @var string
     */
    protected $broker_fee;
    /**
     * 实收综合服务主体加成服务费金额
     * @var string
     */
    protected $received_broker_fee;
    /**
     * 支付路径流水号
     * @var string
     */
    protected $bill;
    /**
     * 订单状态
     * @var string
     */
    protected $status;
    /**
     * 订单状态码描述
     * @var string
     */
    protected $status_message;
    /**
     * 订单详情
     * @var string
     */
    protected $status_detail;
    /**
     * 订单详细状态码描述
     * @var string
     */
    protected $status_detail_message;
    /**
     * 订单状态补充信息
     * @var string
     */
    protected $supplemental_detail_message;
    /**
     * 短周期授信账单号
     * @var string
     */
    protected $statement_id;
    /**
     * 服务费账单号
     * @var string
     */
    protected $fee_statement_id;
    /**
     * 余额账单号
     * @var string
     */
    protected $bal_statement_id;
    /**
     * 支付路径
     * @var string
     */
    protected $channel;
    /**
     * 创建时间
     * @var string
     */
    protected $created_at;
    /**
     * 完成时间
     * @var string
     */
    protected $finished_time;
    /**
     * 预扣税费总额
     * @var string
     */
    protected $tax_amount;
    /**
     * 实缴税费总额
     * @var string
     */
    protected $received_tax_amount;
    /**
     * 缴税明细
     * @var OrderTaxDetail
     */
    protected $tax_detail;

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
     * 平台企业订单号
     * @var string $order_id
     */
    public function setOrderId($order_id)
    {
        $this->order_id = $order_id;
    }

    /**
     * 平台企业订单号
     * @return string
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * 订单流水号
     * @var string $ref
     */
    public function setRef($ref)
    {
        $this->ref = $ref;
    }

    /**
     * 订单流水号
     * @return string
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * 批次ID
     * @var string $batch_id
     */
    public function setBatchId($batch_id)
    {
        $this->batch_id = $batch_id;
    }

    /**
     * 批次ID
     * @return string
     */
    public function getBatchId()
    {
        return $this->batch_id;
    }

    /**
     * 姓名
     * @var string $real_name
     */
    public function setRealName($real_name)
    {
        $this->real_name = $real_name;
    }

    /**
     * 姓名
     * @return string
     */
    public function getRealName()
    {
        return $this->real_name;
    }

    /**
     * 收款账号
     * @var string $card_no
     */
    public function setCardNo($card_no)
    {
        $this->card_no = $card_no;
    }

    /**
     * 收款账号
     * @return string
     */
    public function getCardNo()
    {
        return $this->card_no;
    }

    /**
     * 综合服务主体订单金额
     * @var string $broker_amount
     */
    public function setBrokerAmount($broker_amount)
    {
        $this->broker_amount = $broker_amount;
    }

    /**
     * 综合服务主体订单金额
     * @return string
     */
    public function getBrokerAmount()
    {
        return $this->broker_amount;
    }

    /**
     * 应收综合服务主体加成服务费金额
     * @var string $broker_fee
     */
    public function setBrokerFee($broker_fee)
    {
        $this->broker_fee = $broker_fee;
    }

    /**
     * 应收综合服务主体加成服务费金额
     * @return string
     */
    public function getBrokerFee()
    {
        return $this->broker_fee;
    }

    /**
     * 实收综合服务主体加成服务费金额
     * @var string $received_broker_fee
     */
    public function setReceivedBrokerFee($received_broker_fee)
    {
        $this->received_broker_fee = $received_broker_fee;
    }

    /**
     * 实收综合服务主体加成服务费金额
     * @return string
     */
    public function getReceivedBrokerFee()
    {
        return $this->received_broker_fee;
    }

    /**
     * 支付路径流水号
     * @var string $bill
     */
    public function setBill($bill)
    {
        $this->bill = $bill;
    }

    /**
     * 支付路径流水号
     * @return string
     */
    public function getBill()
    {
        return $this->bill;
    }

    /**
     * 订单状态
     * @var string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * 订单状态
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * 订单状态码描述
     * @var string $status_message
     */
    public function setStatusMessage($status_message)
    {
        $this->status_message = $status_message;
    }

    /**
     * 订单状态码描述
     * @return string
     */
    public function getStatusMessage()
    {
        return $this->status_message;
    }

    /**
     * 订单详情
     * @var string $status_detail
     */
    public function setStatusDetail($status_detail)
    {
        $this->status_detail = $status_detail;
    }

    /**
     * 订单详情
     * @return string
     */
    public function getStatusDetail()
    {
        return $this->status_detail;
    }

    /**
     * 订单详细状态码描述
     * @var string $status_detail_message
     */
    public function setStatusDetailMessage($status_detail_message)
    {
        $this->status_detail_message = $status_detail_message;
    }

    /**
     * 订单详细状态码描述
     * @return string
     */
    public function getStatusDetailMessage()
    {
        return $this->status_detail_message;
    }

    /**
     * 订单状态补充信息
     * @var string $supplemental_detail_message
     */
    public function setSupplementalDetailMessage($supplemental_detail_message)
    {
        $this->supplemental_detail_message = $supplemental_detail_message;
    }

    /**
     * 订单状态补充信息
     * @return string
     */
    public function getSupplementalDetailMessage()
    {
        return $this->supplemental_detail_message;
    }

    /**
     * 短周期授信账单号
     * @var string $statement_id
     */
    public function setStatementId($statement_id)
    {
        $this->statement_id = $statement_id;
    }

    /**
     * 短周期授信账单号
     * @return string
     */
    public function getStatementId()
    {
        return $this->statement_id;
    }

    /**
     * 服务费账单号
     * @var string $fee_statement_id
     */
    public function setFeeStatementId($fee_statement_id)
    {
        $this->fee_statement_id = $fee_statement_id;
    }

    /**
     * 服务费账单号
     * @return string
     */
    public function getFeeStatementId()
    {
        return $this->fee_statement_id;
    }

    /**
     * 余额账单号
     * @var string $bal_statement_id
     */
    public function setBalStatementId($bal_statement_id)
    {
        $this->bal_statement_id = $bal_statement_id;
    }

    /**
     * 余额账单号
     * @return string
     */
    public function getBalStatementId()
    {
        return $this->bal_statement_id;
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
     * 创建时间
     * @var string $created_at
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    /**
     * 创建时间
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * 完成时间
     * @var string $finished_time
     */
    public function setFinishedTime($finished_time)
    {
        $this->finished_time = $finished_time;
    }

    /**
     * 完成时间
     * @return string
     */
    public function getFinishedTime()
    {
        return $this->finished_time;
    }

    /**
     * 预扣税费总额
     * @var string $tax_amount
     */
    public function setTaxAmount($tax_amount)
    {
        $this->tax_amount = $tax_amount;
    }

    /**
     * 预扣税费总额
     * @return string
     */
    public function getTaxAmount()
    {
        return $this->tax_amount;
    }

    /**
     * 实缴税费总额
     * @var string $received_tax_amount
     */
    public function setReceivedTaxAmount($received_tax_amount)
    {
        $this->received_tax_amount = $received_tax_amount;
    }

    /**
     * 实缴税费总额
     * @return string
     */
    public function getReceivedTaxAmount()
    {
        return $this->received_tax_amount;
    }

    /**
     * 缴税明细
     * @var OrderTaxDetail $tax_detail
     */
    public function setTaxDetail($tax_detail)
    {
        $this->tax_detail = $tax_detail;
    }

    /**
     * 缴税明细
     * @return OrderTaxDetail
     */
    public function getTaxDetail()
    {
        return $this->tax_detail;
    }
}
