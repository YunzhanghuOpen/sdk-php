<?php

namespace Yzh\Model\Taxclearrefund;

use Yzh\Model\BaseModel;

/**
 * 退补税劳动者明细
 * Class LaborRefundInfo
 */
class LaborRefundInfo extends BaseModel
{
    /**
     * 劳动者姓名
     * @var string
     */
    protected $real_name;
    /**
     * 劳动者证件号
     * @var string
     */
    protected $id_card;
    /**
     * 本批次退补给劳动者税费总额
     * @var string
     */
    protected $refund_tax;
    /**
     * 退补税状态
     * @var string
     */
    protected $tax_refund_status;
    /**
     * 劳动者收款账户
     * @var string
     */
    protected $receiving_account;
    /**
     * 劳动者收款账号
     * @var string
     */
    protected $receiving_channel;
    /**
     * 退补税费时间
     * @var string
     */
    protected $refund_tax_finished_time;

    /**
     * 劳动者姓名
     * @var string $real_name
     */
    public function setRealName($real_name)
    {
        $this->real_name = $real_name;
    }

    /**
     * 劳动者姓名
     * @return string
     */
    public function getRealName()
    {
        return $this->real_name;
    }

    /**
     * 劳动者证件号
     * @var string $id_card
     */
    public function setIdCard($id_card)
    {
        $this->id_card = $id_card;
    }

    /**
     * 劳动者证件号
     * @return string
     */
    public function getIdCard()
    {
        return $this->id_card;
    }

    /**
     * 本批次退补给劳动者税费总额
     * @var string $refund_tax
     */
    public function setRefundTax($refund_tax)
    {
        $this->refund_tax = $refund_tax;
    }

    /**
     * 本批次退补给劳动者税费总额
     * @return string
     */
    public function getRefundTax()
    {
        return $this->refund_tax;
    }

    /**
     * 退补税状态
     * @var string $tax_refund_status
     */
    public function setTaxRefundStatus($tax_refund_status)
    {
        $this->tax_refund_status = $tax_refund_status;
    }

    /**
     * 退补税状态
     * @return string
     */
    public function getTaxRefundStatus()
    {
        return $this->tax_refund_status;
    }

    /**
     * 劳动者收款账户
     * @var string $receiving_account
     */
    public function setReceivingAccount($receiving_account)
    {
        $this->receiving_account = $receiving_account;
    }

    /**
     * 劳动者收款账户
     * @return string
     */
    public function getReceivingAccount()
    {
        return $this->receiving_account;
    }

    /**
     * 劳动者收款账号
     * @var string $receiving_channel
     */
    public function setReceivingChannel($receiving_channel)
    {
        $this->receiving_channel = $receiving_channel;
    }

    /**
     * 劳动者收款账号
     * @return string
     */
    public function getReceivingChannel()
    {
        return $this->receiving_channel;
    }

    /**
     * 退补税费时间
     * @var string $refund_tax_finished_time
     */
    public function setRefundTaxFinishedTime($refund_tax_finished_time)
    {
        $this->refund_tax_finished_time = $refund_tax_finished_time;
    }

    /**
     * 退补税费时间
     * @return string
     */
    public function getRefundTaxFinishedTime()
    {
        return $this->refund_tax_finished_time;
    }
}
