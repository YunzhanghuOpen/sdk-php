<?php

namespace Yzh\Model\Walletincome;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 重试挂起的计税订单返回
 * Class RetryWalletIncomeResponse
 */
class RetryWalletIncomeResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return RetryWalletIncomeResponseData
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
        $this->data = new RetryWalletIncomeResponseData($data);
        return $this;
    }
}
