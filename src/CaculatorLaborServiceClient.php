<?php

namespace Yzh;

use Yzh\Exception\ConfigException;
use Yzh\Exception\ExceptionCode;


use Yzh\Model\Caculatorlabor\LaborCaculatorRequest;
use Yzh\Model\Caculatorlabor\LaborCaculatorResponse;
use Yzh\Model\Caculatorlabor\CalcTaxRequest;
use Yzh\Model\Caculatorlabor\CalcTaxResponse;

/**
 * 连续劳务税费试算
 * Class CaculatorLaborServiceClient
 */
class CaculatorLaborServiceClient extends BaseClient
{
    protected static $service_name = 'caculatorlaborservice';

    /**
     * 连续劳务税费试算（计算器）
     * @param LaborCaculatorRequest $request
     * @param null $option
     * @return LaborCaculatorResponse
     */
    public function laborCaculator($request, $option = null)
    {
        if (!$request instanceof LaborCaculatorRequest) {
            throw new ConfigException("Caculatorlabor->laborCaculator request 必须是 Yzh\\Model\\Caculatorlabor\\LaborCaculatorRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('POST', '/api/tax/v1/labor-caculator', $request, "Yzh\\Model\\Caculatorlabor\\LaborCaculatorResponse", $option);
    }

    /**
     * 订单税费试算
     * @param CalcTaxRequest $request
     * @param null $option
     * @return CalcTaxResponse
     */
    public function calcTax($request, $option = null)
    {
        if (!$request instanceof CalcTaxRequest) {
            throw new ConfigException("Caculatorlabor->calcTax request 必须是 Yzh\\Model\\Caculatorlabor\\CalcTaxRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('POST', '/api/payment/v1/calc-tax', $request, "Yzh\\Model\\Caculatorlabor\\CalcTaxResponse", $option);
    }
}