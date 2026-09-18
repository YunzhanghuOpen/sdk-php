<?php

namespace Yzh\Model\Walletwithdraw;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 查询钱包余额提现结果返回
 * Class QueryWalletWithdrawResponse
 */
class QueryWalletWithdrawResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return QueryWalletWithdrawResponseData
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
        $this->data = new QueryWalletWithdrawResponseData($data);
        return $this;
    }
}
