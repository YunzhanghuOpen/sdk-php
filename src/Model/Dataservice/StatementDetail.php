<?php

namespace Yzh\Model\Dataservice;

use Yzh\Model\BaseModel;

/**
 * 余额账单信息详情
 * Class StatementDetail
 */
class StatementDetail extends BaseModel
{
    /**
     * 账单 ID
     * @var string
     */
    protected $statement_id;
    /**
     * 账单日期
     * @var string
     */
    protected $statement_date;
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
     * 综合服务主体名称
     * @var string
     */
    protected $broker_product_name;
    /**
     * 平台企业名称
     * @var string
     */
    protected $dealer_product_name;
    /**
     * 业务类型
     * @var string
     */
    protected $biz_type;
    /**
     * 账单金额
     * @var string
     */
    protected $total_money;
    /**
     * 订单金额
     * @var string
     */
    protected $amount;
    /**
     * 退汇金额
     * @var string
     */
    protected $reex_amount;
    /**
     * 加成服务费金额
     * @var string
     */
    protected $fee_amount;
    /**
     * 加成服务费抵扣金额
     * @var string
     */
    protected $deduct_rebate_fee_amount;
    /**
     * 冲补金额
     * @var string
     */
    protected $money_adjust;
    /**
     * 账单状态
     * @var string
     */
    protected $status;
    /**
     * 开票状态
     * @var string
     */
    protected $invoice_status;
    /**
     * 项目 ID
     * @var string
     */
    protected $project_id;
    /**
     * 项目名称
     * @var string
     */
    protected $project_name;

    /**
     * 账单 ID
     * @var string $statement_id
     */
    public function setStatementId($statement_id)
    {
        $this->statement_id = $statement_id;
    }

    /**
     * 账单 ID
     * @return string
     */
    public function getStatementId()
    {
        return $this->statement_id;
    }

    /**
     * 账单日期
     * @var string $statement_date
     */
    public function setStatementDate($statement_date)
    {
        $this->statement_date = $statement_date;
    }

    /**
     * 账单日期
     * @return string
     */
    public function getStatementDate()
    {
        return $this->statement_date;
    }

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
     * 综合服务主体名称
     * @var string $broker_product_name
     */
    public function setBrokerProductName($broker_product_name)
    {
        $this->broker_product_name = $broker_product_name;
    }

    /**
     * 综合服务主体名称
     * @return string
     */
    public function getBrokerProductName()
    {
        return $this->broker_product_name;
    }

    /**
     * 平台企业名称
     * @var string $dealer_product_name
     */
    public function setDealerProductName($dealer_product_name)
    {
        $this->dealer_product_name = $dealer_product_name;
    }

    /**
     * 平台企业名称
     * @return string
     */
    public function getDealerProductName()
    {
        return $this->dealer_product_name;
    }

    /**
     * 业务类型
     * @var string $biz_type
     */
    public function setBizType($biz_type)
    {
        $this->biz_type = $biz_type;
    }

    /**
     * 业务类型
     * @return string
     */
    public function getBizType()
    {
        return $this->biz_type;
    }

    /**
     * 账单金额
     * @var string $total_money
     */
    public function setTotalMoney($total_money)
    {
        $this->total_money = $total_money;
    }

    /**
     * 账单金额
     * @return string
     */
    public function getTotalMoney()
    {
        return $this->total_money;
    }

    /**
     * 订单金额
     * @var string $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * 订单金额
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * 退汇金额
     * @var string $reex_amount
     */
    public function setReexAmount($reex_amount)
    {
        $this->reex_amount = $reex_amount;
    }

    /**
     * 退汇金额
     * @return string
     */
    public function getReexAmount()
    {
        return $this->reex_amount;
    }

    /**
     * 加成服务费金额
     * @var string $fee_amount
     */
    public function setFeeAmount($fee_amount)
    {
        $this->fee_amount = $fee_amount;
    }

    /**
     * 加成服务费金额
     * @return string
     */
    public function getFeeAmount()
    {
        return $this->fee_amount;
    }

    /**
     * 加成服务费抵扣金额
     * @var string $deduct_rebate_fee_amount
     */
    public function setDeductRebateFeeAmount($deduct_rebate_fee_amount)
    {
        $this->deduct_rebate_fee_amount = $deduct_rebate_fee_amount;
    }

    /**
     * 加成服务费抵扣金额
     * @return string
     */
    public function getDeductRebateFeeAmount()
    {
        return $this->deduct_rebate_fee_amount;
    }

    /**
     * 冲补金额
     * @var string $money_adjust
     */
    public function setMoneyAdjust($money_adjust)
    {
        $this->money_adjust = $money_adjust;
    }

    /**
     * 冲补金额
     * @return string
     */
    public function getMoneyAdjust()
    {
        return $this->money_adjust;
    }

    /**
     * 账单状态
     * @var string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * 账单状态
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * 开票状态
     * @var string $invoice_status
     */
    public function setInvoiceStatus($invoice_status)
    {
        $this->invoice_status = $invoice_status;
    }

    /**
     * 开票状态
     * @return string
     */
    public function getInvoiceStatus()
    {
        return $this->invoice_status;
    }

    /**
     * 项目 ID
     * @var string $project_id
     */
    public function setProjectId($project_id)
    {
        $this->project_id = $project_id;
    }

    /**
     * 项目 ID
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * 项目名称
     * @var string $project_name
     */
    public function setProjectName($project_name)
    {
        $this->project_name = $project_name;
    }

    /**
     * 项目名称
     * @return string
     */
    public function getProjectName()
    {
        return $this->project_name;
    }
}
