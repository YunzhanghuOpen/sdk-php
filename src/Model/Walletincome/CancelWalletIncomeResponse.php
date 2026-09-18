<?php

namespace Yzh\Model\Walletincome;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 取消钱包收入计税订单返回
 * Class CancelWalletIncomeResponse
 */
class CancelWalletIncomeResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return CancelWalletIncomeResponseData
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
        $this->data = new CancelWalletIncomeResponseData($data);
        return $this;
    }
}
