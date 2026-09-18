<?php

namespace Yzh\Model\Walletincome;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 查询钱包余额入账结果返回
 * Class QueryWalletIncomeResponse
 */
class QueryWalletIncomeResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return QueryWalletIncomeResponseData
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
        $this->data = new QueryWalletIncomeResponseData($data);
        return $this;
    }
}
