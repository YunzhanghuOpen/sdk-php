<?php

namespace Yzh\Model\Authentication;

use Yzh\Model\BaseResponse;

/**
 * 银行卡四要素鉴权请求（下发短信验证码）返回
 * Class BankCardFourAuthVerifyResponse
 */
class BankCardFourAuthVerifyResponse extends BaseResponse
{

    /**
     * 交易凭证
     * @var string
     */
    public $ref;
}