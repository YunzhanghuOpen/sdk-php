<?php

namespace Yzh\Model\Taxclearrefund;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 查询税费退补涉及劳动者返回
 * Class GetRefundTaxLaborInfoResponse
 */
class GetRefundTaxLaborInfoResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return GetRefundTaxLaborInfoResponseData
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
        $this->data = new GetRefundTaxLaborInfoResponseData($data);
        return $this;
    }
}
