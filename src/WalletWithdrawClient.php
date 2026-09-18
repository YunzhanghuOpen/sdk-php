<?php

namespace Yzh;

use Yzh\Exception\ConfigException;
use Yzh\Exception\ExceptionCode;


use Yzh\Model\Walletwithdraw\CreateWalletWithdrawRequest;
use Yzh\Model\Walletwithdraw\CreateWalletWithdrawResponse;
use Yzh\Model\Walletwithdraw\QueryWalletWithdrawRequest;
use Yzh\Model\Walletwithdraw\QueryWalletWithdrawResponse;
use Yzh\Model\Walletwithdraw\CancelWalletWithdrawRequest;
use Yzh\Model\Walletwithdraw\CancelWalletWithdrawResponse;
use Yzh\Model\Walletwithdraw\RetryWalletWithdrawRequest;
use Yzh\Model\Walletwithdraw\RetryWalletWithdrawResponse;
use Yzh\Model\Walletwithdraw\GetWalletWithdrawReceiptFileRequest;
use Yzh\Model\Walletwithdraw\GetWalletWithdrawReceiptFileResponse;

/**
 * 钱包余额提现
 * Class WalletWithdrawClient
 */
class WalletWithdrawClient extends BaseClient
{
    protected static $service_name = 'walletwithdraw';

    /**
     * 发起钱包余额提现
     * @param CreateWalletWithdrawRequest $request
     * @param null $option
     * @return CreateWalletWithdrawResponse
     */
    public function createWalletWithdraw($request, $option = null)
    {
        if (!$request instanceof CreateWalletWithdrawRequest) {
            throw new ConfigException("Walletwithdraw->createWalletWithdraw request 必须是 Yzh\\Model\\Walletwithdraw\\CreateWalletWithdrawRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('POST', '/api/payout/v1/create', $request, "Yzh\\Model\\Walletwithdraw\\CreateWalletWithdrawResponse", $option);
    }

    /**
     * 查询钱包余额提现结果
     * @param QueryWalletWithdrawRequest $request
     * @param null $option
     * @return QueryWalletWithdrawResponse
     */
    public function queryWalletWithdraw($request, $option = null)
    {
        if (!$request instanceof QueryWalletWithdrawRequest) {
            throw new ConfigException("Walletwithdraw->queryWalletWithdraw request 必须是 Yzh\\Model\\Walletwithdraw\\QueryWalletWithdrawRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('GET', '/api/payout/v1/query', $request, "Yzh\\Model\\Walletwithdraw\\QueryWalletWithdrawResponse", $option);
    }

    /**
     * 取消挂起的钱包余额提现订单
     * @param CancelWalletWithdrawRequest $request
     * @param null $option
     * @return CancelWalletWithdrawResponse
     */
    public function cancelWalletWithdraw($request, $option = null)
    {
        if (!$request instanceof CancelWalletWithdrawRequest) {
            throw new ConfigException("Walletwithdraw->cancelWalletWithdraw request 必须是 Yzh\\Model\\Walletwithdraw\\CancelWalletWithdrawRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('POST', '/api/payout/v1/cancel-order', $request, "Yzh\\Model\\Walletwithdraw\\CancelWalletWithdrawResponse", $option);
    }

    /**
     * 重试挂起的钱包余额提现订单
     * @param RetryWalletWithdrawRequest $request
     * @param null $option
     * @return RetryWalletWithdrawResponse
     */
    public function retryWalletWithdraw($request, $option = null)
    {
        if (!$request instanceof RetryWalletWithdrawRequest) {
            throw new ConfigException("Walletwithdraw->retryWalletWithdraw request 必须是 Yzh\\Model\\Walletwithdraw\\RetryWalletWithdrawRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('POST', '/api/payout/v1/retry-order', $request, "Yzh\\Model\\Walletwithdraw\\RetryWalletWithdrawResponse", $option);
    }

    /**
     * 查询钱包余额提现电子回单
     * @param GetWalletWithdrawReceiptFileRequest $request
     * @param null $option
     * @return GetWalletWithdrawReceiptFileResponse
     */
    public function getWalletWithdrawReceiptFile($request, $option = null)
    {
        if (!$request instanceof GetWalletWithdrawReceiptFileRequest) {
            throw new ConfigException("Walletwithdraw->getWalletWithdrawReceiptFile request 必须是 Yzh\\Model\\Walletwithdraw\\GetWalletWithdrawReceiptFileRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('GET', '/api/payout/v1/receipt-file', $request, "Yzh\\Model\\Walletwithdraw\\GetWalletWithdrawReceiptFileResponse", $option);
    }
}
