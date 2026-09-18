<?php

namespace Yzh\Model\Walletwithdraw;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 发起钱包余额提现返回
 * Class CreateWalletWithdrawResponse
 */
class CreateWalletWithdrawResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return CreateWalletWithdrawResponseData
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
        $this->data = new CreateWalletWithdrawResponseData($data);
        return $this;
    }
}
