<?php

namespace Yzh\Model\Calculatelabor;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 连续劳务单笔结算税费测算-H5 返回
 * Class CalculationH5UrlResponse
 */
class CalculationH5UrlResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return CalculationH5UrlResponseData
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
        $this->data = new CalculationH5UrlResponseData($data);
        return $this;
    }
}
