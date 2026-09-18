<?php

namespace Yzh\Model\Walletincome;

use Yzh\Model\BaseRequest;

/**
 * 取消钱包收入计税订单请求
 * Class CancelWalletIncomeRequest
 */
class CancelWalletIncomeRequest extends BaseRequest
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
    /**
     * 取消钱包收入计税订单号
     * @var string
     */
    public $cancel_order_id;

    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}
