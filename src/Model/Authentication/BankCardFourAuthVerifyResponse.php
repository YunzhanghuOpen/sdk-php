<?php

namespace Yzh\Model\Authentication;

use Yzh\Model\BaseResponse;

/**
 * 银行卡四要素鉴权返回
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