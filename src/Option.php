<?php

namespace Yzh;

final class Option
{
    const DEFAULT_CONNECT_TIMEOUT_SECONDS = 2;
    const MAX_CONNECT_TIMEOUT_SECONDS = 5;

    const DEFAULT_TIMEOUT_SECONDS = 8;
    const MAX_TIMEOUT_SECONDS = 30;


    /**
     * 请求超时的秒数。使用 0 无限期的等待(默认行为)。
     * @var
     */
    protected $timeout;

    /**
     * 等待服务器响应超时的最大值，使用 0 将无限等待 (默认行为).
     * @var
     */
    protected $connect_timeout;



    /**
     * 自定义的header参数
     * @var
     */
    protected $headers;

    public function __construct($option = array())
    {
        if (isset($option['timeout'])) {
            $this->setTimeout($option['timeout']);
        }

        if (isset($option['connect_timeout'])) {
            $this->setConnectTimeout($option['connect_timeout']);
        }
    }

    /**
     * 设置请求超时秒数
     * @param int $timeout
     * @return $this
     */
    public function setTimeout($timeout = 0)
    {
        if (floatval($timeout) <= self::MAX_TIMEOUT_SECONDS) {
            $this->timeout = floatval($timeout);
        }
        return $this;
    }

    /**
     * @return float
     */
    public function getTimeout()
    {
        return $this->timeout;
    }

    /**
     *
     * @param int $connectTimeout
     * @return $this
     */
    public function setConnectTimeout($connectTimeout = 0)
    {
        if (floatval($connectTimeout) <= self::MAX_CONNECT_TIMEOUT_SECONDS) {
            $this->connect_timeout = floatval($connectTimeout);
        }
        return $this;
    }

    /**
     * @return float
     */
    public function getConnectTimeout()
    {
        return $this->connect_timeout;
    }
}
