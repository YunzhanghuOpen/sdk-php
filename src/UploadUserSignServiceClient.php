<?php

namespace Yzh;

use Yzh\Exception\ConfigException;
use Yzh\Exception\ExceptionCode;

use Yzh\Model\Uploadusersign\UploadUserSignRequest;
use Yzh\Model\Uploadusersign\UploadUserSignResponse;
use Yzh\Model\Uploadusersign\GetUploadUserSignStatusRequest;
use Yzh\Model\Uploadusersign\GetUploadUserSignStatusResponse;

/**
 * 签约信息上传
 * Class UploadUserSignServiceClient
 */
class UploadUserSignServiceClient extends BaseClient
{
    protected static $service_name = 'uploadusersignservice';

    /**
     * 用户签约信息上传
     * @param UploadUserSignRequest $request
     * @param null $option
     * @return UploadUserSignResponse
     */
    public function uploadUserSign($request, $option = null)
    {
        if (!$request instanceof UploadUserSignRequest) {
            throw new ConfigException("Uploadusersign->uploadUserSign request 必须是 Yzh\\Model\\Uploadusersign\\UploadUserSignRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('POST', '/api/payment/v1/sign/user', $request, "Yzh\\Model\\Uploadusersign\\UploadUserSignResponse", $option);
    }

    /**
     * 获取用户签约状态
     * @param GetUploadUserSignStatusRequest $request
     * @param null $option
     * @return GetUploadUserSignStatusResponse
     */
    public function getUploadUserSignStatus($request, $option = null)
    {
        if (!$request instanceof GetUploadUserSignStatusRequest) {
            throw new ConfigException("Uploadusersign->getUploadUserSignStatus request 必须是 Yzh\\Model\\Uploadusersign\\GetUploadUserSignStatusRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('GET', '/api/payment/v1/sign/user/status', $request, "Yzh\\Model\\Uploadusersign\\GetUploadUserSignStatusResponse", $option);
    }
}