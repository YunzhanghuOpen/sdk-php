<?php

namespace Yzh\Model\Taxclearrefund;

use Yzh\Model\BaseRequest;

/**
 * 查询税费退补完成结果请求
 * Class GetRefundTaxInfoRequest
 */
class GetRefundTaxInfoRequest extends BaseRequest
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
     * 报税属期
     * @var string
     */
    public $tax_month;
    /**
     * 批次号
     * @var string
     */
    public $batch_id;

    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}
