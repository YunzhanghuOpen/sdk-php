<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseRequest;

/**
 * 
 * Class GetDealerVARechargeAccountRequest
 */
class GetDealerVARechargeAccountRequest extends BaseRequest
{

    /**
     * 综合服务主体ID
     * @var string
     */
    public $broker_id;

    /**
     * 平台企业ID
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
