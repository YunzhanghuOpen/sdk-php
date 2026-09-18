<?php

namespace Yzh\Model\Walletwithdraw;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 重试挂起的钱包余额提现订单返回
 * Class RetryWalletWithdrawResponse
 */
class RetryWalletWithdrawResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return RetryWalletWithdrawResponseData
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
        $this->data = new RetryWalletWithdrawResponseData($data);
        return $this;
    }
}
