<?php

namespace Yzh\Model;

use Yzh\Exception\RuntimeException;

abstract class BaseResponse
{
    const CODE_SUCC = '0000';

    /**
     * 业务状态码
     */
    protected $code = "";
    /**
     * 业务状态描述信息
     */
    protected $message = "";
    /**
     * 请求 ID
     */
    protected $requestID = "";
    /**
     * 业务数据
     */
    protected $data = [];
    /**
     * @var array
     * 原始数据
     */
    protected $arr_data = [];
    
    /**
     * 获取业务状态码
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * 设置业务状态码
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
    public function isSuccess()
    {
        return $this->code === self::CODE_SUCC;
    }

    /**
     * 获取业务状态码描述信息
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * 设置业务状态码描述信息
     * @return  self
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    /**
     * 获取请求 ID
     */
    public function getRequestID()
    {
        return $this->requestID;
    }

    /**
     * 设置请求 ID
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
        throw new RunTimeException("子类必须自行实现 setData 方法");
    }
}
