<?php

namespace Yzh\Model\Apiusersign;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 获取协议预览 URL 返回
 * Class ApiUseSignContractResponse
 */
class ApiUseSignContractResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return ApiUseSignContractResponseData
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
        $this->data = new ApiUseSignContractResponseData($data);
        return $this;
    }
}
