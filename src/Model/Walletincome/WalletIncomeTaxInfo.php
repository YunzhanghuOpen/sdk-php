<?php

namespace Yzh\Model\Walletincome;

use Yzh\Model\BaseModel;

/**
 * 税费信息
 * Class WalletIncomeTaxInfo
 */
class WalletIncomeTaxInfo extends BaseModel
{
    /**
     * 下单计税信息
     * @var WalletIncomeTaxDetail
     */
    protected $original;
    /**
     * 当前计税信息
     * @var WalletIncomeTaxDetail
     */
    protected $current;

    /**
     * 下单计税信息
     * @var WalletIncomeTaxDetail $original
     */
    public function setOriginal($original)
    {
        $this->original = new WalletIncomeTaxDetail($original);
    }

    /**
     * 下单计税信息
     * @return WalletIncomeTaxDetail
     */
    public function getOriginal()
    {
        return $this->original;
    }

    /**
     * 当前计税信息
     * @var WalletIncomeTaxDetail $current
     */
    public function setCurrent($current)
    {
        $this->current = new WalletIncomeTaxDetail($current);
    }

    /**
     * 当前计税信息
     * @return WalletIncomeTaxDetail
     */
    public function getCurrent()
    {
        return $this->current;
    }
}
