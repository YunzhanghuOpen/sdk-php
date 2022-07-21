<?php

namespace Yzh\Model\Dataservice;

use Yzh\Model\BaseResponse;

/**
 * 查询日订单文件返回
 * Class GetDailyOrderFileResponse
 */
class GetDailyOrderFileResponse extends BaseResponse
{

    /**
     * 下载地址
     * @var string
     */
    public $order_download_url;
}