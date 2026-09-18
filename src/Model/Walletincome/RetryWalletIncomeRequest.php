<?php

namespace Yzh\Model\Walletincome;

use Yzh\Model\BaseRequest;

/**
 * 重试挂起的计税订单请求
 * Class RetryWalletIncomeRequest
 */
class RetryWalletIncomeRequest extends BaseRequest
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
     * 云账户钱包入账订单号
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
