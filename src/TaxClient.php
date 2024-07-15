<?php

namespace Yzh;

use Yzh\Exception\ConfigException;
use Yzh\Exception\ExceptionCode;
use Yzh\Model\Tax\GetTaxFileRequest;
use Yzh\Model\Tax\GetTaxFileResponse;
use Yzh\Model\Tax\GetUserCrossRequest;
use Yzh\Model\Tax\GetUserCrossResponse;

/**
 * 个人所得税扣缴明细表
 * Class TaxClient
 */
class TaxClient extends BaseClient
{
    protected static $service_name = 'tax';

    /**
     * 下载个人所得税扣缴明细表
     * @param GetTaxFileRequest $request
     * @param null $option
     * @return GetTaxFileResponse
     */
    public function getTaxFile($request, $option = null)
    {
        if (!$request instanceof GetTaxFileRequest) {
            throw new ConfigException("Tax->getTaxFile request 必须是 Yzh\\Model\\Tax\\GetTaxFileRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('POST', '/api/tax/v1/taxfile/download', $request, "Yzh\\Model\\Tax\\GetTaxFileResponse", $option);
    }

    /**
     * 查询纳税人是否为跨集团用户
     * @param GetUserCrossRequest $request
     * @param null $option
     * @return GetUserCrossResponse
     */
    public function getUserCross($request, $option = null)
    {
        if (!$request instanceof GetUserCrossRequest) {
            throw new ConfigException("Tax->getUserCross request 必须是 Yzh\\Model\\Tax\\GetUserCrossRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('POST', '/api/tax/v1/user/cross', $request, "Yzh\\Model\\Tax\\GetUserCrossResponse", $option);
    }
}