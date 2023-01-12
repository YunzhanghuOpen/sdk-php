<?php

namespace Yzh\Exception;

class ConfigException extends BaseException
{
    public function __construct($message = "", $code = 0)
    {
        $msg = ExceptionCode::getErrorMessage($code);
        if (!empty($message)) {
            $msg .= ": " . $message;
        }
        parent::__construct((string) $msg, (int) $code);
    }
}
