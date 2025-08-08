<?php

namespace Yzh\Model\UserCollect;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 获取收集手机号码页面返回
 * Class GetUserCollectPhoneUrlResponseData
 */
class GetUserCollectPhoneUrlResponseData extends BaseModel implements ResponseDataInterface
{
    /**
     * 收集手机号码页面 URL
     * @var string
     */
    protected $url;

    /**
     * 收集手机号码页面 URL
     * @var string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * 收集手机号码页面 URL
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
}
