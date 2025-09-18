<?php

namespace Yzh\Model\Calculatelabor;

use Yzh\Model\BaseRequest;

/**
 * 订单税费试算请求
 * Class CalcTaxRequest
 */
class CalcTaxRequest extends BaseRequest
{
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
     * 姓名
     * @var string
     */
    public $real_name;
    /**
     * 证件号
     * @var string
     */
    public $id_card;
    /**
     * 测算金额
     * @var string
     */
    public $pay;
    /**
     * 测算类型
     * @var string
     */
    public $tax_type;

    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}
