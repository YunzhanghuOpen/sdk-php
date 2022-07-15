<?php

namespace Yzh\Model\Invoice;

use Yzh\Model\BaseResponse;

/**
 *  * 开票申请响应
 * Class ApplyInvoiceResponse
 */
class ApplyInvoiceResponse extends BaseResponse
{

    /**
     * 发票申请单 ID
     * @var string
     */
    public $application_id;

    /**
     * 发票张数
     * @var int64
     */
    public $count;
}