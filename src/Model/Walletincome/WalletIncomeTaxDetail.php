<?php

namespace Yzh\Model\Walletincome;

use Yzh\Model\BaseModel;

/**
 * 计税信息
 * Class WalletIncomeTaxDetail
 */
class WalletIncomeTaxDetail extends BaseModel
{
    /**
     * 个税税率
     * @var string
     */
    protected $personal_tax_rate;
    /**
     * 个税速算扣除数
     * @var string
     */
    protected $deduct_tax;
    /**
     * 基本减除费用扣除
     * @var string
     */
    protected $basic_deducted;
    /**
     * 税费总额及明细
     * @var WalletIncomeTaxParty
     */
    protected $total;
    /**
     * 劳动者承担税费
     * @var WalletIncomeTaxParty
     */
    protected $user;
    /**
     * 平台企业承担税费
     * @var WalletIncomeTaxParty
     */
    protected $dealer;
    /**
     * 云账户承担税费
     * @var WalletIncomeTaxParty
     */
    protected $broker;

    /**
     * 个税税率
     * @var string $personal_tax_rate
     */
    public function setPersonalTaxRate($personal_tax_rate)
    {
        $this->personal_tax_rate = $personal_tax_rate;
    }

    /**
     * 个税税率
     * @return string
     */
    public function getPersonalTaxRate()
    {
        return $this->personal_tax_rate;
    }

    /**
     * 个税速算扣除数
     * @var string $deduct_tax
     */
    public function setDeductTax($deduct_tax)
    {
        $this->deduct_tax = $deduct_tax;
    }

    /**
     * 个税速算扣除数
     * @return string
     */
    public function getDeductTax()
    {
        return $this->deduct_tax;
    }

    /**
     * 基本减除费用扣除
     * @var string $basic_deducted
     */
    public function setBasicDeducted($basic_deducted)
    {
        $this->basic_deducted = $basic_deducted;
    }

    /**
     * 基本减除费用扣除
     * @return string
     */
    public function getBasicDeducted()
    {
        return $this->basic_deducted;
    }

    /**
     * 税费总额及明细
     * @var WalletIncomeTaxParty $total
     */
    public function setTotal($total)
    {
        $this->total = new WalletIncomeTaxParty($total);
    }

    /**
     * 税费总额及明细
     * @return WalletIncomeTaxParty
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * 劳动者承担税费
     * @var WalletIncomeTaxParty $user
     */
    public function setUser($user)
    {
        $this->user = new WalletIncomeTaxParty($user);
    }

    /**
     * 劳动者承担税费
     * @return WalletIncomeTaxParty
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * 平台企业承担税费
     * @var WalletIncomeTaxParty $dealer
     */
    public function setDealer($dealer)
    {
        $this->dealer = new WalletIncomeTaxParty($dealer);
    }

    /**
     * 平台企业承担税费
     * @return WalletIncomeTaxParty
     */
    public function getDealer()
    {
        return $this->dealer;
    }

    /**
     * 云账户承担税费
     * @var WalletIncomeTaxParty $broker
     */
    public function setBroker($broker)
    {
        $this->broker = new WalletIncomeTaxParty($broker);
    }

    /**
     * 云账户承担税费
     * @return WalletIncomeTaxParty
     */
    public function getBroker()
    {
        return $this->broker;
    }
}
