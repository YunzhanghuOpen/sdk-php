<?php

namespace Yzh;

use Yzh\Exception\ConfigException;
use Yzh\Exception\ExceptionCode;


use Yzh\Model\Faceauth\ApplyFaceAuthRequest;
use Yzh\Model\Faceauth\ApplyFaceAuthResponse;
use Yzh\Model\Faceauth\GetFaceAuthResultRequest;
use Yzh\Model\Faceauth\GetFaceAuthResultResponse;

/**
 * 人脸识别实名核验
 * Class FaceAuthServiceClient
 */
class FaceAuthServiceClient extends BaseClient
{
    protected static $service_name = 'faceauthservice';

    /**
     * 申请人脸识别实名核验
     * @param ApplyFaceAuthRequest $request
     * @param null $option
     * @return ApplyFaceAuthResponse
     */
    public function applyFaceAuth($request, $option = null)
    {
        if (!$request instanceof ApplyFaceAuthRequest) {
            throw new ConfigException("Faceauth->applyFaceAuth request 必须是 Yzh\\Model\\Faceauth\\ApplyFaceAuthRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('POST', '/api/user/v1/face/auth', $request, "Yzh\\Model\\Faceauth\\ApplyFaceAuthResponse", $option);
    }

    /**
     * 查询人脸识别实名核验结果
     * @param GetFaceAuthResultRequest $request
     * @param null $option
     * @return GetFaceAuthResultResponse
     */
    public function getFaceAuthResult($request, $option = null)
    {
        if (!$request instanceof GetFaceAuthResultRequest) {
            throw new ConfigException("Faceauth->getFaceAuthResult request 必须是 Yzh\\Model\\Faceauth\\GetFaceAuthResultRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('GET', '/api/user/v1/face/auth_result', $request, "Yzh\\Model\\Faceauth\\GetFaceAuthResultResponse", $option);
    }
}