<?php

namespace Yzh\Model\Walletdeduct;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 提交钱包余额扣减结果返回
 * Class CompleteWalletDeductResponse
 */
class CompleteWalletDeductResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return CompleteWalletDeductResponseData
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
        $this->data = new CompleteWalletDeductResponseData($data);
        return $this;
    }
}
