<?php

namespace Yzh\Model\Dataservice;

use Yzh\Model\BaseResponse;

/**
 * 查询日订单文件（支付和退款订单）返回
 * Class GetDailyOrderFileV2Response
 */
class GetDailyOrderFileV2Response extends BaseResponse
{

    /**
     * 下载地址
     * @var string
     */
    public $url;
}