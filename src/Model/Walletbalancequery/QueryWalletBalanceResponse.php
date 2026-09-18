<?php

namespace Yzh\Model\Walletbalancequery;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 查询钱包余额返回
 * Class QueryWalletBalanceResponse
 */
class QueryWalletBalanceResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return QueryWalletBalanceResponseData
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
        $this->data = new QueryWalletBalanceResponseData($data);
        return $this;
    }
}
