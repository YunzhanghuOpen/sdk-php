<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseModel;

/**
 * 批次下单返回订单信息
 * Class BatchOrderResult
 */
class BatchOrderResult extends BaseModel
{
    /**
     * 平台企业订单号
     * @var string
     */
    protected $order_id;
    /**
     * 综合服务平台流水号
     * @var string
     */
    protected $ref;
    /**
     * 订单金额
     * @var string
     */
    protected $pay;
    /**
     * 下单状态
     * @var string
     */
    protected $status;
    /**
     * 下单失败原因
     * @var BatchOrderErrorReasons[]
     */
    protected $error_reasons;

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
     * 综合服务平台流水号
     * @var string $ref
     */
    public function setRef($ref)
    {
        $this->ref = $ref;
    }


    /**
     * 综合服务平台流水号
     * @return string
     */
    public function getRef()
    {
        return $this->ref;
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
     * 下单状态
     * @var string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }


    /**
     * 下单状态
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * 下单失败原因
     * @var array $items
     */
    public function setErrorReasons($items)
    {
        $this->error_reasons = array();
        foreach ($items as $k => $v) {
            array_push($this->error_reasons, new BatchOrderErrorReasons($v));
        }
    }


    /**
     * 下单失败原因
     * @return BatchOrderErrorReasons[]
     */
    public function getErrorReasons()
    {
        return $this->error_reasons;
    }
}
