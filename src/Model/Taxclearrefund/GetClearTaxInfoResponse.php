<?php

namespace Yzh\Model\Taxclearrefund;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 查询税费清缴完成结果返回
 * Class GetClearTaxInfoResponse
 */
class GetClearTaxInfoResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return GetClearTaxInfoResponseData
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
        $this->data = new GetClearTaxInfoResponseData($data);
        return $this;
    }
}
