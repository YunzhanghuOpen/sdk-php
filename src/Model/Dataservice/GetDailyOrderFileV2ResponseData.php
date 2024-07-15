<?php

namespace Yzh\Model\Dataservice;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 查询日订单文件（支付和退款订单）返回
 * Class GetDailyOrderFileV2ResponseData
 */
class GetDailyOrderFileV2ResponseData extends BaseModel implements ResponseDataInterface
{
    /**
     * 下载地址
     * @var string
     */
    protected $url;

    /**
     * 下载地址
     * @var string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * 下载地址
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
}
