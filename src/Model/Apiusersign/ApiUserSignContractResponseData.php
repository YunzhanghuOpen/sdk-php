<?php

namespace Yzh\Model\Apiusersign;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 获取协议预览 URL 返回 V2
 * Class ApiUserSignContractResponseData
 */
class ApiUserSignContractResponseData extends BaseModel implements ResponseDataInterface
{
    /**
     * 预览跳转 URL
     * @var string
     */
    protected $url;
    /**
     * 协议名称
     * @var string
     */
    protected $title;

    /**
     * 预览跳转 URL
     * @var string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * 预览跳转 URL
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * 协议名称
     * @var string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * 协议名称
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
}
