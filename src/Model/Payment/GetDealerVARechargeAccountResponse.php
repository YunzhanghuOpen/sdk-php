<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 查询平台企业汇款信息返回
 * Class GetDealerVARechargeAccountResponse
 */
class GetDealerVARechargeAccountResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return GetDealerVARechargeAccountResponseData
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
        $this->data = new GetDealerVARechargeAccountResponseData($data);
        return $this;
    }
}
