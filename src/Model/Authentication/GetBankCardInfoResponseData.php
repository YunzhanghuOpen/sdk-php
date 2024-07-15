<?php

namespace Yzh\Model\Authentication;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 银行卡信息查询返回
 * Class GetBankCardInfoResponseData
 */
class GetBankCardInfoResponseData extends BaseModel implements ResponseDataInterface
{
    /**
     * 银行代码
     * @var string
     */
    protected $bank_code;
    /**
     * 银行名称
     * @var string
     */
    protected $bank_name;
    /**
     * 卡类型
     * @var string
     */
    protected $card_type;
    /**
     * 云账户是否支持向该银行支付
     * @var bool
     */
    protected $is_support;

    /**
     * 银行代码
     * @var string $bank_code
     */
    public function setBankCode($bank_code)
    {
        $this->bank_code = $bank_code;
    }

    /**
     * 银行代码
     * @return string
     */
    public function getBankCode()
    {
        return $this->bank_code;
    }

    /**
     * 银行名称
     * @var string $bank_name
     */
    public function setBankName($bank_name)
    {
        $this->bank_name = $bank_name;
    }

    /**
     * 银行名称
     * @return string
     */
    public function getBankName()
    {
        return $this->bank_name;
    }

    /**
     * 卡类型
     * @var string $card_type
     */
    public function setCardType($card_type)
    {
        $this->card_type = $card_type;
    }

    /**
     * 卡类型
     * @return string
     */
    public function getCardType()
    {
        return $this->card_type;
    }

    /**
     * 云账户是否支持向该银行支付
     * @var bool $is_support
     */
    public function setIsSupport($is_support)
    {
        $this->is_support = $is_support;
    }

    /**
     * 云账户是否支持向该银行支付
     * @return bool
     */
    public function getIsSupport()
    {
        return $this->is_support;
    }
}
