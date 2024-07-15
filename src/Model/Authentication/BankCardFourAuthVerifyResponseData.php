<?php

namespace Yzh\Model\Authentication;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 银行卡四要素鉴权请求（下发短信验证码）返回
 * Class BankCardFourAuthVerifyResponseData
 */
class BankCardFourAuthVerifyResponseData extends BaseModel implements ResponseDataInterface
{
    /**
     * 交易凭证
     * @var string
     */
    protected $ref;

    /**
     * 交易凭证
     * @var string $ref
     */
    public function setRef($ref)
    {
        $this->ref = $ref;
    }

    /**
     * 交易凭证
     * @return string
     */
    public function getRef()
    {
        return $this->ref;
    }
}
