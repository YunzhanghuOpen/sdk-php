<?php

namespace Yzh;
use Yzh\Model\Payment\CreateBankpayOrderRequest;
use Yzh\Model\Payment\CreateBankpayOrderReply;
use Yzh\Model\Payment\CreateAlipayOrderRequest;
use Yzh\Model\Payment\CreateAlipayOrderReply;
use Yzh\Model\Payment\CreateWxpayOrderRequest;
use Yzh\Model\Payment\CreateWxpayOrderReply;
use Yzh\Model\Payment\GetOrderRequest;
use Yzh\Model\Payment\GetOrderReply;
use Yzh\Model\Payment\GetDealerVARechargeAccountRequest;
use Yzh\Model\Payment\GetDealerVARechargeAccountResponse;
use Yzh\Model\Payment\ListAccountRequest;
use Yzh\Model\Payment\ListAccountResponse;
use Yzh\Model\Payment\GetEleReceiptFileRequest;
use Yzh\Model\Payment\GetEleReceiptFileResponse;
use Yzh\Model\Payment\CancelOrderRequest;
use Yzh\Model\Payment\CancelOrderResponse;

/**
 * 实时下单接口
 * Class PaymentClient
 */
class PaymentClient extends BaseClient
{
    protected static $service_name = 'payment';

    public function __construct($config)
    {
        if(!$config instanceof Config){
            throw new \Exception('config 参数必须是 Yzh\\Config 实例');
        }
        $this->config = $config;
        $this->setEnv($config->env);
        parent::__construct();
    }

    /**
     * 银行卡实时下单
     * @param CreateBankpayOrderRequest $request
     * @param null $option
     * @return CreateBankpayOrderReply
     */
    public function createBankpayOrder($request, $option = null)
    {
        if (!$request instanceof CreateBankpayOrderRequest) {
            throw new \Exception("Payment->createBankpayOrder request 必须是 Yzh\\Model\\Payment\\CreateBankpayOrderRequest 实例");
        }
        return $this->send('POST', '/api/payment/v1/order-bankpay', $request, "Yzh\\Model\\Payment\\CreateBankpayOrderReply", $option);
    }

    /**
     * 支付宝实时下单
     * @param CreateAlipayOrderRequest $request
     * @param null $option
     * @return CreateAlipayOrderReply
     */
    public function createAlipayOrder($request, $option = null)
    {
        if (!$request instanceof CreateAlipayOrderRequest) {
            throw new \Exception("Payment->createAlipayOrder request 必须是 Yzh\\Model\\Payment\\CreateAlipayOrderRequest 实例");
        }
        return $this->send('POST', '/api/payment/v1/order-alipay', $request, "Yzh\\Model\\Payment\\CreateAlipayOrderReply", $option);
    }

    /**
     * 微信实时下单
     * @param CreateWxpayOrderRequest $request
     * @param null $option
     * @return CreateWxpayOrderReply
     */
    public function createWxpayOrder($request, $option = null)
    {
        if (!$request instanceof CreateWxpayOrderRequest) {
            throw new \Exception("Payment->createWxpayOrder request 必须是 Yzh\\Model\\Payment\\CreateWxpayOrderRequest 实例");
        }
        return $this->send('POST', '/api/payment/v1/order-wxpay', $request, "Yzh\\Model\\Payment\\CreateWxpayOrderReply", $option);
    }

    /**
     * 查询单笔订单信息
     * @param GetOrderRequest $request
     * @param null $option
     * @return GetOrderReply
     */
    public function getOrder($request, $option = null)
    {
        if (!$request instanceof GetOrderRequest) {
            throw new \Exception("Payment->getOrder request 必须是 Yzh\\Model\\Payment\\GetOrderRequest 实例");
        }
        return $this->send('GET', '/api/payment/v1/query-order', $request, "Yzh\\Model\\Payment\\GetOrderReply", $option);
    }

    /**
     * 查询平台企业 VA 账户信息
     * @param GetDealerVARechargeAccountRequest $request
     * @param null $option
     * @return GetDealerVARechargeAccountResponse
     */
    public function getDealerVARechargeAccount($request, $option = null)
    {
        if (!$request instanceof GetDealerVARechargeAccountRequest) {
            throw new \Exception("Payment->getDealerVARechargeAccount request 必须是 Yzh\\Model\\Payment\\GetDealerVARechargeAccountRequest 实例");
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
            throw new \Exception("Payment->listAccount request 必须是 Yzh\\Model\\Payment\\ListAccountRequest 实例");
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
            throw new \Exception("Payment->getEleReceiptFile request 必须是 Yzh\\Model\\Payment\\GetEleReceiptFileRequest 实例");
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
            throw new \Exception("Payment->cancelOrder request 必须是 Yzh\\Model\\Payment\\CancelOrderRequest 实例");
        }
        return $this->send('POST', '/api/payment/v1/order/fail', $request, "Yzh\\Model\\Payment\\CancelOrderResponse", $option);
    }
}