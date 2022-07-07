<?php

namespace Yzh\Model\Invoice;

use Yzh\Model\BaseResponse;

/**
 *  * 查询开票申请状态响应
 * Class GetInvoiceStatusResponse
 */
class GetInvoiceStatusResponse extends BaseResponse
{

    /**
     * 申请结果
     * @var string
     */
    public $status;

    /**
     * 发票张数
     * @var int64
     */
    public $count;

    /**
     * 价税合计
     * @var string
     */
    public $price_tax_amount;

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
     * 发票类型
     * @var string
     */
    public $invoice_type;

    /**
     * 购方名称
     * @var string
     */
    public $customer_name;

    /**
     * 纳税人识别号
     * @var string
     */
    public $customer_tax_num;

    /**
     * 购方地址、电话
     * @var string
     */
    public $customer_address_tel;

    /**
     * 开户行及账号
     * @var string
     */
    public $bank_name_account;

    /**
     * 货物或应税劳务、服务名称
     * @var string
     */
    public $goods_services_name;

    /**
     * 发票备注
     * @var string
     */
    public $remark;

    /**
     * 邮寄类型
     * @var string
     */
    public $post_type;

    /**
     * 快递单号
     * @var string[]
     */
    public $waybill_number;
}