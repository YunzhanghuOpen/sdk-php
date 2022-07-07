<?php

namespace Yzh\Model\Dataservice;

use Yzh\Model\BaseResponse;

/**
 *  * 查询日订单文件响应
 * Class GetOrderDownloadsUrlResponse
 */
class GetOrderDownloadsUrlResponse extends BaseResponse
{

    /**
     * 下载地址
     * @var string
     */
    public $order_download_url;
}