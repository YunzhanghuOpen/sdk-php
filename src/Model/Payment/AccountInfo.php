<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseModel;

/**
 * 账户信息
 * Class AccountInfo
 */
class AccountInfo extends BaseModel
{

    /**
     * 综合服务主体 ID
     * @var string
     */
    public $broker_id;

    /**
     * 银行卡余额
     * @var string
     */
    public $bank_card_balance;

    /**
     * 是否开通银行卡支付路径
     * @var bool
     */
    public $is_bank_card;

    /**
     * 支付宝余额
     * @var string
     */
    public $alipay_balance;

    /**
     * 是否开通支付宝支付路径
     * @var bool
     */
    public $is_alipay;

    /**
     * 微信余额
     * @var string
     */
    public $wxpay_balance;

    /**
     * 是否开通微信支付路径
     * @var bool
     */
    public $is_wxpay;

    /**
     * 加成服务费返点余额
     * @var string
     */
    public $rebate_fee_balance;

    /**
     * 业务服务费余额
     * @var string
     */
    public $acct_balance;

    /**
     * 总余额
     * @var string
     */
    public $total_balance;
}