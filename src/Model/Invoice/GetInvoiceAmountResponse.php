<?php

namespace Yzh\Model\Invoice;

use Yzh\Model\BaseResponse;

/**
 * 查询可开具发票额度和发票开具信息返回
 * Class GetInvoiceAmountResponse
 */
class GetInvoiceAmountResponse extends BaseResponse
{

    /**
     * 可开票额度
     * @var string
     */
    public $amount;

    /**
     * 系统支持的开户行及账号
     * @var BankNameAccount[]
     */
    public $bank_name_account;

    /**
     * 系统支持的货物或应税劳务、服务名称
     * @var GoodsServicesName[]
     */
    public $goods_services_name;
}