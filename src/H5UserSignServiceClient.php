<?php

namespace Yzh;

use Yzh\Exception\ConfigException;
use Yzh\Exception\ExceptionCode;
use Yzh\Model\H5usersign\H5UserPresignRequest;
use Yzh\Model\H5usersign\H5UserPresignResponse;
use Yzh\Model\H5usersign\H5UserSignRequest;
use Yzh\Model\H5usersign\H5UserSignResponse;
use Yzh\Model\H5usersign\GetH5UserSignStatusRequest;
use Yzh\Model\H5usersign\GetH5UserSignStatusResponse;
use Yzh\Model\H5usersign\H5UserReleaseRequest;
use Yzh\Model\H5usersign\H5UserReleaseResponse;

/**
 * H5 签约
 * Class H5UserSignServiceClient
 */
class H5UserSignServiceClient extends BaseClient
{
    protected static $service_name = 'h5usersignservice';

    /**
     * 预申请签约
     * @param H5UserPresignRequest $request
     * @param null $option
     * @return H5UserPresignResponse
     */
    public function h5UserPresign($request, $option = null)
    {
        if (!$request instanceof H5UserPresignRequest) {
            throw new ConfigException("H5usersign->h5UserPresign request 必须是 Yzh\\Model\\H5usersign\\H5UserPresignRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('POST', '/api/sdk/v1/presign', $request, "Yzh\\Model\\H5usersign\\H5UserPresignResponse", $option);
    }

    /**
     * 申请签约
     * @param H5UserSignRequest $request
     * @param null $option
     * @return H5UserSignResponse
     */
    public function h5UserSign($request, $option = null)
    {
        if (!$request instanceof H5UserSignRequest) {
            throw new ConfigException("H5usersign->h5UserSign request 必须是 Yzh\\Model\\H5usersign\\H5UserSignRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('GET', '/api/sdk/v1/sign/h5', $request, "Yzh\\Model\\H5usersign\\H5UserSignResponse", $option);
    }

    /**
     * 获取用户签约状态
     * @param GetH5UserSignStatusRequest $request
     * @param null $option
     * @return GetH5UserSignStatusResponse
     */
    public function getH5UserSignStatus($request, $option = null)
    {
        if (!$request instanceof GetH5UserSignStatusRequest) {
            throw new ConfigException("H5usersign->getH5UserSignStatus request 必须是 Yzh\\Model\\H5usersign\\GetH5UserSignStatusRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('GET', '/api/sdk/v1/sign/user/status', $request, "Yzh\\Model\\H5usersign\\GetH5UserSignStatusResponse", $option);
    }

    /**
     * 用户解约（测试账号专用接口）
     * @param H5UserReleaseRequest $request
     * @param null $option
     * @return H5UserReleaseResponse
     */
    public function h5UserRelease($request, $option = null)
    {
        if (!$request instanceof H5UserReleaseRequest) {
            throw new ConfigException("H5usersign->h5UserRelease request 必须是 Yzh\\Model\\H5usersign\\H5UserReleaseRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('POST', '/api/sdk/v1/sign/release', $request, "Yzh\\Model\\H5usersign\\H5UserReleaseResponse", $option);
    }
}