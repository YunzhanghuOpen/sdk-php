<?php

namespace Yzh\Model\Walletwithdraw;

use Yzh\Model\BaseRequest;

/**
 * 查询钱包余额提现结果请求
 * Class QueryWalletWithdrawRequest
 */
class QueryWalletWithdrawRequest extends BaseRequest
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
     * 提现渠道
     * @var string
     */
    public $channel;
    /**
     * 平台企业订单号
     * @var string
     */
    public $order_id;
    /**
     * 云账户钱包余额提现订单号
     * @var string
     */
    public $ref;

    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}
