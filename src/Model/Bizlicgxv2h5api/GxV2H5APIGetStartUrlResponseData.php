<?php

namespace Yzh\Model\Bizlicgxv2h5api;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 预启动返回
 * Class GxV2H5APIGetStartUrlResponseData
 */
class GxV2H5APIGetStartUrlResponseData extends BaseModel implements ResponseDataInterface
{
    /**
     * 跳转 URL
     * @var string
     */
    protected $h5_url;

    /**
     * 跳转 URL
     * @var string $h5_url
     */
    public function setH5Url($h5_url)
    {
        $this->h5_url = $h5_url;
    }

    /**
     * 跳转 URL
     * @return string
     */
    public function getH5Url()
    {
        return $this->h5_url;
    }
}
