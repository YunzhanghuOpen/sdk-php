<?php

namespace Yzh\Model;

interface ResponseInterface
{

    /**
     * 获取业务状态吗
     */
    public function getCode();

    /**
     * 设置业务状态吗
     * @return self
     */
    public function setCode($code);

    /**
     * 获取业务状态吗
     */
    public function getMessage();

    /**
     * 设置业务状态吗
     * @return  self
     */
    public function setMessage($message);

    /**
     * 获取数据对象
     * @return 
     */
    public function getData();

    /**
     * 设置数据对象
     * @para $data
     * @return self
     */
    public function setData($data);
}
