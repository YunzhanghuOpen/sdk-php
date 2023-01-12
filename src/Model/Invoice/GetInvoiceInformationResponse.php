<?php

namespace Yzh\Model\Invoice;

use Yzh\Model\BaseResponse;

/**
 * 查询发票信息返回
 * Class GetInvoiceInformationResponse
 */
class GetInvoiceInformationResponse extends BaseResponse
{

    /**
     * 发票信息
     * @var InformationDataInfo[]
     */
    public $information;
}