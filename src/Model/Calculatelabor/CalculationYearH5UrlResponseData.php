<?php

namespace Yzh\Model\Calculatelabor;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 连续劳务年度税费测算-H5 返回
 * Class CalculationYearH5UrlResponseData
 */
class CalculationYearH5UrlResponseData extends BaseModel implements ResponseDataInterface
{
    /**
     * 年度劳务测算 H5 页面 URL
     * @var string
     */
    protected $url;

    /**
     * 年度劳务测算 H5 页面 URL
     * @var string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * 年度劳务测算 H5 页面 URL
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
}
