<?php

namespace Yzh\Tax;

use Yzh\Model\BaseModel;

/**
 * 报税文件详情
 * Class FileInfo
 */
class FileInfo extends BaseModel
{

    /**
     * 文件名称
     * @var string
     */
    public $name;

    /**
     * 下载文件临时 URL
     * @var string
     */
    public $url;

    /**
     * 文件解压缩密码
     * @var string
     */
    public $pwd;
}