<?php

namespace Yzh\Model\Tax;

use Yzh\Model\BaseResponse;

/**
 * 下载个税扣缴明细表返回
 * Class GetTaxFileResponse
 */
class GetTaxFileResponse extends BaseResponse
{

    /**
     * 文件详情
     * @var FileInfo[]
     */
    public $file_info;
}