<?php

namespace Yzh\Model\Tax;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 查询纳税人是否为跨集团用户返回
 * Class GetUserCrossResponse
 */
class GetUserCrossResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return GetUserCrossResponseData
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
        $this->data = new GetUserCrossResponseData($data);
        return $this;
    }
}
