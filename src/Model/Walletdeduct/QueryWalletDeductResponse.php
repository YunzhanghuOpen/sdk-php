<?php

namespace Yzh\Model\Walletdeduct;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 查询钱包余额扣减申请结果返回
 * Class QueryWalletDeductResponse
 */
class QueryWalletDeductResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return QueryWalletDeductResponseData
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
        $this->data = new QueryWalletDeductResponseData($data);
        return $this;
    }
}
