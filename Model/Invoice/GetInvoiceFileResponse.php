<?php

namespace Yzh\Model\Invoice;

use Yzh\Model\BaseResponse;

/**
 * 下载 PDF 版发票 返回
 * Class GetInvoiceFileResponse
 */
class GetInvoiceFileResponse extends BaseResponse
{

    /**
     * 下载地址
     * @var string
     */
    public $url;

    /**
     * 文件名称
     * @var string
     */
    public $name;
}