<?php

namespace Yzh\Model\Calculatelabor;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 连续劳务单笔结算税费测算-H5 返回
 * Class CalculationH5UrlResponseData
 */
class CalculationH5UrlResponseData extends BaseModel implements ResponseDataInterface
{
    /**
     * 连续劳务单笔结算税费测算 H5 页面 URL
     * @var string
     */
    protected $url;

    /**
     * 连续劳务单笔结算税费测算 H5 页面 URL
     * @var string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * 连续劳务单笔结算税费测算 H5 页面 URL
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
}
