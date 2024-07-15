<?php

namespace Yzh;

use Yzh\Exception\ConfigException;
use Yzh\Exception\ExceptionCode;
use Yzh\Model\Bizlicgxv2h5\GxV2H5GetStartUrlRequest;
use Yzh\Model\Bizlicgxv2h5\GxV2H5GetStartUrlResponse;
use Yzh\Model\Bizlicgxv2h5\GxV2H5GetAicStatusRequest;
use Yzh\Model\Bizlicgxv2h5\GxV2H5GetAicStatusResponse;

/**
 * 云账户共享大额 H5
 * Class BizlicGxV2H5ServiceClient
 */
class BizlicGxV2H5ServiceClient extends BaseClient
{
    protected static $service_name = 'bizlicgxv2h5service';

    /**
     * 预启动
     * @param GxV2H5GetStartUrlRequest $request
     * @param null $option
     * @return GxV2H5GetStartUrlResponse
     */
    public function gxV2H5GetStartUrl($request, $option = null)
    {
        if (!$request instanceof GxV2H5GetStartUrlRequest) {
            throw new ConfigException("Bizlicgxv2h5->gxV2H5GetStartUrl request 必须是 Yzh\\Model\\Bizlicgxv2h5\\GxV2H5GetStartUrlRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('GET', '/api/aic/sharing-economy/h5/v1/h5url', $request, "Yzh\\Model\\Bizlicgxv2h5\\GxV2H5GetStartUrlResponse", $option);
    }

    /**
     * 查询个体工商户状态
     * @param GxV2H5GetAicStatusRequest $request
     * @param null $option
     * @return GxV2H5GetAicStatusResponse
     */
    public function gxV2H5GetAicStatus($request, $option = null)
    {
        if (!$request instanceof GxV2H5GetAicStatusRequest) {
            throw new ConfigException("Bizlicgxv2h5->gxV2H5GetAicStatus request 必须是 Yzh\\Model\\Bizlicgxv2h5\\GxV2H5GetAicStatusRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('GET', '/api/aic/sharing-economy/h5/v1/status', $request, "Yzh\\Model\\Bizlicgxv2h5\\GxV2H5GetAicStatusResponse", $option);
    }
}