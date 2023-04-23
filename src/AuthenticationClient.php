<?php

namespace Yzh;

use Yzh\Exception\ConfigException;
use Yzh\Exception\ExceptionCode;

use Yzh\Model\Authentication\BankCardFourAuthVerifyRequest;
use Yzh\Model\Authentication\BankCardFourAuthVerifyResponse;
use Yzh\Model\Authentication\BankCardFourAuthConfirmRequest;
use Yzh\Model\Authentication\BankCardFourAuthConfirmResponse;
use Yzh\Model\Authentication\BankCardFourVerifyRequest;
use Yzh\Model\Authentication\BankCardFourVerifyResponse;
use Yzh\Model\Authentication\BankCardThreeVerifyRequest;
use Yzh\Model\Authentication\BankCardThreeVerifyResponse;
use Yzh\Model\Authentication\IDCardVerifyRequest;
use Yzh\Model\Authentication\IDCardVerifyResponse;
use Yzh\Model\Authentication\UserExemptedInfoRequest;
use Yzh\Model\Authentication\UserExemptedInfoResponse;
use Yzh\Model\Authentication\UserWhiteCheckRequest;
use Yzh\Model\Authentication\UserWhiteCheckResponse;
use Yzh\Model\Authentication\GetBankCardInfoRequest;
use Yzh\Model\Authentication\GetBankCardInfoResponse;

/**
 * 用户信息验证
 * Class AuthenticationClient
 */
class AuthenticationClient extends BaseClient
{
    protected static $service_name = 'authentication';

    /**
     * 银行卡四要素鉴权请求（下发短信验证码）
     * @param BankCardFourAuthVerifyRequest $request
     * @param null $option
     * @return BankCardFourAuthVerifyResponse
     */
    public function bankCardFourAuthVerify($request, $option = null)
    {
        if (!$request instanceof BankCardFourAuthVerifyRequest) {
            throw new ConfigException("Authentication->bankCardFourAuthVerify request 必须是 Yzh\\Model\\Authentication\\BankCardFourAuthVerifyRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('POST', '/authentication/verify-request', $request, "Yzh\\Model\\Authentication\\BankCardFourAuthVerifyResponse", $option);
    }

    /**
     * 银行卡四要素确认请求（上传短信验证码）
     * @param BankCardFourAuthConfirmRequest $request
     * @param null $option
     * @return BankCardFourAuthConfirmResponse
     */
    public function bankCardFourAuthConfirm($request, $option = null)
    {
        if (!$request instanceof BankCardFourAuthConfirmRequest) {
            throw new ConfigException("Authentication->bankCardFourAuthConfirm request 必须是 Yzh\\Model\\Authentication\\BankCardFourAuthConfirmRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('POST', '/authentication/verify-confirm', $request, "Yzh\\Model\\Authentication\\BankCardFourAuthConfirmResponse", $option);
    }

    /**
     * 银行卡四要素验证
     * @param BankCardFourVerifyRequest $request
     * @param null $option
     * @return BankCardFourVerifyResponse
     */
    public function bankCardFourVerify($request, $option = null)
    {
        if (!$request instanceof BankCardFourVerifyRequest) {
            throw new ConfigException("Authentication->bankCardFourVerify request 必须是 Yzh\\Model\\Authentication\\BankCardFourVerifyRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('POST', '/authentication/verify-bankcard-four-factor', $request, "Yzh\\Model\\Authentication\\BankCardFourVerifyResponse", $option);
    }

    /**
     * 银行卡三要素验证
     * @param BankCardThreeVerifyRequest $request
     * @param null $option
     * @return BankCardThreeVerifyResponse
     */
    public function bankCardThreeVerify($request, $option = null)
    {
        if (!$request instanceof BankCardThreeVerifyRequest) {
            throw new ConfigException("Authentication->bankCardThreeVerify request 必须是 Yzh\\Model\\Authentication\\BankCardThreeVerifyRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('POST', '/authentication/verify-bankcard-three-factor', $request, "Yzh\\Model\\Authentication\\BankCardThreeVerifyResponse", $option);
    }

    /**
     * 身份证实名验证
     * @param IDCardVerifyRequest $request
     * @param null $option
     * @return IDCardVerifyResponse
     */
    public function iDCardVerify($request, $option = null)
    {
        if (!$request instanceof IDCardVerifyRequest) {
            throw new ConfigException("Authentication->iDCardVerify request 必须是 Yzh\\Model\\Authentication\\IDCardVerifyRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('POST', '/authentication/verify-id', $request, "Yzh\\Model\\Authentication\\IDCardVerifyResponse", $option);
    }

    /**
     * 上传免验证用户名单信息
     * @param UserExemptedInfoRequest $request
     * @param null $option
     * @return UserExemptedInfoResponse
     */
    public function userExemptedInfo($request, $option = null)
    {
        if (!$request instanceof UserExemptedInfoRequest) {
            throw new ConfigException("Authentication->userExemptedInfo request 必须是 Yzh\\Model\\Authentication\\UserExemptedInfoRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('POST', '/api/payment/v1/user/exempted/info', $request, "Yzh\\Model\\Authentication\\UserExemptedInfoResponse", $option);
    }

    /**
     * 查看免验证用户名单是否存在
     * @param UserWhiteCheckRequest $request
     * @param null $option
     * @return UserWhiteCheckResponse
     */
    public function userWhiteCheck($request, $option = null)
    {
        if (!$request instanceof UserWhiteCheckRequest) {
            throw new ConfigException("Authentication->userWhiteCheck request 必须是 Yzh\\Model\\Authentication\\UserWhiteCheckRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('POST', '/api/payment/v1/user/white/check', $request, "Yzh\\Model\\Authentication\\UserWhiteCheckResponse", $option);
    }

    /**
     * 银行卡信息查询接口
     * @param GetBankCardInfoRequest $request
     * @param null $option
     * @return GetBankCardInfoResponse
     */
    public function getBankCardInfo($request, $option = null)
    {
        if (!$request instanceof GetBankCardInfoRequest) {
            throw new ConfigException("Authentication->getBankCardInfo request 必须是 Yzh\\Model\\Authentication\\GetBankCardInfoRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        return $this->send('GET', '/api/payment/v1/card', $request, "Yzh\\Model\\Authentication\\GetBankCardInfoResponse", $option);
    }
}