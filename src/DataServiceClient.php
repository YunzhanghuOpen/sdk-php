<?php

namespace Yzh;
use Yzh\Model\DataService\ListDailyOrderRequest;
use Yzh\Model\DataService\ListDailyOrderResponse;
use Yzh\Model\DataService\GetDailyOrderFileRequest;
use Yzh\Model\DataService\GetDailyOrderFileResponse;
use Yzh\Model\DataService\GetDailyOrderFileV2Request;
use Yzh\Model\DataService\GetDailyOrderFileV2Response;
use Yzh\Model\DataService\ListDailyBillRequest;
use Yzh\Model\DataService\ListDailyBillResponse;
use Yzh\Model\DataService\GetDailyBillFileV2Request;
use Yzh\Model\DataService\GetDailyBillFileV2Response;
use Yzh\Model\DataService\ListDealerRechargeRecordV2Request;
use Yzh\Model\RechargeRecordInfo;
use Yzh\Model\DataService\ListBalanceDailyStatementRequest;
use Yzh\Model\DataService\ListBalanceDailyStatementResponse;

/**
 * 数据接口
 * Class DataServiceClient
 */
class DataServiceClient extends BaseClient
{
    protected static $service_name = 'dataservice';

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
     * 查询日订单数据
     * @param ListDailyOrderRequest $request
     * @param null $option
     * @return ListDailyOrderResponse
     */
    public function listDailyOrder($request, $option = null)
    {
        if (!$request instanceof ListDailyOrderRequest) {
            throw new \Exception("DataService->listDailyOrder request 必须是 Yzh\\Model\\DataService\\ListDailyOrderRequest 实例");
        }
        return $this->send('GET', '/api/dataservice/v1/orders', $request, "Yzh\\Model\\DataService\\ListDailyOrderResponse", $option);
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
            throw new \Exception("DataService->getDailyOrderFile request 必须是 Yzh\\Model\\DataService\\GetDailyOrderFileRequest 实例");
        }
        return $this->send('GET', '/api/dataservice/v1/order/downloadurl', $request, "Yzh\\Model\\DataService\\GetDailyOrderFileResponse", $option);
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
            throw new \Exception("DataService->getDailyOrderFileV2 request 必须是 Yzh\\Model\\DataService\\GetDailyOrderFileV2Request 实例");
        }
        return $this->send('GET', '/api/dataservice/v1/order/day/url', $request, "Yzh\\Model\\DataService\\GetDailyOrderFileV2Response", $option);
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
            throw new \Exception("DataService->listDailyBill request 必须是 Yzh\\Model\\DataService\\ListDailyBillRequest 实例");
        }
        return $this->send('GET', '/api/dataservice/v1/bills', $request, "Yzh\\Model\\DataService\\ListDailyBillResponse", $option);
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
            throw new \Exception("DataService->getDailyBillFileV2 request 必须是 Yzh\\Model\\DataService\\GetDailyBillFileV2Request 实例");
        }
        return $this->send('GET', '/api/dataservice/v2/bill/downloadurl', $request, "Yzh\\Model\\DataService\\GetDailyBillFileV2Response", $option);
    }

    /**
     * 查询平台企业预付业务服务费记录
     * @param ListDealerRechargeRecordV2Request $request
     * @param null $option
     * @return []RechargeRecordInfo
     */
    public function listDealerRechargeRecordV2($request, $option = null)
    {
        if (!$request instanceof ListDealerRechargeRecordV2Request) {
            throw new \Exception("DataService->listDealerRechargeRecordV2 request 必须是 Yzh\\Model\\DataService\\ListDealerRechargeRecordV2Request 实例");
        }
        return $this->send('GET', '/api/dataservice/v2/recharge-record', $request, "Yzh\\Model\\DataService\\ListDealerRechargeRecordV2Response", $option);
    }

    /**
     * 获取余额日账单
     * @param ListBalanceDailyStatementRequest $request
     * @param null $option
     * @return ListBalanceDailyStatementResponse
     */
    public function listBalanceDailyStatement($request, $option = null)
    {
        if (!$request instanceof ListBalanceDailyStatementRequest) {
            throw new \Exception("DataService->listBalanceDailyStatement request 必须是 Yzh\\Model\\DataService\\ListBalanceDailyStatementRequest 实例");
        }
        return $this->send('GET', '/api/dataservice/v1/statements-daily', $request, "Yzh\\Model\\DataService\\ListBalanceDailyStatementResponse", $option);
    }
}