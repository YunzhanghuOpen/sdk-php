<?php

namespace Yzh\Model\Taxclearrefund;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 查询税费清缴明细文件返回
 * Class GetClearTaxFileResponseData
 */
class GetClearTaxFileResponseData extends BaseModel implements ResponseDataInterface
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
