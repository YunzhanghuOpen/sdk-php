<?php

namespace Yzh\Dataservice;

use Yzh\Model\BaseModel;

/**
 *  * 充值记录信息
 * Class RechargeRecordInfo
 */
class RechargeRecordInfo extends BaseModel
{

    /**
     * 平台企业ID
     * @var string
     */
    public $dealer_id;

    /**
     * 综合服务主体ID
     * @var string
     */
    public $broker_id;

    /**
     * 充值记录ID
     * @var string
     */
    public $recharge_id;

    /**
     * 充值金额
     * @var string
     */
    public $amount;

    /**
     * 实际到账金额
     * @var string
     */
    public $actual_amount;

    /**
     * 创建时间
     * @var string
     */
    public $created_at;

    /**
     * 资金用途
     * @var string
     */
    public $recharge_channel;

    /**
     * 充值备注
     * @var string
     */
    public $remark;

    /**
     * 平台企业付款银行账号
     * @var string
     */
    public $recharge_account_no;
}
