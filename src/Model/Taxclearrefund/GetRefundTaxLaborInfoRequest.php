<?php

namespace Yzh\Model\Taxclearrefund;

use Yzh\Model\BaseRequest;

/**
 * 查询税费退补涉及劳动者请求
 * Class GetRefundTaxLaborInfoRequest
 */
class GetRefundTaxLaborInfoRequest extends BaseRequest
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
     * 批次号
     * @var string
     */
    public $batch_id;
    /**
     * 税款所属期
     * @var string
     */
    public $tax_month;
    /**
     * 偏移量
     * @var int32
     */
    public $offset;
    /**
     * 每页返回条数
     * @var int32
     */
    public $length;

    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}
