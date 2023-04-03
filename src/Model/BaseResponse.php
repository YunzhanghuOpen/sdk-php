<?php

namespace Yzh\Model;

use Yzh\Exception\RuntimeException;

abstract class BaseResponse
{
    const CODE_SUCC = '0000';

    /**
     * 业务状态吗
     */
    protected $code = "";

    /**
     * 业务状态吗
     */
    protected $message = "";

    /**
     * 请求ID
     */
    protected $requestID = "";

    /**
     * @var CreateAlipayOrderResponseData $data
     * 业务数据
     */
    protected $data = [];

    /**
     * @var array
     * 原始数据
     */
    protected $arr_data = [];

    /**
     * 获取业务状态吗
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * 设置业务状态吗
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * 是否成功
     * @return bool
     */
    public function isSucceeded()
    {
        return $this->code === self::CODE_SUCC;
    }

    /**
     * 获取业务状态吗
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * 设置业务状态吗
     * @return  self
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    /**
     * 获取请求ID
     */
    public function getRequestID()
    {
        return $this->requestID;
    }

    /**
     * 设置请求ID
     * @return  self
     */
    public function setRequestID($requestID)
    {
        $this->requestID = $requestID;
        return $this;
    }

    /**
     * 获取数据对象
     * @return self
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * 设置数据对象
     * @param array $data
     */
    public function setData($data)
    {
        throw new RunTimeException("子类必须自行实现setData方法");
    }
}
