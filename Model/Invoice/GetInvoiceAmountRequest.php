<?php

namespace Yzh\Model\Invoice;

use Yzh\Model\BaseRequest;

/**
 * 查询可开票额度和开票信息请求
 * Class GetInvoiceAmountRequest
 */
class GetInvoiceAmountRequest extends BaseRequest
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


    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}