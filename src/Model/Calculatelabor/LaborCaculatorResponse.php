<?php

namespace Yzh\Model\Calculatelabor;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 连续劳务税费试算（计算器）返回
 * Class LaborCaculatorResponse
 */
class LaborCaculatorResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return LaborCaculatorResponseData
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * 设置数据对象
     * @param array $data
     * @return self
     */
    public function setData($data)
    {
        $this->data = new LaborCaculatorResponseData($data);
        return $this;
    }
}
