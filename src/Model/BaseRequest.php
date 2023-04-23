<?php

namespace Yzh\Model;


use Yzh\Utils\MessString;

abstract class BaseRequest
{
    protected $_requestID;


    public function getRequestID()
    {
        if (isset($this->_requestID) && !empty($this->_requestID)) {
            return $this->_requestID;
        }

        return MessString::rand(32);
    }

    /**
     * 自定义请求 ID
     * @param string $requestID 请求 ID
     */
    public function setRequestID($requestID)
    {
        $this->_requestID = $requestID;
    }


    public function getRequestData()
    {
        $requestData = array();
        foreach (array_keys(get_object_vars($this)) as $property) {
            if ($property == '_requestID') {
                continue;
            }

            $requestData[$property] = $this->{$property};
        }

        return $requestData;
    }
}
