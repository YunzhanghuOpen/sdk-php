<?php

namespace Yzh\Exception;

final class ExceptionCode
{
    const CONFIG_ERROR_WRONG_PARAM = 10000;
    const CONFIG_ERROR_WRONG_ENV = 1001;
    const CONFIG_ERROR_LACK_PACKAGE = 10002;
    const CONFIG_ERROR_WRONG_SIGN_TYPE = 10003;
    const CONFIG_ERROR_LOST_KEY = 20000;
    const CONFIG_ERROR_RSA_KEY_INVALID = 20001;
    const CONFIG_ERROR_UNSUPPORT_URL_IN_CURRENT_ENV = 20002;
    const PRIVATE_KEY_ENCRYPT_FAIL = 20003;
    const PRIVATE_KEY_DECRYPT_FAIL = 2004;
    const PUBLIC_KEY_DECRYPT_FAIL = 20005;
    const DES_KEY_ENCRYPT_FAIL = 2006;
    const DES_KEY_DECRYPT_FAIL = 2007;

    private static $error_message_map = array(
        self::CONFIG_ERROR_LOST_KEY => '[客户端] 缺少配置参数',
        self::CONFIG_ERROR_RSA_KEY_INVALID => '[客户端] RSA 密钥格式错误',
    );

    public static function getErrorMessage($code)
    {
        if (!is_int($code)) {
            return 'code 必须是整型';
        }

        if (!array_key_exists($code, self::$error_message_map)) {
            return "未知错误";
        }
        return self::$error_message_map[$code];
    }
}
