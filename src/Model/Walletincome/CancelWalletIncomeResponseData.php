<?php

namespace Yzh\Model\Walletincome;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 取消钱包收入计税订单返回
 * Class CancelWalletIncomeResponseData
 */
class CancelWalletIncomeResponseData extends BaseModel implements ResponseDataInterface
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
     * 云账户钱包入账订单号
     * @var string
     */
    protected $ref;
    /**
     * 取消钱包收入计税订单号
     * @var string
     */
    protected $cancel_order_id;
    /**
     * 取消结果类型
     * @var string
     */
    protected $cancel_result_type;
    /**
     * 取消明细
     * @var WalletIncomeCancelDetail
     */
    protected $cancel_detail;

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
     * 云账户钱包入账订单号
     * @var string $ref
     */
    public function setRef($ref)
    {
        $this->ref = $ref;
    }

    /**
     * 云账户钱包入账订单号
     * @return string
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * 取消钱包收入计税订单号
     * @var string $cancel_order_id
     */
    public function setCancelOrderId($cancel_order_id)
    {
        $this->cancel_order_id = $cancel_order_id;
    }

    /**
     * 取消钱包收入计税订单号
     * @return string
     */
    public function getCancelOrderId()
    {
        return $this->cancel_order_id;
    }

    /**
     * 取消结果类型
     * @var string $cancel_result_type
     */
    public function setCancelResultType($cancel_result_type)
    {
        $this->cancel_result_type = $cancel_result_type;
    }

    /**
     * 取消结果类型
     * @return string
     */
    public function getCancelResultType()
    {
        return $this->cancel_result_type;
    }

    /**
     * 取消明细
     * @var WalletIncomeCancelDetail $cancel_detail
     */
    public function setCancelDetail($cancel_detail)
    {
        $this->cancel_detail = new WalletIncomeCancelDetail($cancel_detail);
    }

    /**
     * 取消明细
     * @return WalletIncomeCancelDetail
     */
    public function getCancelDetail()
    {
        return $this->cancel_detail;
    }
}
