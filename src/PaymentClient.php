<?php

namespace Yzh;

use Yzh\Exception\ConfigException;
use Yzh\Exception\ExceptionCode;

use Yzh\Model\Payment\CreateBankpayOrderRequest;
use Yzh\Model\Payment\CreateBankpayOrderResponse;
use Yzh\Model\Payment\CreateAlipayOrderRequest;
use Yzh\Model\Payment\CreateAlipayOrderResponse;
use Yzh\Model\Payment\CreateWxpayOrderRequest;
use Yzh\Model\Payment\CreateWxpayOrderResponse;
use Yzh\Model\Payment\GetOrderRequest;
use Yzh\Model\Payment\GetOrderResponse;
use Yzh\Model\Payment\GetDealerVARechargeAccountRequest;
use Yzh\Model\Payment\GetDealerVARechargeAccountResponse;
use Yzh\Model\Payment\ListAccountRequest;
use Yzh\Model\Payment\ListAccountResponse;
use Yzh\Model\Payment\GetEleReceiptFileRequest;
use Yzh\Model\Payment\GetEleReceiptFileResponse;
use Yzh\Model\Payment\CancelOrderRequest;
use Yzh\Model\Payment\CancelOrderResponse;
use Yzh\Model\Payment\CreateBatchOrderRequest;
use Yzh\Model\Payment\CreateBatchOrderResponse;
use Yzh\Model\Payment\ConfirmBatchOrderRequest;
use Yzh\Model\Payment\ConfirmBatchOrderResponse;
use Yzh\Model\Payment\CancelBatchOrderRequest;
use Yzh\Model\Payment\CancelBatchOrderResponse;

/**
 * 实时支付
 * Class PaymentClient
 */
class PaymentClient extends BaseClient
{
    protected static $service_name = 'payment';

    /**
     * 银行卡实时支付
     * @param CreateBankpayOrderRequest $request
     * @param null $option
     * @return CreateBankpayOrderResponse
     */
    public function createBankpayOrder($request, $option = null)
    {
        if (!$request instanceof CreateBankpayOrderRequest) {
            throw new ConfigException("Payment->createBankpayOrder request 必须是 Yzh\\Model\\Payment\\CreateBankpayOrderRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('POST', '/api/payment/v1/order-bankpay', $request, "Yzh\\Model\\Payment\\CreateBankpayOrderResponse", $option);
    }

    /**
     * 支付宝实时支付
     * @param CreateAlipayOrderRequest $request
     * @param null $option
     * @return CreateAlipayOrderResponse
     */
    public function createAlipayOrder($request, $option = null)
    {
        if (!$request instanceof CreateAlipayOrderRequest) {
            throw new ConfigException("Payment->createAlipayOrder request 必须是 Yzh\\Model\\Payment\\CreateAlipayOrderRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('POST', '/api/payment/v1/order-alipay', $request, "Yzh\\Model\\Payment\\CreateAlipayOrderResponse", $option);
    }

    /**
     * 微信实时支付
     * @param CreateWxpayOrderRequest $request
     * @param null $option
     * @return CreateWxpayOrderResponse
     */
    public function createWxpayOrder($request, $option = null)
    {
        if (!$request instanceof CreateWxpayOrderRequest) {
            throw new ConfigException("Payment->createWxpayOrder request 必须是 Yzh\\Model\\Payment\\CreateWxpayOrderRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('POST', '/api/payment/v1/order-wxpay', $request, "Yzh\\Model\\Payment\\CreateWxpayOrderResponse", $option);
    }

    /**
     * 查询单笔订单信息
     * @param GetOrderRequest $request
     * @param null $option
     * @return GetOrderResponse
     */
    public function getOrder($request, $option = null)
    {
        if (!$request instanceof GetOrderRequest) {
            throw new ConfigException("Payment->getOrder request 必须是 Yzh\\Model\\Payment\\GetOrderRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('GET', '/api/payment/v1/query-order', $request, "Yzh\\Model\\Payment\\GetOrderResponse", $option);
    }

    /**
     * 查询平台企业汇款信息
     * @param GetDealerVARechargeAccountRequest $request
     * @param null $option
     * @return GetDealerVARechargeAccountResponse
     */
    public function getDealerVARechargeAccount($request, $option = null)
    {
        if (!$request instanceof GetDealerVARechargeAccountRequest) {
            throw new ConfigException("Payment->getDealerVARechargeAccount request 必须是 Yzh\\Model\\Payment\\GetDealerVARechargeAccountRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('GET', '/api/payment/v1/va-account', $request, "Yzh\\Model\\Payment\\GetDealerVARechargeAccountResponse", $option);
    }

    /**
     * 查询平台企业余额
     * @param ListAccountRequest $request
     * @param null $option
     * @return ListAccountResponse
     */
    public function listAccount($request, $option = null)
    {
        if (!$request instanceof ListAccountRequest) {
            throw new ConfigException("Payment->listAccount request 必须是 Yzh\\Model\\Payment\\ListAccountRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('GET', '/api/payment/v1/query-accounts', $request, "Yzh\\Model\\Payment\\ListAccountResponse", $option);
    }

    /**
     * 查询电子回单
     * @param GetEleReceiptFileRequest $request
     * @param null $option
     * @return GetEleReceiptFileResponse
     */
    public function getEleReceiptFile($request, $option = null)
    {
        if (!$request instanceof GetEleReceiptFileRequest) {
            throw new ConfigException("Payment->getEleReceiptFile request 必须是 Yzh\\Model\\Payment\\GetEleReceiptFileRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('GET', '/api/payment/v1/receipt/file', $request, "Yzh\\Model\\Payment\\GetEleReceiptFileResponse", $option);
    }

    /**
     * 取消待支付订单
     * @param CancelOrderRequest $request
     * @param null $option
     * @return CancelOrderResponse
     */
    public function cancelOrder($request, $option = null)
    {
        if (!$request instanceof CancelOrderRequest) {
            throw new ConfigException("Payment->cancelOrder request 必须是 Yzh\\Model\\Payment\\CancelOrderRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('POST', '/api/payment/v1/order/fail', $request, "Yzh\\Model\\Payment\\CancelOrderResponse", $option);
    }

    /**
     * 批次下单
     * @param CreateBatchOrderRequest $request
     * @param null $option
     * @return CreateBatchOrderResponse
     */
    public function createBatchOrder($request, $option = null)
    {
        if (!$request instanceof CreateBatchOrderRequest) {
            throw new ConfigException("Payment->createBatchOrder request 必须是 Yzh\\Model\\Payment\\CreateBatchOrderRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('POST', '/api/payment/v1/order-batch', $request, "Yzh\\Model\\Payment\\CreateBatchOrderResponse", $option);
    }

    /**
     * 批次确认
     * @param ConfirmBatchOrderRequest $request
     * @param null $option
     * @return ConfirmBatchOrderResponse
     */
    public function confirmBatchOrder($request, $option = null)
    {
        if (!$request instanceof ConfirmBatchOrderRequest) {
            throw new ConfigException("Payment->confirmBatchOrder request 必须是 Yzh\\Model\\Payment\\ConfirmBatchOrderRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('POST', '/api/payment/v1/confirm-batch', $request, "Yzh\\Model\\Payment\\ConfirmBatchOrderResponse", $option);
    }

    /**
     * 批次撤销
     * @param CancelBatchOrderRequest $request
     * @param null $option
     * @return CancelBatchOrderResponse
     */
    public function cancelBatchOrder($request, $option = null)
    {
        if (!$request instanceof CancelBatchOrderRequest) {
            throw new ConfigException("Payment->cancelBatchOrder request 必须是 Yzh\\Model\\Payment\\CancelBatchOrderRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('POST', '/api/payment/v1/cancel-batch', $request, "Yzh\\Model\\Payment\\CancelBatchOrderResponse", $option);
    }
}