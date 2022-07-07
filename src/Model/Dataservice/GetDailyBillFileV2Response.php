<?php

namespace Yzh\Model\Dataservice;

use Yzh\Model\BaseResponse;

/**
 *  * 查询日流水文件响应
 * Class GetDailyBillFileV2Response
 */
class GetDailyBillFileV2Response extends BaseResponse
{

    /**
     * 下载地址
     * @var string
     */
    public $bill_download_url;
}