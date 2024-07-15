<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 查询平台企业汇款信息返回
 * Class GetDealerVARechargeAccountResponseData
 */
class GetDealerVARechargeAccountResponseData extends BaseModel implements ResponseDataInterface
{
    /**
     * 账户名称
     * @var string
     */
    protected $acct_name;
    /**
     * 专属账户
     * @var string
     */
    protected $acct_no;
    /**
     * 银行名称
     * @var string
     */
    protected $bank_name;
    /**
     * 付款账户
     * @var string
     */
    protected $dealer_acct_name;

    /**
     * 账户名称
     * @var string $acct_name
     */
    public function setAcctName($acct_name)
    {
        $this->acct_name = $acct_name;
    }

    /**
     * 账户名称
     * @return string
     */
    public function getAcctName()
    {
        return $this->acct_name;
    }

    /**
     * 专属账户
     * @var string $acct_no
     */
    public function setAcctNo($acct_no)
    {
        $this->acct_no = $acct_no;
    }

    /**
     * 专属账户
     * @return string
     */
    public function getAcctNo()
    {
        return $this->acct_no;
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
     * 付款账户
     * @var string $dealer_acct_name
     */
    public function setDealerAcctName($dealer_acct_name)
    {
        $this->dealer_acct_name = $dealer_acct_name;
    }

    /**
     * 付款账户
     * @return string
     */
    public function getDealerAcctName()
    {
        return $this->dealer_acct_name;
    }
}
