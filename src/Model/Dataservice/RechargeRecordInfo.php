<?php

namespace Yzh\Model\Dataservice;

use Yzh\Model\BaseModel;

/**
 * 预付业务服务费记录信息
 * Class RechargeRecordInfo
 */
class RechargeRecordInfo extends BaseModel
{
    /**
     * 平台企业 ID
     * @var string
     */
    protected $dealer_id;
    /**
     * 综合服务主体 ID
     * @var string
     */
    protected $broker_id;
    /**
     * 预付业务服务费记录 ID
     * @var int64
     */
    protected $recharge_id;
    /**
     * 预付业务服务费
     * @var float64
     */
    protected $amount;
    /**
     * 实际到账金额
     * @var float64
     */
    protected $actual_amount;
    /**
     * 创建时间
     * @var string
     */
    protected $created_at;
    /**
     * 资金用途
     * @var string
     */
    protected $recharge_channel;
    /**
     * 预付业务服务费备注
     * @var string
     */
    protected $remark;
    /**
     * 平台企业付款银行账号
     * @var string
     */
    protected $recharge_account_no;

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
     * 预付业务服务费记录 ID
     * @var int64 $recharge_id
     */
    public function setRechargeId($recharge_id)
    {
        $this->recharge_id = $recharge_id;
    }

    /**
     * 预付业务服务费记录 ID
     * @return int64
     */
    public function getRechargeId()
    {
        return $this->recharge_id;
    }

    /**
     * 预付业务服务费
     * @var float64 $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * 预付业务服务费
     * @return float64
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * 实际到账金额
     * @var float64 $actual_amount
     */
    public function setActualAmount($actual_amount)
    {
        $this->actual_amount = $actual_amount;
    }

    /**
     * 实际到账金额
     * @return float64
     */
    public function getActualAmount()
    {
        return $this->actual_amount;
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
     * 资金用途
     * @var string $recharge_channel
     */
    public function setRechargeChannel($recharge_channel)
    {
        $this->recharge_channel = $recharge_channel;
    }

    /**
     * 资金用途
     * @return string
     */
    public function getRechargeChannel()
    {
        return $this->recharge_channel;
    }

    /**
     * 预付业务服务费备注
     * @var string $remark
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;
    }

    /**
     * 预付业务服务费备注
     * @return string
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * 平台企业付款银行账号
     * @var string $recharge_account_no
     */
    public function setRechargeAccountNo($recharge_account_no)
    {
        $this->recharge_account_no = $recharge_account_no;
    }

    /**
     * 平台企业付款银行账号
     * @return string
     */
    public function getRechargeAccountNo()
    {
        return $this->recharge_account_no;
    }
}
