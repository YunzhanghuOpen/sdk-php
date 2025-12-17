<?php

namespace Yzh\Model\Taxclearrefund;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 查询税费清缴明细文件返回
 * Class GetClearTaxFileResponse
 */
class GetClearTaxFileResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return GetClearTaxFileResponseData
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
        $this->data = new GetClearTaxFileResponseData($data);
        return $this;
    }
}
