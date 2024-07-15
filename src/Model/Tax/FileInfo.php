<?php

namespace Yzh\Model\Tax;

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
    protected $name;
    /**
     * 下载文件临时 URL
     * @var string
     */
    protected $url;
    /**
     * 文件解压缩密码
     * @var string
     */
    protected $pwd;

    /**
     * 文件名称
     * @var string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * 文件名称
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 下载文件临时 URL
     * @var string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * 下载文件临时 URL
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * 文件解压缩密码
     * @var string $pwd
     */
    public function setPwd($pwd)
    {
        $this->pwd = $pwd;
    }

    /**
     * 文件解压缩密码
     * @return string
     */
    public function getPwd()
    {
        return $this->pwd;
    }
}
