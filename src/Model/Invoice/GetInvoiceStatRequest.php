<?php

namespace Yzh\Model\Invoice;

use Yzh\Model\BaseRequest;

/**
 *  * 查询平台企业已开具和待开具发票金额请求
 * Class GetInvoiceStatRequest
 */
class GetInvoiceStatRequest extends BaseRequest
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

    /**
     * 查询年份
     * @var int32
     */
    public $year;


    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}
