<?php

namespace Yzh\Utils;

class Hmac
{
    protected $mode = "sha256";
    protected $app_key;

    /**
     * @param string $appKey
     */
    public function __construct($appKey)
    {
        $this->app_key = $appKey;
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
