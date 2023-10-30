<?php

namespace Yzh\Model\Uploadusersign;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 用户签约信息上传返回
 * Class RelationCreateMsgResponse
 */
class RelationCreateMsgResponse extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return  RelationCreateMsgResponseData
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
        $this->data = new RelationCreateMsgResponseData($data);
        return $this;
    }
}
