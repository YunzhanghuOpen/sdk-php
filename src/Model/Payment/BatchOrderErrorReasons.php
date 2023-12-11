<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseModel;

/**
 * 下单失败原因信息
 * Class BatchOrderErrorReasons
 */
class BatchOrderErrorReasons extends BaseModel
{
    /**
     * 不允许下单原因码
     * @var string
     */
    protected $error_code;
    /**
     * 不允许下单原因描述
     * @var string
     */
    protected $error_message;

    /**
     * 不允许下单原因码
     * @var string $error_code
     */
    public function setErrorCode($error_code)
    {
        $this->error_code = $error_code;
    }


    /**
     * 不允许下单原因码
     * @return string
     */
    public function getErrorCode()
    {
        return $this->error_code;
    }

    /**
     * 不允许下单原因描述
     * @var string $error_message
     */
    public function setErrorMessage($error_message)
    {
        $this->error_message = $error_message;
    }


    /**
     * 不允许下单原因描述
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->error_message;
    }
}
