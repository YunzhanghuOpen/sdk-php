<?php

namespace Yzh\Model\Dataservice;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 平台企业预付业务服务费记录返回
 * Class ListDealerRechargeRecordV2Response
 */
class ListDealerRechargeRecordV2Response extends BaseResponse implements ResponseInterface
{
    /**
     * 获取数据对象
     * @return RechargeRecordInfo[]
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
        $this->data = array();
        foreach ($data as $item) {
            array_push($this->data, new RechargeRecordInfo($item));
        }
        return $this;
    }
}
