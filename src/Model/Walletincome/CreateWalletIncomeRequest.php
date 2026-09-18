<?php

namespace Yzh\Model\Walletincome;

use Yzh\Model\BaseRequest;

/**
 * 发起钱包余额入账请求
 * Class CreateWalletIncomeRequest
 */
class CreateWalletIncomeRequest extends BaseRequest
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
     * 劳动者信息
     * @var WalletIncomeUserInfo
     */
    public $user_info;
    /**
     * 钱包 ID
     * @var string
     */
    public $wallet_id;
    /**
     * 平台信息
     * @var WalletIncomePlatformInfo
     */
    public $platform_info;
    /**
     * 平台企业订单号
     * @var string
     */
    public $order_id;
    /**
     * 下单金额
     * @var string
     */
    public $amount;
    /**
     * 获得收入时间
     * @var string
     */
    public $earned_at;
    /**
     * 备注
     * @var string
     */
    public $remark;
    /**
     * 通知地址
     * @var string
     */
    public $notify_url;

    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}
