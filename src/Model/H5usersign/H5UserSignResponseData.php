<?php

namespace Yzh\Model\H5usersign;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 申请签约返回
 * Class H5UserSignResponseData
 */
class H5UserSignResponseData extends BaseModel implements ResponseDataInterface
{
    /**
     * H5 签约页面 URL
     * @var string
     */
    protected $url;

    /**
     * 微信签约小程序码 URL
     * @var string
     */
    protected $wx_mp_code_url;

    /**
     * H5 签约页面 URL
     * @var string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * H5 签约页面 URL
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * 微信签约小程序码 URL
     * @var string $wx_mp_code_url
     */
    public function setWxMpCodeUrl($wx_mp_code_url)
    {
        $this->wx_mp_code_url = $wx_mp_code_url;
    }

    /**
     * 微信签约小程序码 URL
     * @return string
     */
    public function getWxMpCodeUrl()
    {
        return $this->wx_mp_code_url;
    }
}
