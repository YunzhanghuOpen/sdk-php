<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 查询电子回单返回
 * Class GetEleReceiptFileResponseData
 */
class GetEleReceiptFileResponseData extends BaseModel implements ResponseDataInterface
{
    /**
     * 链接失效时间
     * @var string
     */
    protected $expire_time;
    /**
     * 回单名
     * @var string
     */
    protected $file_name;
    /**
     * 下载链接
     * @var string
     */
    protected $url;

    /**
     * 链接失效时间
     * @var string $expire_time
     */
    public function setExpireTime($expire_time)
    {
        $this->expire_time = $expire_time;
    }

    /**
     * 链接失效时间
     * @return string
     */
    public function getExpireTime()
    {
        return $this->expire_time;
    }

    /**
     * 回单名
     * @var string $file_name
     */
    public function setFileName($file_name)
    {
        $this->file_name = $file_name;
    }

    /**
     * 回单名
     * @return string
     */
    public function getFileName()
    {
        return $this->file_name;
    }

    /**
     * 下载链接
     * @var string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * 下载链接
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
}
