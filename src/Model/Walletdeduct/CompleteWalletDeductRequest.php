<?php

namespace Yzh\Model\Walletdeduct;

use Yzh\Model\BaseRequest;

/**
 * 提交钱包余额扣减结果请求
 * Class CompleteWalletDeductRequest
 */
class CompleteWalletDeductRequest extends BaseRequest
{
    /**
     * 综合服务主体 ID
     * @var string
     */
    public $broker_id;
    /**
     * 平台企业 ID
     * @var string
     */
    public $dealer_id;
    /**
     * 平台企业订单号
     * @var string
     */
    public $order_id;
    /**
     * 云账户钱包余额扣减订单号
     * @var string
     */
    public $ref;
    /**
     * 结算状态
     * @var string
     */
    public $status;
    /**
     * 平台企业扣减交易流水号
     * @var string
     */
    public $trade_no;
    /**
     * 支付完成时间
     * @var string
     */
    public $finished_at;

    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}
