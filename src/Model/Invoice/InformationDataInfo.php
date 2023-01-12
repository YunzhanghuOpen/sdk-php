<?php

namespace Yzh\Model\Invoice;

use Yzh\Model\BaseModel;

/**
 * 查询发票信息返回
 * Class InformationDataInfo
 */
class InformationDataInfo extends BaseModel
{

    /**
     * 货物或应税劳务、服务名称
     * @var string
     */
    public $goods_services_name;

    /**
     * 发票号码
     * @var string
     */
    public $invoice_num;

    /**
     * 发票代码
     * @var string
     */
    public $invoice_code;

    /**
     * 不含税金额
     * @var string
     */
    public $price_amount;

    /**
     * 税额
     * @var string
     */
    public $tax_amount;

    /**
     * 税率
     * @var string
     */
    public $tax_rate;

    /**
     * 价税合计
     * @var string
     */
    public $price_tax_amount;

    /**
     * 开票日期
     * @var string
     */
    public $invoiced_date;
}