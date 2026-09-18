<?php

namespace Yzh;

use Yzh\Exception\ConfigException;
use Yzh\Exception\ExceptionCode;


use Yzh\Model\Walletbalancequery\QueryWalletBalanceRequest;
use Yzh\Model\Walletbalancequery\QueryWalletBalanceResponse;

/**
 * 钱包余额查询
 * Class WalletBalanceQueryClient
 */
class WalletBalanceQueryClient extends BaseClient
{
    protected static $service_name = 'walletbalancequery';

    /**
     * 查询钱包余额
     * @param QueryWalletBalanceRequest $request
     * @param null $option
     * @return QueryWalletBalanceResponse
     */
    public function queryWalletBalance($request, $option = null)
    {
        if (!$request instanceof QueryWalletBalanceRequest) {
            throw new ConfigException("Wallet->queryWalletBalance request 必须是 Yzh\\Model\\Walletbalancequery\\QueryWalletBalanceRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('POST', '/api/wallet/v1/balance', $request, "Yzh\\Model\\Walletbalancequery\\QueryWalletBalanceResponse", $option);
    }
}
