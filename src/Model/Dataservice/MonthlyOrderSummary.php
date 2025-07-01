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
     * 应收综合服务主体加成服务费
     * @var string
     */
    protected $broker_fee;
    /**
     * 应收余额账户支出加成服务费
     * @var string
     */
    protected $broker_real_fee;
    /**
     * 应收加成服务费抵扣金额
     * @var string
     */
    protected $broker_rebate_fee;
    /**
     * 应收用户加成服务费
     * @var string
     */
    protected $user_fee;
    /**
     * 实收综合服务主体加成服务费
     * @var string
     */
    protected $received_broker_fee;
    /**
     * 实收余额账户支出加成服务费
     * @var string
     */
    protected $received_broker_real_fee;
    /**
     * 实收加成服务费抵扣金额
     * @var string
     */
    protected $received_broker_deduct_fee;
    /**
     * 实收用户加成服务费
     * @var string
     */
    protected $received_user_fee;

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
     * 应收综合服务主体加成服务费
     * @var string $broker_fee
     */
    public function setBrokerFee($broker_fee)
    {
        $this->broker_fee = $broker_fee;
    }

    /**
     * 应收综合服务主体加成服务费
     * @return string
     */
    public function getBrokerFee()
    {
        return $this->broker_fee;
    }

    /**
     * 应收余额账户支出加成服务费
     * @var string $broker_real_fee
     */
    public function setBrokerRealFee($broker_real_fee)
    {
        $this->broker_real_fee = $broker_real_fee;
    }

    /**
     * 应收余额账户支出加成服务费
     * @return string
     */
    public function getBrokerRealFee()
    {
        return $this->broker_real_fee;
    }

    /**
     * 应收加成服务费抵扣金额
     * @var string $broker_rebate_fee
     */
    public function setBrokerRebateFee($broker_rebate_fee)
    {
        $this->broker_rebate_fee = $broker_rebate_fee;
    }

    /**
     * 应收加成服务费抵扣金额
     * @return string
     */
    public function getBrokerRebateFee()
    {
        return $this->broker_rebate_fee;
    }

    /**
     * 应收用户加成服务费
     * @var string $user_fee
     */
    public function setUserFee($user_fee)
    {
        $this->user_fee = $user_fee;
    }

    /**
     * 应收用户加成服务费
     * @return string
     */
    public function getUserFee()
    {
        return $this->user_fee;
    }

    /**
     * 实收综合服务主体加成服务费
     * @var string $received_broker_fee
     */
    public function setReceivedBrokerFee($received_broker_fee)
    {
        $this->received_broker_fee = $received_broker_fee;
    }

    /**
     * 实收综合服务主体加成服务费
     * @return string
     */
    public function getReceivedBrokerFee()
    {
        return $this->received_broker_fee;
    }

    /**
     * 实收余额账户支出加成服务费
     * @var string $received_broker_real_fee
     */
    public function setReceivedBrokerRealFee($received_broker_real_fee)
    {
        $this->received_broker_real_fee = $received_broker_real_fee;
    }

    /**
     * 实收余额账户支出加成服务费
     * @return string
     */
    public function getReceivedBrokerRealFee()
    {
        return $this->received_broker_real_fee;
    }

    /**
     * 实收加成服务费抵扣金额
     * @var string $received_broker_deduct_fee
     */
    public function setReceivedBrokerDeductFee($received_broker_deduct_fee)
    {
        $this->received_broker_deduct_fee = $received_broker_deduct_fee;
    }

    /**
     * 实收加成服务费抵扣金额
     * @return string
     */
    public function getReceivedBrokerDeductFee()
    {
        return $this->received_broker_deduct_fee;
    }

    /**
     * 实收用户加成服务费
     * @var string $received_user_fee
     */
    public function setReceivedUserFee($received_user_fee)
    {
        $this->received_user_fee = $received_user_fee;
    }

    /**
     * 实收用户加成服务费
     * @return string
     */
    public function getReceivedUserFee()
    {
        return $this->received_user_fee;
    }
}
