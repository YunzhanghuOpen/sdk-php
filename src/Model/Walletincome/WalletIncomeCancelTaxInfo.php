<?php

namespace Yzh\Model\Walletincome;

use Yzh\Model\BaseModel;

/**
 * 取消计税退还税费信息
 * Class WalletIncomeCancelTaxInfo
 */
class WalletIncomeCancelTaxInfo extends BaseModel
{
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
