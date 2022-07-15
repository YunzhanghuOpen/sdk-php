<?php

namespace Yzh\Utils;

class MessString
{
    const MIN_RAND_LENGTH = 8;
    const DEFAULT_RAND_LENGTH = 16;
    const MAX_RAND_LENGTH = 64;
    const ALL_STRING_CHARS = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-+_';

    /**
     * @param $length
     * @return false|string
     */
    public static function rand($length = 16)
    {
        return substr(str_shuffle(self::ALL_STRING_CHARS), 0, $length > self::MAX_RAND_LENGTH ? self::DEFAULT_RAND_LENGTH : ($length < self::MIN_RAND_LENGTH ? self::DEFAULT_RAND_LENGTH : $length));
    }
}
