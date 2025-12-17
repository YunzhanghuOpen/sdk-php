<?php

namespace Yzh\Model\Taxclearrefund;

use Yzh\Model\BaseModel;

/**
 * 连续劳务税费退补完成数据
 * Class RefundTaxData
 */
class RefundTaxData extends BaseModel
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
     * 清缴次数
     * @var string
     */
    protected $tax_clear_num;
    /**
     * 报税属期
     * @var string
     */
    protected $tax_month;
    /**
     * 退补税用户数量
     * @var string
     */
    protected $refund_tax_labor_num;
    /**
     * 退补税订单数量
     * @var string
     */
    protected $refund_tax_order_num;
    /**
     * 订单总金额
     * @var string
     */
    protected $total_amount;
    /**
     * 本批次退补税费总额
     * @var string
     */
    protected $cur_total_refund_tax;
    /**
     * 退补税费总额
     * @var string
     */
    protected $total_refund_tax;
    /**
     * 历史已退补税费总额
     * @var string
     */
    protected $history_refund_tax;
    /**
     * 本批次预扣税费总额
     * @var string
     */
    protected $total_tax;
    /**
     * 本批次实缴税费总额
     * @var string
     */
    protected $receive_total_tax;
    /**
     * 本批次退补给用户税费总额
     * @var string
     */
    protected $cur_total_refund_labor_tax;
    /**
     * 本批次退补给平台企业税费总额
     * @var string
     */
    protected $cur_total_refund_dealer_tax;
    /**
     * 本批次退补给云账户税费总额
     * @var string
     */
    protected $cur_total_refund_broker_tax;
    /**
     * 批次号
     * @var string
     */
    protected $batch_id;
    /**
     * 批次退补税状态
     * @var string
     */
    protected $batch_refund_tax_status;
    /**
     * 批次生成时间
     * @var string
     */
    protected $batch_create_time;
    /**
     * 批次退补税成功时间
     * @var string
     */
    protected $batch_refund_tax_finished_time;
    /**
     * 已完成税费退补的用户数量
     * @var string
     */
    protected $refund_tax_finished_labor_num;
    /**
     * 已完成的税费退补总额
     * @var string
     */
    protected $refund_tax_finished_amount;

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
     * 清缴次数
     * @var string $tax_clear_num
     */
    public function setTaxClearNum($tax_clear_num)
    {
        $this->tax_clear_num = $tax_clear_num;
    }

    /**
     * 清缴次数
     * @return string
     */
    public function getTaxClearNum()
    {
        return $this->tax_clear_num;
    }

    /**
     * 报税属期
     * @var string $tax_month
     */
    public function setTaxMonth($tax_month)
    {
        $this->tax_month = $tax_month;
    }

    /**
     * 报税属期
     * @return string
     */
    public function getTaxMonth()
    {
        return $this->tax_month;
    }

    /**
     * 退补税用户数量
     * @var string $refund_tax_labor_num
     */
    public function setRefundTaxLaborNum($refund_tax_labor_num)
    {
        $this->refund_tax_labor_num = $refund_tax_labor_num;
    }

    /**
     * 退补税用户数量
     * @return string
     */
    public function getRefundTaxLaborNum()
    {
        return $this->refund_tax_labor_num;
    }

    /**
     * 退补税订单数量
     * @var string $refund_tax_order_num
     */
    public function setRefundTaxOrderNum($refund_tax_order_num)
    {
        $this->refund_tax_order_num = $refund_tax_order_num;
    }

    /**
     * 退补税订单数量
     * @return string
     */
    public function getRefundTaxOrderNum()
    {
        return $this->refund_tax_order_num;
    }

    /**
     * 订单总金额
     * @var string $total_amount
     */
    public function setTotalAmount($total_amount)
    {
        $this->total_amount = $total_amount;
    }

    /**
     * 订单总金额
     * @return string
     */
    public function getTotalAmount()
    {
        return $this->total_amount;
    }

    /**
     * 本批次退补税费总额
     * @var string $cur_total_refund_tax
     */
    public function setCurTotalRefundTax($cur_total_refund_tax)
    {
        $this->cur_total_refund_tax = $cur_total_refund_tax;
    }

    /**
     * 本批次退补税费总额
     * @return string
     */
    public function getCurTotalRefundTax()
    {
        return $this->cur_total_refund_tax;
    }

    /**
     * 退补税费总额
     * @var string $total_refund_tax
     */
    public function setTotalRefundTax($total_refund_tax)
    {
        $this->total_refund_tax = $total_refund_tax;
    }

    /**
     * 退补税费总额
     * @return string
     */
    public function getTotalRefundTax()
    {
        return $this->total_refund_tax;
    }

    /**
     * 历史已退补税费总额
     * @var string $history_refund_tax
     */
    public function setHistoryRefundTax($history_refund_tax)
    {
        $this->history_refund_tax = $history_refund_tax;
    }

    /**
     * 历史已退补税费总额
     * @return string
     */
    public function getHistoryRefundTax()
    {
        return $this->history_refund_tax;
    }

    /**
     * 本批次预扣税费总额
     * @var string $total_tax
     */
    public function setTotalTax($total_tax)
    {
        $this->total_tax = $total_tax;
    }

    /**
     * 本批次预扣税费总额
     * @return string
     */
    public function getTotalTax()
    {
        return $this->total_tax;
    }

    /**
     * 本批次实缴税费总额
     * @var string $receive_total_tax
     */
    public function setReceiveTotalTax($receive_total_tax)
    {
        $this->receive_total_tax = $receive_total_tax;
    }

    /**
     * 本批次实缴税费总额
     * @return string
     */
    public function getReceiveTotalTax()
    {
        return $this->receive_total_tax;
    }

    /**
     * 本批次退补给用户税费总额
     * @var string $cur_total_refund_labor_tax
     */
    public function setCurTotalRefundLaborTax($cur_total_refund_labor_tax)
    {
        $this->cur_total_refund_labor_tax = $cur_total_refund_labor_tax;
    }

    /**
     * 本批次退补给用户税费总额
     * @return string
     */
    public function getCurTotalRefundLaborTax()
    {
        return $this->cur_total_refund_labor_tax;
    }

    /**
     * 本批次退补给平台企业税费总额
     * @var string $cur_total_refund_dealer_tax
     */
    public function setCurTotalRefundDealerTax($cur_total_refund_dealer_tax)
    {
        $this->cur_total_refund_dealer_tax = $cur_total_refund_dealer_tax;
    }

    /**
     * 本批次退补给平台企业税费总额
     * @return string
     */
    public function getCurTotalRefundDealerTax()
    {
        return $this->cur_total_refund_dealer_tax;
    }

    /**
     * 本批次退补给云账户税费总额
     * @var string $cur_total_refund_broker_tax
     */
    public function setCurTotalRefundBrokerTax($cur_total_refund_broker_tax)
    {
        $this->cur_total_refund_broker_tax = $cur_total_refund_broker_tax;
    }

    /**
     * 本批次退补给云账户税费总额
     * @return string
     */
    public function getCurTotalRefundBrokerTax()
    {
        return $this->cur_total_refund_broker_tax;
    }

    /**
     * 批次号
     * @var string $batch_id
     */
    public function setBatchId($batch_id)
    {
        $this->batch_id = $batch_id;
    }

    /**
     * 批次号
     * @return string
     */
    public function getBatchId()
    {
        return $this->batch_id;
    }

    /**
     * 批次退补税状态
     * @var string $batch_refund_tax_status
     */
    public function setBatchRefundTaxStatus($batch_refund_tax_status)
    {
        $this->batch_refund_tax_status = $batch_refund_tax_status;
    }

    /**
     * 批次退补税状态
     * @return string
     */
    public function getBatchRefundTaxStatus()
    {
        return $this->batch_refund_tax_status;
    }

    /**
     * 批次生成时间
     * @var string $batch_create_time
     */
    public function setBatchCreateTime($batch_create_time)
    {
        $this->batch_create_time = $batch_create_time;
    }

    /**
     * 批次生成时间
     * @return string
     */
    public function getBatchCreateTime()
    {
        return $this->batch_create_time;
    }

    /**
     * 批次退补税成功时间
     * @var string $batch_refund_tax_finished_time
     */
    public function setBatchRefundTaxFinishedTime($batch_refund_tax_finished_time)
    {
        $this->batch_refund_tax_finished_time = $batch_refund_tax_finished_time;
    }

    /**
     * 批次退补税成功时间
     * @return string
     */
    public function getBatchRefundTaxFinishedTime()
    {
        return $this->batch_refund_tax_finished_time;
    }

    /**
     * 已完成税费退补的用户数量
     * @var string $refund_tax_finished_labor_num
     */
    public function setRefundTaxFinishedLaborNum($refund_tax_finished_labor_num)
    {
        $this->refund_tax_finished_labor_num = $refund_tax_finished_labor_num;
    }

    /**
     * 已完成税费退补的用户数量
     * @return string
     */
    public function getRefundTaxFinishedLaborNum()
    {
        return $this->refund_tax_finished_labor_num;
    }

    /**
     * 已完成的税费退补总额
     * @var string $refund_tax_finished_amount
     */
    public function setRefundTaxFinishedAmount($refund_tax_finished_amount)
    {
        $this->refund_tax_finished_amount = $refund_tax_finished_amount;
    }

    /**
     * 已完成的税费退补总额
     * @return string
     */
    public function getRefundTaxFinishedAmount()
    {
        return $this->refund_tax_finished_amount;
    }
}
