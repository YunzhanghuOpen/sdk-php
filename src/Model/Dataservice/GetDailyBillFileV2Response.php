<?php

namespace Yzh\Model\Dataservice;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 查询日流水文件返回
 * Class GetDailyBillFileV2Response
 */
class GetDailyBillFileV2Response extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return GetDailyBillFileV2ResponseData
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
        $this->data = new GetDailyBillFileV2ResponseData($data);
        return $this;
    }
}
