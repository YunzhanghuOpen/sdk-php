<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 重试挂起状态订单返回
 * Class RetryOrderResponseData
 */
class RetryOrderResponseData extends BaseModel implements ResponseDataInterface
{
    /**
     * 请求标识
     * @var string
     */
    protected $ok;

    /**
     * 请求标识
     * @var string $ok
     */
    public function setOk($ok)
    {
        $this->ok = $ok;
    }

    /**
     * 请求标识
     * @return string
     */
    public function getOk()
    {
        return $this->ok;
    }
}
