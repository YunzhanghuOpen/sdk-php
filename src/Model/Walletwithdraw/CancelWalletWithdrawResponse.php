<?php

namespace Yzh\Model\Walletwithdraw;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 取消挂起的钱包余额提现订单返回
 * Class CancelWalletWithdrawResponse
 */
class CancelWalletWithdrawResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return CancelWalletWithdrawResponseData
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
        $this->data = new CancelWalletWithdrawResponseData($data);
        return $this;
    }
}
