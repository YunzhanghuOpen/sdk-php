<?php

namespace Yzh\Model\Walletincome;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 发起钱包余额入账返回
 * Class CreateWalletIncomeResponse
 */
class CreateWalletIncomeResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return CreateWalletIncomeResponseData
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
        $this->data = new CreateWalletIncomeResponseData($data);
        return $this;
    }
}
