<?php

namespace Yzh\Model\Invoice;

use Yzh\Model\BaseRequest;

/**
 * 发票开具申请请求
 * Class ApplyInvoiceRequest
 */
class ApplyInvoiceRequest extends BaseRequest
{
    /**
     * 发票申请编号
     * @var string
     */
    public $invoice_apply_id;
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
     * 申请开票金额
     * @var string
     */
    public $amount;
    /**
     * 发票类型
     * @var string
     */
    public $invoice_type;
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

    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}
