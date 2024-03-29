<?php

namespace Yzh;

final class Option
{
    const DEFAULT_CONNECT_TIMEOUT_SECONDS = 2;
    const MAX_CONNECT_TIMEOUT_SECONDS = 5;
    const DEFAULT_TIMEOUT_SECONDS = 30;
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
     * 自定义的 Header 参数
     * @var
     */
    protected $headers;

    public function __construct($option = array())
    {

        $this->timeout = self::DEFAULT_TIMEOUT_SECONDS;
        $this->connect_timeout = self::DEFAULT_CONNECT_TIMEOUT_SECONDS;

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
        if (intval($timeout) <= self::MAX_TIMEOUT_SECONDS) {
            $this->timeout = intval($timeout);
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
        if (intval($connectTimeout) <= self::MAX_CONNECT_TIMEOUT_SECONDS) {
            $this->connect_timeout = intval($connectTimeout);
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
