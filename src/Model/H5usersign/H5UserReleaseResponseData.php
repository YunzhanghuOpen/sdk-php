<?php

namespace Yzh\Model\H5usersign;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 用户解约（测试账号专用接口）返回
 * Class H5UserReleaseResponseData
 */
class H5UserReleaseResponseData extends BaseModel implements ResponseDataInterface
{
    /**
     * 是否解约成功
     * @var string
     */
    protected $status;

    /**
     * 是否解约成功
     * @var string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * 是否解约成功
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
}
