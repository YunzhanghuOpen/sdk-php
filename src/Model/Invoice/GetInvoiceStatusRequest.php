<?php

namespace Yzh\Model\Invoice;

use Yzh\Model\BaseRequest;

/**
    * 查询发票开具申请状态请求
    * Class GetInvoiceStatusRequest
    */
class GetInvoiceStatusRequest extends BaseRequest
{

    /**
        * 发票申请编号
        * @var string
        */
    public $invoice_apply_id;

    /**
        * 发票申请单 ID
        * @var string
        */
    public $application_id;


    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}