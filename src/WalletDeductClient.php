<?php

namespace Yzh;

use Yzh\Exception\ConfigException;
use Yzh\Exception\ExceptionCode;


use Yzh\Model\Walletdeduct\CreateWalletDeductRequest;
use Yzh\Model\Walletdeduct\CreateWalletDeductResponse;
use Yzh\Model\Walletdeduct\QueryWalletDeductRequest;
use Yzh\Model\Walletdeduct\QueryWalletDeductResponse;
use Yzh\Model\Walletdeduct\CompleteWalletDeductRequest;
use Yzh\Model\Walletdeduct\CompleteWalletDeductResponse;

/**
 * 钱包余额扣减
 * Class WalletDeductClient
 */
class WalletDeductClient extends BaseClient
{
    protected static $service_name = 'walletdeduct';

    /**
     * 申请钱包余额扣减
     * @param CreateWalletDeductRequest $request
     * @param null $option
     * @return CreateWalletDeductResponse
     */
    public function createWalletDeduct($request, $option = null)
    {
        if (!$request instanceof CreateWalletDeductRequest) {
            throw new ConfigException("Walletdeduct->createWalletDeduct request 必须是 Yzh\\Model\\Walletdeduct\\CreateWalletDeductRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('POST', '/api/payout/v1/direct/create', $request, "Yzh\\Model\\Walletdeduct\\CreateWalletDeductResponse", $option);
    }

    /**
     * 查询钱包余额扣减申请结果
     * @param QueryWalletDeductRequest $request
     * @param null $option
     * @return QueryWalletDeductResponse
     */
    public function queryWalletDeduct($request, $option = null)
    {
        if (!$request instanceof QueryWalletDeductRequest) {
            throw new ConfigException("Walletdeduct->queryWalletDeduct request 必须是 Yzh\\Model\\Walletdeduct\\QueryWalletDeductRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('GET', '/api/payout/v1/direct/query', $request, "Yzh\\Model\\Walletdeduct\\QueryWalletDeductResponse", $option);
    }

    /**
     * 提交钱包余额扣减结果
     * @param CompleteWalletDeductRequest $request
     * @param null $option
     * @return CompleteWalletDeductResponse
     */
    public function completeWalletDeduct($request, $option = null)
    {
        if (!$request instanceof CompleteWalletDeductRequest) {
            throw new ConfigException("Walletdeduct->completeWalletDeduct request 必须是 Yzh\\Model\\Walletdeduct\\CompleteWalletDeductRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('POST', '/api/payout/v1/direct/complete', $request, "Yzh\\Model\\Walletdeduct\\CompleteWalletDeductResponse", $option);
    }
}
