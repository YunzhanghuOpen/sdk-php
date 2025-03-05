<?php

namespace Yzh\Model\Dataservice;

use Yzh\Model\BaseModel;

/**
 * 月订单汇总详情
 * Class MonthlyOrderSummary
 */
class MonthlyOrderSummary extends BaseModel
{
    /**
     * 订单数量
     * @var int32
     */
    protected $order_num;
    /**
     * 订单金额
     * @var string
     */
    protected $pay;
    /**
     * 加成服务费金额
     * @var string
     */
    protected $broker_fee;
    /**
     * 加成服务费实收金额
     * @var string
     */
    protected $broker_real_fee;
    /**
     * 已抵扣加成服务费金额
     * @var string
     */
    protected $broker_rebate_fee;
    /**
     * 用户加成服务费金额
     * @var string
     */
    protected $user_fee;

    /**
     * 订单数量
     * @var int32 $order_num
     */
    public function setOrderNum($order_num)
    {
        $this->order_num = $order_num;
    }

    /**
     * 订单数量
     * @return int32
     */
    public function getOrderNum()
    {
        return $this->order_num;
    }

    /**
     * 订单金额
     * @var string $pay
     */
    public function setPay($pay)
    {
        $this->pay = $pay;
    }

    /**
     * 订单金额
     * @return string
     */
    public function getPay()
    {
        return $this->pay;
    }

    /**
     * 加成服务费金额
     * @var string $broker_fee
     */
    public function setBrokerFee($broker_fee)
    {
        $this->broker_fee = $broker_fee;
    }

    /**
     * 加成服务费金额
     * @return string
     */
    public function getBrokerFee()
    {
        return $this->broker_fee;
    }

    /**
     * 加成服务费实收金额
     * @var string $broker_real_fee
     */
    public function setBrokerRealFee($broker_real_fee)
    {
        $this->broker_real_fee = $broker_real_fee;
    }

    /**
     * 加成服务费实收金额
     * @return string
     */
    public function getBrokerRealFee()
    {
        return $this->broker_real_fee;
    }

    /**
     * 已抵扣加成服务费金额
     * @var string $broker_rebate_fee
     */
    public function setBrokerRebateFee($broker_rebate_fee)
    {
        $this->broker_rebate_fee = $broker_rebate_fee;
    }

    /**
     * 已抵扣加成服务费金额
     * @return string
     */
    public function getBrokerRebateFee()
    {
        return $this->broker_rebate_fee;
    }

    /**
     * 用户加成服务费金额
     * @var string $user_fee
     */
    public function setUserFee($user_fee)
    {
        $this->user_fee = $user_fee;
    }

    /**
     * 用户加成服务费金额
     * @return string
     */
    public function getUserFee()
    {
        return $this->user_fee;
    }
}
