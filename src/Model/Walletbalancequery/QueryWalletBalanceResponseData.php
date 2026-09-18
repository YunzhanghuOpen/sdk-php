<?php

namespace Yzh\Model\Walletbalancequery;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 查询钱包余额返回
 * Class QueryWalletBalanceResponseData
 */
class QueryWalletBalanceResponseData extends BaseModel implements ResponseDataInterface
{
    /**
     * 钱包总余额
     * @var string
     */
    protected $total_balance;
    /**
     * 可用余额
     * @var string
     */
    protected $available_balance;
    /**
     * 冻结余额
     * @var string
     */
    protected $frozen_balance;
    /**
     * 版本号
     * @var string
     */
    protected $version;

    /**
     * 钱包总余额
     * @var string $total_balance
     */
    public function setTotalBalance($total_balance)
    {
        $this->total_balance = $total_balance;
    }

    /**
     * 钱包总余额
     * @return string
     */
    public function getTotalBalance()
    {
        return $this->total_balance;
    }

    /**
     * 可用余额
     * @var string $available_balance
     */
    public function setAvailableBalance($available_balance)
    {
        $this->available_balance = $available_balance;
    }

    /**
     * 可用余额
     * @return string
     */
    public function getAvailableBalance()
    {
        return $this->available_balance;
    }

    /**
     * 冻结余额
     * @var string $frozen_balance
     */
    public function setFrozenBalance($frozen_balance)
    {
        $this->frozen_balance = $frozen_balance;
    }

    /**
     * 冻结余额
     * @return string
     */
    public function getFrozenBalance()
    {
        return $this->frozen_balance;
    }

    /**
     * 版本号
     * @var string $version
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }

    /**
     * 版本号
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }
}
