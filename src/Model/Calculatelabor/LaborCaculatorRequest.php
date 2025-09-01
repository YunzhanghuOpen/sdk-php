<?php

namespace Yzh\Model\Calculatelabor;

use Yzh\Model\BaseRequest;

/**
 * 连续劳务税费试算（计算器）请求
 * Class LaborCaculatorRequest
 */
class LaborCaculatorRequest extends BaseRequest
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
     * 月度收入列表
     * @var MonthSettlement[]
     */
    public $month_settlement_list;

    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}
