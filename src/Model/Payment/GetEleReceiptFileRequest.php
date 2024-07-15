<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseRequest;

/**
 * 查询电子回单请求
 * Class GetEleReceiptFileRequest
 */
class GetEleReceiptFileRequest extends BaseRequest
{
    /**
     * 平台企业订单号
     * @var string
     */
    public $order_id;
    /**
     * 综合服务平台流水号
     * @var string
     */
    public $ref;

    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}
