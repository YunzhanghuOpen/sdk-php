<?php

namespace Yzh\Model\Apiusersign;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 用户签约返回
 * Class ApiUserSignResponseData
 */
class ApiUserSignResponseData extends BaseModel implements ResponseDataInterface
{
    /**
     * 是否签约成功
     * @var string
     */
    protected $status;

    /**
     * 是否签约成功
     * @var string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * 是否签约成功
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
}
