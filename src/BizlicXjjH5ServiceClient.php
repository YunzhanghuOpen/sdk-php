<?php

namespace Yzh;

use Yzh\Exception\ConfigException;
use Yzh\Exception\ExceptionCode;
use Yzh\Model\Bizlicxjjh5\H5GetStartUrlRequest;
use Yzh\Model\Bizlicxjjh5\H5GetStartUrlResponse;
use Yzh\Model\Bizlicxjjh5\H5EcoCityAicStatusRequest;
use Yzh\Model\Bizlicxjjh5\H5EcoCityAicStatusResponse;

/**
 * 云账户新经济 H5
 * Class BizlicXjjH5ServiceClient
 */
class BizlicXjjH5ServiceClient extends BaseClient
{
    protected static $service_name = 'bizlicxjjh5service';

    /**
     * 预启动
     * @param H5GetStartUrlRequest $request
     * @param null $option
     * @return H5GetStartUrlResponse
     */
    public function h5GetStartUrl($request, $option = null)
    {
        if (!$request instanceof H5GetStartUrlRequest) {
            throw new ConfigException("Bizlicxjjh5->h5GetStartUrl request 必须是 Yzh\\Model\\Bizlicxjjh5\\H5GetStartUrlRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('GET', '/api/aic/new-economy/h5/v1/h5url', $request, "Yzh\\Model\\Bizlicxjjh5\\H5GetStartUrlResponse", $option);
    }

    /**
     * 查询个体工商户状态
     * @param H5EcoCityAicStatusRequest $request
     * @param null $option
     * @return H5EcoCityAicStatusResponse
     */
    public function h5EcoCityAicStatus($request, $option = null)
    {
        if (!$request instanceof H5EcoCityAicStatusRequest) {
            throw new ConfigException("Bizlicxjjh5->h5EcoCityAicStatus request 必须是 Yzh\\Model\\Bizlicxjjh5\\H5EcoCityAicStatusRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('GET', '/api/aic/new-economy/h5/v1/status', $request, "Yzh\\Model\\Bizlicxjjh5\\H5EcoCityAicStatusResponse", $option);
    }
}