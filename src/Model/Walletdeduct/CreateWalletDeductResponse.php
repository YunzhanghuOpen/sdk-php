<?php

namespace Yzh\Model\Walletdeduct;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 申请钱包余额扣减返回
 * Class CreateWalletDeductResponse
 */
class CreateWalletDeductResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return CreateWalletDeductResponseData
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
        $this->data = new CreateWalletDeductResponseData($data);
        return $this;
    }
}
