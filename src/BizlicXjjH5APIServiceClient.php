<?php

namespace Yzh;

use Yzh\Exception\ConfigException;
use Yzh\Exception\ExceptionCode;
use Yzh\Model\Bizlicxjjh5api\H5PreCollectBizlicMsgRequest;
use Yzh\Model\Bizlicxjjh5api\H5PreCollectBizlicMsgResponse;
use Yzh\Model\Bizlicxjjh5api\H5APIGetStartUrlRequest;
use Yzh\Model\Bizlicxjjh5api\H5APIGetStartUrlResponse;
use Yzh\Model\Bizlicxjjh5api\H5APIEcoCityAicStatusRequest;
use Yzh\Model\Bizlicxjjh5api\H5APIEcoCityAicStatusResponse;

/**
 * 云账户新经济 H5+API
 * Class BizlicXjjH5APIServiceClient
 */
class BizlicXjjH5APIServiceClient extends BaseClient
{
    protected static $service_name = 'bizlicxjjh5apiservice';

    /**
     * 工商实名信息录入
     * @param H5PreCollectBizlicMsgRequest $request
     * @param null $option
     * @return H5PreCollectBizlicMsgResponse
     */
    public function h5PreCollectBizlicMsg($request, $option = null)
    {
        if (!$request instanceof H5PreCollectBizlicMsgRequest) {
            throw new ConfigException("Bizlicxjjh5api->h5PreCollectBizlicMsg request 必须是 Yzh\\Model\\Bizlicxjjh5api\\H5PreCollectBizlicMsgRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('POST', '/api/aic/new-economy/api-h5/v1/collect', $request, "Yzh\\Model\\Bizlicxjjh5api\\H5PreCollectBizlicMsgResponse", $option);
    }

    /**
     * 预启动
     * @param H5APIGetStartUrlRequest $request
     * @param null $option
     * @return H5APIGetStartUrlResponse
     */
    public function h5APIGetStartUrl($request, $option = null)
    {
        if (!$request instanceof H5APIGetStartUrlRequest) {
            throw new ConfigException("Bizlicxjjh5api->h5APIGetStartUrl request 必须是 Yzh\\Model\\Bizlicxjjh5api\\H5APIGetStartUrlRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('GET', '/api/aic/new-economy/api-h5/v1/h5url', $request, "Yzh\\Model\\Bizlicxjjh5api\\H5APIGetStartUrlResponse", $option);
    }

    /**
     * 查询个体工商户状态
     * @param H5APIEcoCityAicStatusRequest $request
     * @param null $option
     * @return H5APIEcoCityAicStatusResponse
     */
    public function h5APIEcoCityAicStatus($request, $option = null)
    {
        if (!$request instanceof H5APIEcoCityAicStatusRequest) {
            throw new ConfigException("Bizlicxjjh5api->h5APIEcoCityAicStatus request 必须是 Yzh\\Model\\Bizlicxjjh5api\\H5APIEcoCityAicStatusRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('GET', '/api/aic/new-economy/api-h5/v1/status', $request, "Yzh\\Model\\Bizlicxjjh5api\\H5APIEcoCityAicStatusResponse", $option);
    }
}