<?php

namespace Yzh;

use Yzh\Exception\ConfigException;
use Yzh\Exception\ExceptionCode;


use Yzh\Model\Realname\CollectRealNameInfoRequest;
use Yzh\Model\Realname\CollectRealNameInfoResponse;
use Yzh\Model\Realname\QueryRealNameInfoRequest;
use Yzh\Model\Realname\QueryRealNameInfoResponse;

/**
 * 实名信息收集
 * Class RealNameServiceClient
 */
class RealNameServiceClient extends BaseClient
{
    protected static $service_name = 'realnameservice';

    /**
     * 用户实名认证信息收集
     * @param CollectRealNameInfoRequest $request
     * @param null $option
     * @return CollectRealNameInfoResponse
     */
    public function collectRealNameInfo($request, $option = null)
    {
        if (!$request instanceof CollectRealNameInfoRequest) {
            throw new ConfigException("Realname->collectRealNameInfo request 必须是 Yzh\\Model\\Realname\\CollectRealNameInfoRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('POST', '/api/user/v1/collect/realname/info', $request, "Yzh\\Model\\Realname\\CollectRealNameInfoResponse", $option);
    }

    /**
     * 用户实名认证信息查询
     * @param QueryRealNameInfoRequest $request
     * @param null $option
     * @return QueryRealNameInfoResponse
     */
    public function queryRealNameInfo($request, $option = null)
    {
        if (!$request instanceof QueryRealNameInfoRequest) {
            throw new ConfigException("Realname->queryRealNameInfo request 必须是 Yzh\\Model\\Realname\\QueryRealNameInfoRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('GET', '/api/user/v1/query/realname/info', $request, "Yzh\\Model\\Realname\\QueryRealNameInfoResponse", $option);
    }
}