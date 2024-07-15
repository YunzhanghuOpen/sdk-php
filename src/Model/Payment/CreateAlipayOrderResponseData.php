<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 支付宝实时支付返回
 * Class CreateAlipayOrderResponseData
 */
class CreateAlipayOrderResponseData extends BaseModel implements ResponseDataInterface
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
}
