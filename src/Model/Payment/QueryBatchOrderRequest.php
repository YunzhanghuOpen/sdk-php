<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseRequest;

/**
 * 查询批次订单信息请求
 * Class QueryBatchOrderRequest
 */
class QueryBatchOrderRequest extends BaseRequest
{
    /**
     * 平台企业批次号
     * @var string
     */
    public $batch_id;
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
