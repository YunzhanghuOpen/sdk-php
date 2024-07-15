<?php

namespace Yzh\Model\Dataservice;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 查询日流水文件返回
 * Class GetDailyBillFileV2ResponseData
 */
class GetDailyBillFileV2ResponseData extends BaseModel implements ResponseDataInterface
{
    /**
     * 下载地址
     * @var string
     */
    protected $bill_download_url;

    /**
     * 下载地址
     * @var string $bill_download_url
     */
    public function setBillDownloadUrl($bill_download_url)
    {
        $this->bill_download_url = $bill_download_url;
    }

    /**
     * 下载地址
     * @return string
     */
    public function getBillDownloadUrl()
    {
        return $this->bill_download_url;
    }
}
