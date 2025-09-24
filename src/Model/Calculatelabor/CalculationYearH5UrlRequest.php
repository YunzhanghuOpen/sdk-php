<?php

namespace Yzh\Model\Calculatelabor;

use Yzh\Model\BaseRequest;

/**
 * 连续劳务年度税费测算-H5 请求
 * Class CalculationYearH5UrlRequest
 */
class CalculationYearH5UrlRequest extends BaseRequest
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
     * 主题颜色
     * @var string
     */
    public $color;

    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}
