<?php

namespace Yzh\Dataservice;

use Yzh\Model\BaseModel;

/**
 *  * 流水详情
 * Class DealerBillInfo
 */
class DealerBillInfo extends BaseModel
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
     * 资金流水号
     * @var string
     */
    public $ref;

    /**
     * 综合服务主体名
     * @var string
     */
    public $broker_product_name;

    /**
     * 平台企业名
     * @var string
     */
    public $dealer_product_name;

    /**
     * 业务订单流水号
     * @var string
     */
    public $biz_ref;

    /**
     * 账户类型
     * @var string
     */
    public $acct_type;

    /**
     * 入账金额
     * @var string
     */
    public $amount;

    /**
     * 账户余额
     * @var string
     */
    public $balance;

    /**
     * 业务分类
     * @var string
     */
    public $business_category;

    /**
     * 业务类型
     * @var string
     */
    public $business_type;

    /**
     * 收支类型
     * @var string
     */
    public $consumption_type;

    /**
     * 入账时间
     * @var string
     */
    public $created_at;

    /**
     * 备注
     * @var string
     */
    public $remark;
}
