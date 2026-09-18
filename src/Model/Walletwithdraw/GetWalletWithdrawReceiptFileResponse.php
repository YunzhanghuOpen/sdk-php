<?php

namespace Yzh\Model\Walletwithdraw;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 查询钱包余额提现电子回单返回
 * Class GetWalletWithdrawReceiptFileResponse
 */
class GetWalletWithdrawReceiptFileResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return GetWalletWithdrawReceiptFileResponseData
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
        $this->data = new GetWalletWithdrawReceiptFileResponseData($data);
        return $this;
    }
}
