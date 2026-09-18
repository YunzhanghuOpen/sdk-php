<?php

namespace Yzh\Model\Walletbalancechange;

use Yzh\Model\BaseRequest;
use Yzh\Model\Walletbalancequery\WalletBalanceQueryUserInfo;
use Yzh\Model\Walletbalancequery\WalletBalanceQueryWalletBalance;

/**
 * 钱包余额变更结果回调通知请求
 * Class NotifyWalletBalanceChangeRequest
 */
class NotifyWalletBalanceChangeRequest extends BaseRequest
{
    /**
     * 通知类型
     * @var string
     */
    public $notify_type;
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
     * 劳动者信息
     * @var WalletBalanceQueryUserInfo
     */
    public $user_info;
    /**
     * 钱包 ID
     * @var string
     */
    public $wallet_id;
    /**
     * 余额变化批次 ID
     * @var string
     */
    public $change_id;
    /**
     * 钱包余额变更金额
     * @var string
     */
    public $change_amount;
    /**
     * 需补缴个税
     * @var string
     */
    public $user_debt_repayment_personal_amount;
    /**
     * 需补缴增附税
     * @var string
     */
    public $user_debt_repayment_added_amount;
    /**
     * 余额变化时间
     * @var string
     */
    public $changed_at;
    /**
     * 钱包余额信息
     * @var WalletBalanceQueryWalletBalance
     */
    public $wallet_balance;

    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}
