<?php

namespace Yzh\Model\Authentication;

use Yzh\Model\BaseResponse;

/**
 * 银行卡信息查询返回
 * Class GetBankCardInfoResponse
 */
class GetBankCardInfoResponse extends BaseResponse
{

    /**
     * 银行代码
     * @var string
     */
    public $bank_code;

    /**
     * 银行名称
     * @var string
     */
    public $bank_name;

    /**
     * 卡类型
     * @var string
     */
    public $card_type;

    /**
     * 云账户是否支持向该银行支付
     * @var bool
     */
    public $is_support;
}