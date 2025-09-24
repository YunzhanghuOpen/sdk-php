<?php

namespace Yzh\Model\Calculatelabor;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 连续劳务年度税费测算-H5 返回
 * Class CalculationYearH5UrlResponse
 */
class CalculationYearH5UrlResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return CalculationYearH5UrlResponseData
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
        $this->data = new CalculationYearH5UrlResponseData($data);
        return $this;
    }
}
