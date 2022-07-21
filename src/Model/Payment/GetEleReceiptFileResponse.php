<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseResponse;

/**
 * 查询电子回单返回
 * Class GetEleReceiptFileResponse
 */
class GetEleReceiptFileResponse extends BaseResponse
{

    /**
     * 链接失效时间
     * @var string
     */
    public $expire_time;

    /**
     * 回单名
     * @var string
     */
    public $file_name;

    /**
     * 下载链接
     * @var string
     */
    public $url;
}