<?php

namespace Yzh;

use Yzh\Exception\ConfigException;
use Yzh\Exception\ExceptionCode;


use Yzh\Model\Usercollect1\GetUserCollectPhoneStatusRequest;
use Yzh\Model\Usercollect1\GetUserCollectPhoneStatusResponse;
use Yzh\Model\Usercollect1\GetUserCollectPhoneUrlRequest;
use Yzh\Model\Usercollect1\GetUserCollectPhoneUrlResponse;

/**
 * 用户信息收集
 * Class UserCollectServiceClient
 */
class UserCollectServiceClient extends BaseClient
{
    protected static $service_name = 'usercollectservice';

    /**
     * 查询手机号码绑定状态
     * @param GetUserCollectPhoneStatusRequest $request
     * @param null $option
     * @return GetUserCollectPhoneStatusResponse
     */
    public function getUserCollectPhoneStatus($request, $option = null)
    {
        if (!$request instanceof GetUserCollectPhoneStatusRequest) {
            throw new ConfigException("UserCollect->getUserCollectPhoneStatus request 必须是 Yzh\\Model\\UserCollect\\GetUserCollectPhoneStatusRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('GET', '/api/user/v1/collect/phone/status', $request, "Yzh\\Model\\UserCollect\\GetUserCollectPhoneStatusResponse", $option);
    }

    /**
     * 获取收集手机号码页面
     * @param GetUserCollectPhoneUrlRequest $request
     * @param null $option
     * @return GetUserCollectPhoneUrlResponse
     */
    public function getUserCollectPhoneUrl($request, $option = null)
    {
        if (!$request instanceof GetUserCollectPhoneUrlRequest) {
            throw new ConfigException("UserCollect->getUserCollectPhoneUrl request 必须是 Yzh\\Model\\UserCollect\\GetUserCollectPhoneUrlRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('GET', '/api/user/v1/collect/phone/url', $request, "Yzh\\Model\\UserCollect\\GetUserCollectPhoneUrlResponse", $option);
    }
}