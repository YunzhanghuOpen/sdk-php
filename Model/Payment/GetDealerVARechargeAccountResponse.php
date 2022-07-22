<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseResponse;

/**
 * 查询平台企业汇款信息返回
 * Class GetDealerVARechargeAccountResponse
 */
class GetDealerVARechargeAccountResponse extends BaseResponse
{

    /**
     * 账户名称
     * @var string
     */
    public $acct_name;

    /**
     * 专属账户
     * @var string
     */
    public $acct_no;

    /**
     * 银行名称
     * @var string
     */
    public $bank_name;

    /**
     * 付款账户
     * @var string
     */
    public $dealer_acct_name;
}