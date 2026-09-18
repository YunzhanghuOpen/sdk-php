<?php

namespace Yzh;

use Yzh\Exception\ConfigException;
use Yzh\Exception\ExceptionCode;


use Yzh\Model\Walletincome\CreateWalletIncomeRequest;
use Yzh\Model\Walletincome\CreateWalletIncomeResponse;
use Yzh\Model\Walletincome\QueryWalletIncomeRequest;
use Yzh\Model\Walletincome\QueryWalletIncomeResponse;
use Yzh\Model\Walletincome\CancelWalletIncomeRequest;
use Yzh\Model\Walletincome\CancelWalletIncomeResponse;
use Yzh\Model\Walletincome\RetryWalletIncomeRequest;
use Yzh\Model\Walletincome\RetryWalletIncomeResponse;

/**
 * 钱包余额入账
 * Class WalletIncomeClient
 */
class WalletIncomeClient extends BaseClient
{
    protected static $service_name = 'walletincome';

    /**
     * 发起钱包余额入账
     * @param CreateWalletIncomeRequest $request
     * @param null $option
     * @return CreateWalletIncomeResponse
     */
    public function createWalletIncome($request, $option = null)
    {
        if (!$request instanceof CreateWalletIncomeRequest) {
            throw new ConfigException("Walletincome->createWalletIncome request 必须是 Yzh\\Model\\Walletincome\\CreateWalletIncomeRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('POST', '/api/income/v1/create', $request, "Yzh\\Model\\Walletincome\\CreateWalletIncomeResponse", $option);
    }

    /**
     * 查询钱包余额入账结果
     * @param QueryWalletIncomeRequest $request
     * @param null $option
     * @return QueryWalletIncomeResponse
     */
    public function queryWalletIncome($request, $option = null)
    {
        if (!$request instanceof QueryWalletIncomeRequest) {
            throw new ConfigException("Walletincome->queryWalletIncome request 必须是 Yzh\\Model\\Walletincome\\QueryWalletIncomeRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('GET', '/api/income/v1/query', $request, "Yzh\\Model\\Walletincome\\QueryWalletIncomeResponse", $option);
    }

    /**
     * 取消钱包收入计税订单
     * @param CancelWalletIncomeRequest $request
     * @param null $option
     * @return CancelWalletIncomeResponse
     */
    public function cancelWalletIncome($request, $option = null)
    {
        if (!$request instanceof CancelWalletIncomeRequest) {
            throw new ConfigException("Walletincome->cancelWalletIncome request 必须是 Yzh\\Model\\Walletincome\\CancelWalletIncomeRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('POST', '/api/income/v1/cancel-order', $request, "Yzh\\Model\\Walletincome\\CancelWalletIncomeResponse", $option);
    }

    /**
     * 重试挂起的计税订单
     * @param RetryWalletIncomeRequest $request
     * @param null $option
     * @return RetryWalletIncomeResponse
     */
    public function retryWalletIncome($request, $option = null)
    {
        if (!$request instanceof RetryWalletIncomeRequest) {
            throw new ConfigException("Walletincome->retryWalletIncome request 必须是 Yzh\\Model\\Walletincome\\RetryWalletIncomeRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('POST', '/api/income/v1/retry-order', $request, "Yzh\\Model\\Walletincome\\RetryWalletIncomeResponse", $option);
    }
}
