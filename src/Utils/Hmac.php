<?php

namespace Yzh\Utils;

class Hmac
{
    private static $instance;
    protected $mode = "sha256";
    protected $app_key;

    /**
     * @param string $appKey
     */
    public function __construct($appKey)
    {
        $this->app_key = $appKey;
    }


    private function __clone()
    {
        return false;
    }

    public static function getInstance($appKey)
    {
        if (!self::$instance instanceof Hmac) {
            self::$instance = new Hmac($appKey);
        }

        return self::$instance;
    }

    /**
     * @param string $data
     * @param string $key
     */
    public function sign($data): string
    {
        return hash_hmac($this->mode, $data, $this->app_key);
    }

    public function verify($data, $sign)
    {
        return $this->sign($data) == $sign;
    }
}
