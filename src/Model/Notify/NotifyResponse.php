<?php

namespace Yzh\Model\Notify;

class NotifyResponse
{
    /**
     * @var boolean 签名校验结果
     */
    private $signRes;
    /**
     * @var boolean 解密结果
     */
    private $descryptRes;
    /**
     * @var string 原始数据
     */
    private $data;

    public function getSignRes()
    {
        return $this->signRes;
    }

    public function setSignRes($signRes)
    {
        $this->signRes = $signRes;
    }

    public function getDescryptRes()
    {
        return $this->descryptRes;
    }

    public function setDecryptRes($descryptRes)
    {
        $this->descryptRes = $descryptRes;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function __toString()
    {
        return json_encode(array(
            "signRes" => $this->signRes,
            "descryptRes" => $this->descryptRes,
            "data" => $this->data,
        ));
    }
}
