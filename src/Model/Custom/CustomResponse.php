<?php

namespace Yzh\Model\Custom;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 自定义返回
 */
class CustomResponse extends BaseResponse implements ResponseInterface
{
    /**
     * @var Object $customer_data 响应 data 数据
     */
    protected $customer_data;

    /**
     * 写入 data 数据
     * @param $data
     * @return $this|ResponseInterface
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    /**
     * data 数据解析
     * @param $response
     * @return void
     */
    public function setCustomerData($response) {
        $class = get_class($response);
        $this->customer_data =  new $class($this->data);
    }

    /**
     * 响应 data 数据
     * @return Object
     */
    public function getData()
    {
        return $this->customer_data;
    }
}
