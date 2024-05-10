<?php

namespace Yzh;

use Yzh\Exception\ConfigException;
use Yzh\Exception\ExceptionCode;

use Yzh\Model\Bizlicgxv2h5api\GxV2H5APIPreCollectBizlicMsgRequest;
use Yzh\Model\Bizlicgxv2h5api\GxV2H5APIPreCollectBizlicMsgResponse;
use Yzh\Model\Bizlicgxv2h5api\GxV2H5APIGetStartUrlRequest;
use Yzh\Model\Bizlicgxv2h5api\GxV2H5APIGetStartUrlResponse;
use Yzh\Model\Bizlicgxv2h5api\GxV2H5APIGetAicStatusRequest;
use Yzh\Model\Bizlicgxv2h5api\GxV2H5APIGetAicStatusResponse;

/**
 * 云账户共享大额 H5+API
 * Class BizlicGxV2H5APIServiceClient
 */
class BizlicGxV2H5APIServiceClient extends BaseClient
{
    protected static $service_name = 'bizlicgxv2h5apiservice';

    /**
     * 工商实名信息录入
     * @param GxV2H5APIPreCollectBizlicMsgRequest $request
     * @param null $option
     * @return GxV2H5APIPreCollectBizlicMsgResponse
     */
    public function gxV2H5APIPreCollectBizlicMsg($request, $option = null)
    {
        if (!$request instanceof GxV2H5APIPreCollectBizlicMsgRequest) {
            throw new ConfigException("Bizlicgxv2h5api->gxV2H5APIPreCollectBizlicMsg request 必须是 Yzh\\Model\\Bizlicgxv2h5api\\GxV2H5APIPreCollectBizlicMsgRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('POST', '/api/aic/sharing-economy/api-h5/v1/collect', $request, "Yzh\\Model\\Bizlicgxv2h5api\\GxV2H5APIPreCollectBizlicMsgResponse", $option);
    }

    /**
     * 预启动
     * @param GxV2H5APIGetStartUrlRequest $request
     * @param null $option
     * @return GxV2H5APIGetStartUrlResponse
     */
    public function gxV2H5APIGetStartUrl($request, $option = null)
    {
        if (!$request instanceof GxV2H5APIGetStartUrlRequest) {
            throw new ConfigException("Bizlicgxv2h5api->gxV2H5APIGetStartUrl request 必须是 Yzh\\Model\\Bizlicgxv2h5api\\GxV2H5APIGetStartUrlRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('GET', '/api/aic/sharing-economy/api-h5/v1/h5url', $request, "Yzh\\Model\\Bizlicgxv2h5api\\GxV2H5APIGetStartUrlResponse", $option);
    }

    /**
     * 查询个体工商户状态
     * @param GxV2H5APIGetAicStatusRequest $request
     * @param null $option
     * @return GxV2H5APIGetAicStatusResponse
     */
    public function gxV2H5APIGetAicStatus($request, $option = null)
    {
        if (!$request instanceof GxV2H5APIGetAicStatusRequest) {
            throw new ConfigException("Bizlicgxv2h5api->gxV2H5APIGetAicStatus request 必须是 Yzh\\Model\\Bizlicgxv2h5api\\GxV2H5APIGetAicStatusRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('GET', '/api/aic/sharing-economy/api-h5/v1/status', $request, "Yzh\\Model\\Bizlicgxv2h5api\\GxV2H5APIGetAicStatusResponse", $option);
    }
}