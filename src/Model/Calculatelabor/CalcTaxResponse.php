<?php

namespace Yzh\Model\Calculatelabor;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 订单税费试算返回
 * Class CalcTaxResponse
 */
class CalcTaxResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return CalcTaxResponseData
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
        $this->data = new CalcTaxResponseData($data);
        return $this;
    }
}
