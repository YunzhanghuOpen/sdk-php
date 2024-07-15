<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseRequest;

/**
 * 批次撤销请求
 * Class CancelBatchOrderRequest
 */
class CancelBatchOrderRequest extends BaseRequest
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
    /**
     * 综合服务主体 ID
     * @var string
     */
    public $broker_id;

    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}
