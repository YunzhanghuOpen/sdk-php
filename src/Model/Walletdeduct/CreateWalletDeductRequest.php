<?php

namespace Yzh\Model\Walletdeduct;

use Yzh\Model\BaseRequest;

/**
 * 申请钱包余额扣减请求
 * Class CreateWalletDeductRequest
 */
class CreateWalletDeductRequest extends BaseRequest
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
     * @var WalletDeductUserInfo
     */
    public $user_info;
    /**
     * 钱包 ID
     * @var string
     */
    public $wallet_id;
    /**
     * 平台企业订单号
     * @var string
     */
    public $order_id;
    /**
     * 业务场景
     * @var string
     */
    public $scene;
    /**
     * 申请扣减金额
     * @var string
     */
    public $amount;
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
