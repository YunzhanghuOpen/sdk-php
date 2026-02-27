<?php

namespace Yzh;

use Yzh\Exception\ConfigException;
use Yzh\Exception\ExceptionCode;


use Yzh\Model\Taxclearrefund\GetClearTaxInfoRequest;
use Yzh\Model\Taxclearrefund\GetClearTaxInfoResponse;
use Yzh\Model\Taxclearrefund\GetRefundTaxInfoResponse;
use Yzh\Model\Taxclearrefund\GetClearTaxFileRequest;
use Yzh\Model\Taxclearrefund\GetClearTaxFileResponse;
use Yzh\Model\Taxclearrefund\GetRefundTaxInfoRequest;
use Yzh\Model\Taxclearrefund\RefundTaxData;
use Yzh\Model\Taxclearrefund\GetRefundTaxLaborInfoRequest;
use Yzh\Model\Taxclearrefund\GetRefundTaxLaborInfoResponse;

/**
 * 连续劳务税费退补
 * Class TaxClearRefundClient
 */
class TaxClearRefundClient extends BaseClient
{
    protected static $service_name = 'taxclearrefund';

    /**
     * 查询税费清缴完成结果
     * @param GetClearTaxInfoRequest $request
     * @param null $option
     * @return GetClearTaxInfoResponse
     */
    public function getClearTaxInfo($request, $option = null)
    {
        if (!$request instanceof GetClearTaxInfoRequest) {
            throw new ConfigException("Taxclearrefund->getClearTaxInfo request 必须是 Yzh\\Model\\Taxclearrefund\\GetClearTaxInfoRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('GET', '/api/payment/v1/query-clear-tax', $request, "Yzh\\Model\\Taxclearrefund\\GetClearTaxInfoResponse", $option);
    }

    /**
     * 查询税费清缴明细文件
     * @param GetClearTaxFileRequest $request
     * @param null $option
     * @return GetClearTaxFileResponse
     */
    public function getClearTaxFile($request, $option = null)
    {
        if (!$request instanceof GetClearTaxFileRequest) {
            throw new ConfigException("Taxclearrefund->getClearTaxFile request 必须是 Yzh\\Model\\Taxclearrefund\\GetClearTaxFileRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('GET', '/api/payment/v1/query-clear-tax/file', $request, "Yzh\\Model\\Taxclearrefund\\GetClearTaxFileResponse", $option);
    }

    /**
     * 查询税费退补完成结果
     * @param GetRefundTaxInfoRequest $request
     * @param null $option
     * @return GetRefundTaxInfoResponse
     */
    public function getRefundTaxInfo($request, $option = null)
    {
        if (!$request instanceof GetRefundTaxInfoRequest) {
            throw new ConfigException("Taxclearrefund->getRefundTaxInfo request 必须是 Yzh\\Model\\Taxclearrefund\\GetRefundTaxInfoRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('GET', '/api/payment/v1/query-clear-status', $request, "Yzh\\Model\\Taxclearrefund\\GetRefundTaxInfoResponse", $option);
    }

    /**
     * 查询税费退补涉及劳动者
     * @param GetRefundTaxLaborInfoRequest $request
     * @param null $option
     * @return GetRefundTaxLaborInfoResponse
     */
    public function getRefundTaxLaborInfo($request, $option = null)
    {
        if (!$request instanceof GetRefundTaxLaborInfoRequest) {
            throw new ConfigException("Taxclearrefund->getRefundTaxLaborInfo request 必须是 Yzh\\Model\\Taxclearrefund\\GetRefundTaxLaborInfoRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('GET', '/api/payment/v1/query-clear-labor-info', $request, "Yzh\\Model\\Taxclearrefund\\GetRefundTaxLaborInfoResponse", $option);
    }
}