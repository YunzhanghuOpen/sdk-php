<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseRequest;

/**
 * 批次确认请求
 * Class ConfirmBatchOrderRequest
 */
class ConfirmBatchOrderRequest extends BaseRequest
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

    /**
     * 支付路径
     * @var string
     */
    public $channel;


    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}