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
    /**
     * 是否隐藏导航栏 0：展示导航栏（默认） 1：隐藏导航栏
     * @var int32
     */
    public $navbar_hide;
    /**
     * 页面标题
     * @var string
     */
    public $title;

    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}
