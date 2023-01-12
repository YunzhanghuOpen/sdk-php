<?php

namespace Yzh\Model\Dataservice;

use Yzh\Model\BaseModel;

/**
 * 余额账单信息详情
 * Class StatementDetail
 */
class StatementDetail extends BaseModel
{

    /**
     * 账单 ID
     * @var string
     */
    public $statement_id;

    /**
     * 账单日期
     * @var string
     */
    public $statement_date;

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
     * 综合服务主体名称
     * @var string
     */
    public $broker_product_name;

    /**
     * 平台企业名称
     * @var string
     */
    public $dealer_product_name;

    /**
     * 业务类型
     * @var string
     */
    public $biz_type;

    /**
     * 账单金额
     * @var string
     */
    public $total_money;

    /**
     * 订单金额
     * @var string
     */
    public $amount;

    /**
     * 退汇金额
     * @var string
     */
    public $reex_amount;

    /**
     * 加成服务费金额
     * @var string
     */
    public $fee_amount;

    /**
     * 加成服务费抵扣金额
     * @var string
     */
    public $deduct_rebate_fee_amount;

    /**
     * 冲补金额
     * @var string
     */
    public $money_adjust;

    /**
     * 账单状态
     * @var string
     */
    public $status;

    /**
     * 开票状态
     * @var string
     */
    public $invoice_status;

    /**
     * 项目 ID
     * @var string
     */
    public $project_id;

    /**
     * 项目名称
     * @var string
     */
    public $project_name;
}