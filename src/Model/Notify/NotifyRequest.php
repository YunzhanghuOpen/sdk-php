<?php

namespace Yzh\Model\Notify;

use Yzh\Model\BaseRequest;

class NotifyRequest extends BaseRequest
{
    private $data;
    private $mess;
    private $timestamp;
    private $sign;

    public function __construct($data, $mess, $timestamp, $sign)
    {
        $this->data = $data;
        $this->mess = $mess;
        $this->timestamp = $timestamp;
        $this->sign = $sign;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function getMess()
    {
        return $this->mess;
    }

    public function setMess($mess)
    {
        $this->mess = $mess;
    }

    public function getTimestamp()
    {
        return $this->timestamp;
    }

    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
    }

    public function getSign()
    {
        return $this->sign;
    }

    public function setSign($sign)
    {
        $this->sign = $sign;
    }

    public function __toString()
    {
        return json_encode(array(
            "data" => $this->data,
            "mess" => $this->mess,
            "timestamp" => $this->timestamp,
            "sign" => $this->sign,
        ));
    }
}
