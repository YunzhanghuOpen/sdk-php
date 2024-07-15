<?php

namespace Yzh\Model\Uploadusersign;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 用户签约信息上传返回
 * Class UploadUserSignResponseData
 */
class UploadUserSignResponseData extends BaseModel implements ResponseDataInterface
{
    /**
     * 上传状态
     * @var string
     */
    protected $status;

    /**
     * 上传状态
     * @var string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * 上传状态
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
}
