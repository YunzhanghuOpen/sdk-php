<?php

namespace Yzh\Model\H5usersign;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 申请解约返回
 * Class H5UserReleaseApplyResponseData
 */
class H5UserReleaseApplyResponseData extends BaseModel implements ResponseDataInterface
{
    /**
     * 签约状态
     * @var int32
     */
    protected $status;
    /**
     * H5 解约页面 URL
     * @var string
     */
    protected $url;

    /**
     * 签约状态
     * @var int32 $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * 签约状态
     * @return int32
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * H5 解约页面 URL
     * @var string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * H5 解约页面 URL
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
}
