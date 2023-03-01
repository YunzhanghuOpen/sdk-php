<?php

namespace Yzh\Model;


use Yzh\Utils\MessString;

abstract class BaseRequest
{
    protected $requestID;


    public function getRequestID()
    {
        if (isset($this->requestID) && !empty($this->requestID)) {
            return $this->requestID;
        }

        return MessString::rand(32);
    }

    /**
     * 自定义请求 ID
     * @param string $requestID 请求 ID
     */
    public function setRequestID($requestID)
    {
        $this->requestID = $requestID;
    }


    public function getRequestData()
    {
        $requestData = array();
        foreach (array_keys(get_object_vars($this)) as $property) {
            $requestData[$property] = $this->{$property};
        }
        return $requestData;
    }
}
