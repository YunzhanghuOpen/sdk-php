<?php

namespace Yzh\Model\Authentication;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 
 * Class GetUserWhiteApproveInfoResponse
 */
class GetUserWhiteApproveInfoResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return GetUserWhiteApproveInfoResponseData
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
        $this->data = new GetUserWhiteApproveInfoResponseData($data);
        return $this;
    }
}
