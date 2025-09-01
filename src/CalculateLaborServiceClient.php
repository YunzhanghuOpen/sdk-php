<?php

namespace Yzh;

use Yzh\Exception\ConfigException;
use Yzh\Exception\ExceptionCode;


use Yzh\Model\Calculatelabor\LaborCaculatorRequest;
use Yzh\Model\Calculatelabor\LaborCaculatorResponse;
use Yzh\Model\Calculatelabor\CalcTaxRequest;
use Yzh\Model\Calculatelabor\CalcTaxResponse;

/**
 * 连续劳务税费试算
 * Class CalculateLaborServiceClient
 */
class CalculateLaborServiceClient extends BaseClient
{
    protected static $service_name = 'calculatelaborservice';

    /**
     * 连续劳务税费试算（计算器）
     * @param LaborCaculatorRequest $request
     * @param null $option
     * @return LaborCaculatorResponse
     */
    public function laborCaculator($request, $option = null)
    {
        if (!$request instanceof LaborCaculatorRequest) {
            throw new ConfigException("Calculatelabor->laborCaculator request 必须是 Yzh\\Model\\Calculatelabor\\LaborCaculatorRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('POST', '/api/tax/v1/labor-caculator', $request, "Yzh\\Model\\Calculatelabor\\LaborCaculatorResponse", $option);
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
            throw new ConfigException("Calculatelabor->calcTax request 必须是 Yzh\\Model\\Calculatelabor\\CalcTaxRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('POST', '/api/payment/v1/calc-tax', $request, "Yzh\\Model\\Calculatelabor\\CalcTaxResponse", $option);
    }
}