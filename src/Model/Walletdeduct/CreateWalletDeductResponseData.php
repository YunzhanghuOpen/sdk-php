<?php

namespace Yzh\Model\Walletdeduct;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 申请钱包余额扣减返回
 * Class CreateWalletDeductResponseData
 */
class CreateWalletDeductResponseData extends BaseModel implements ResponseDataInterface
{
    /**
     * 平台企业订单号
     * @var string
     */
    protected $order_id;
    /**
     * 云账户钱包余额扣减订单号
     * @var string
     */
    protected $ref;
    /**
     * 扣减金额
     * @var string
     */
    protected $amount;

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
     * 云账户钱包余额扣减订单号
     * @var string $ref
     */
    public function setRef($ref)
    {
        $this->ref = $ref;
    }

    /**
     * 云账户钱包余额扣减订单号
     * @return string
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * 扣减金额
     * @var string $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * 扣减金额
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }
}
