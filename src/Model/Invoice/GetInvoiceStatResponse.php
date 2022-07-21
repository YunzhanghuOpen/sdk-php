<?php

namespace Yzh\Model\Invoice;

use Yzh\Model\BaseResponse;

/**
 * 查询平台企业已开具和待开具发票金额返回
 * Class GetInvoiceStatResponse
 */
class GetInvoiceStatResponse extends BaseResponse
{

    /**
     * 平台企业 ID
     * @var string
     */
    public $dealer_id;

    /**
     * 综合服务主体 ID
     * @var string
     */
    public $broker_id;

    /**
     * 已开具发票金额
     * @var string
     */
    public $invoiced;

    /**
     * 待开具发票金额
     * @var string
     */
    public $not_invoiced;
}