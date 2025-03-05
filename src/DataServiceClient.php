<?php

namespace Yzh;

use Yzh\Exception\ConfigException;
use Yzh\Exception\ExceptionCode;


use Yzh\Model\Dataservice\ListDailyOrderRequest;
use Yzh\Model\Dataservice\ListDailyOrderResponse;
use Yzh\Model\Dataservice\ListDailyOrderV2Request;
use Yzh\Model\Dataservice\ListDailyOrderV2Response;
use Yzh\Model\Dataservice\GetDailyOrderFileRequest;
use Yzh\Model\Dataservice\GetDailyOrderFileResponse;
use Yzh\Model\Dataservice\GetDailyOrderFileV2Request;
use Yzh\Model\Dataservice\GetDailyOrderFileV2Response;
use Yzh\Model\Dataservice\ListDailyBillRequest;
use Yzh\Model\Dataservice\ListDailyBillResponse;
use Yzh\Model\Dataservice\GetDailyBillFileV2Request;
use Yzh\Model\Dataservice\GetDailyBillFileV2Response;
use Yzh\Model\Dataservice\ListDealerRechargeRecordV2Request;
use Yzh\Model\Dataservice\ListDealerRechargeRecordV2Response;
use Yzh\Model\Dataservice\ListBalanceDailyStatementRequest;
use Yzh\Model\Dataservice\ListBalanceDailyStatementResponse;
use Yzh\Model\Dataservice\ListDailyOrderSummaryRequest;
use Yzh\Model\Dataservice\ListDailyOrderSummaryResponse;
use Yzh\Model\Dataservice\ListMonthlyOrderSummaryRequest;
use Yzh\Model\Dataservice\ListMonthlyOrderSummaryResponse;

/**
 * 对账文件获取
 * Class DataServiceClient
 */
class DataServiceClient extends BaseClient
{
    protected static $service_name = 'dataservice';

    /**
     * 查询日订单数据
     * @param ListDailyOrderRequest $request
     * @param null $option
     * @return ListDailyOrderResponse
     */
    public function listDailyOrder($request, $option = null)
    {
        if (!$request instanceof ListDailyOrderRequest) {
            throw new ConfigException("Dataservice->listDailyOrder request 必须是 Yzh\\Model\\Dataservice\\ListDailyOrderRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('GET', '/api/dataservice/v1/orders', $request, "Yzh\\Model\\Dataservice\\ListDailyOrderResponse", $option);
    }

    /**
     * 查询日订单数据（支付和退款订单）
     * @param ListDailyOrderV2Request $request
     * @param null $option
     * @return ListDailyOrderV2Response
     */
    public function listDailyOrderV2($request, $option = null)
    {
        if (!$request instanceof ListDailyOrderV2Request) {
            throw new ConfigException("Dataservice->listDailyOrderV2 request 必须是 Yzh\\Model\\Dataservice\\ListDailyOrderV2Request 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('GET', '/api/dataservice/v2/orders', $request, "Yzh\\Model\\Dataservice\\ListDailyOrderV2Response", $option);
    }

    /**
     * 查询日订单文件
     * @param GetDailyOrderFileRequest $request
     * @param null $option
     * @return GetDailyOrderFileResponse
     */
    public function getDailyOrderFile($request, $option = null)
    {
        if (!$request instanceof GetDailyOrderFileRequest) {
            throw new ConfigException("Dataservice->getDailyOrderFile request 必须是 Yzh\\Model\\Dataservice\\GetDailyOrderFileRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('GET', '/api/dataservice/v1/order/downloadurl', $request, "Yzh\\Model\\Dataservice\\GetDailyOrderFileResponse", $option);
    }

    /**
     * 查询日订单文件（支付和退款订单）
     * @param GetDailyOrderFileV2Request $request
     * @param null $option
     * @return GetDailyOrderFileV2Response
     */
    public function getDailyOrderFileV2($request, $option = null)
    {
        if (!$request instanceof GetDailyOrderFileV2Request) {
            throw new ConfigException("Dataservice->getDailyOrderFileV2 request 必须是 Yzh\\Model\\Dataservice\\GetDailyOrderFileV2Request 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('GET', '/api/dataservice/v1/order/day/url', $request, "Yzh\\Model\\Dataservice\\GetDailyOrderFileV2Response", $option);
    }

    /**
     * 查询日流水数据
     * @param ListDailyBillRequest $request
     * @param null $option
     * @return ListDailyBillResponse
     */
    public function listDailyBill($request, $option = null)
    {
        if (!$request instanceof ListDailyBillRequest) {
            throw new ConfigException("Dataservice->listDailyBill request 必须是 Yzh\\Model\\Dataservice\\ListDailyBillRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('GET', '/api/dataservice/v1/bills', $request, "Yzh\\Model\\Dataservice\\ListDailyBillResponse", $option);
    }

    /**
     * 查询日流水文件
     * @param GetDailyBillFileV2Request $request
     * @param null $option
     * @return GetDailyBillFileV2Response
     */
    public function getDailyBillFileV2($request, $option = null)
    {
        if (!$request instanceof GetDailyBillFileV2Request) {
            throw new ConfigException("Dataservice->getDailyBillFileV2 request 必须是 Yzh\\Model\\Dataservice\\GetDailyBillFileV2Request 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('GET', '/api/dataservice/v2/bill/downloadurl', $request, "Yzh\\Model\\Dataservice\\GetDailyBillFileV2Response", $option);
    }

    /**
     * 查询平台企业预付业务服务费记录
     * @param ListDealerRechargeRecordV2Request $request
     * @param null $option
     * @return ListDealerRechargeRecordV2Response
     */
    public function listDealerRechargeRecordV2($request, $option = null)
    {
        if (!$request instanceof ListDealerRechargeRecordV2Request) {
            throw new ConfigException("Dataservice->listDealerRechargeRecordV2 request 必须是 Yzh\\Model\\Dataservice\\ListDealerRechargeRecordV2Request 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('GET', '/api/dataservice/v2/recharge-record', $request, "Yzh\\Model\\Dataservice\\ListDealerRechargeRecordV2Response", $option);
    }

    /**
     * 查询余额日账单数据
     * @param ListBalanceDailyStatementRequest $request
     * @param null $option
     * @return ListBalanceDailyStatementResponse
     */
    public function listBalanceDailyStatement($request, $option = null)
    {
        if (!$request instanceof ListBalanceDailyStatementRequest) {
            throw new ConfigException("Dataservice->listBalanceDailyStatement request 必须是 Yzh\\Model\\Dataservice\\ListBalanceDailyStatementRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('GET', '/api/dataservice/v1/statements-daily', $request, "Yzh\\Model\\Dataservice\\ListBalanceDailyStatementResponse", $option);
    }

    /**
     * 查询日订单汇总数据
     * @param ListDailyOrderSummaryRequest $request
     * @param null $option
     * @return ListDailyOrderSummaryResponse
     */
    public function listDailyOrderSummary($request, $option = null)
    {
        if (!$request instanceof ListDailyOrderSummaryRequest) {
            throw new ConfigException("Dataservice->listDailyOrderSummary request 必须是 Yzh\\Model\\Dataservice\\ListDailyOrderSummaryRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('GET', '/api/dataservice/v2/order/daily-summary', $request, "Yzh\\Model\\Dataservice\\ListDailyOrderSummaryResponse", $option);
    }

    /**
     * 查询月订单汇总数据
     * @param ListMonthlyOrderSummaryRequest $request
     * @param null $option
     * @return ListMonthlyOrderSummaryResponse
     */
    public function listMonthlyOrderSummary($request, $option = null)
    {
        if (!$request instanceof ListMonthlyOrderSummaryRequest) {
            throw new ConfigException("Dataservice->listMonthlyOrderSummary request 必须是 Yzh\\Model\\Dataservice\\ListMonthlyOrderSummaryRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('GET', '/api/dataservice/v2/order/monthly-summary', $request, "Yzh\\Model\\Dataservice\\ListMonthlyOrderSummaryResponse", $option);
    }
}