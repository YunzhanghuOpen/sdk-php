<?php

namespace Yzh\Model\Authentication;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 查看用户是否在非居民身份证验证名单中返回
 * Class UserWhiteCheckResponseData
 */
class UserWhiteCheckResponseData extends BaseModel implements ResponseDataInterface
{
    /**
     * @var bool
     */
    protected $ok;

    /**
     * @var bool $ok
     */
    public function setOk($ok)
    {
        $this->ok = $ok;
    }

    /**
     * @return bool
     */
    public function getOk()
    {
        return $this->ok;
    }
}
