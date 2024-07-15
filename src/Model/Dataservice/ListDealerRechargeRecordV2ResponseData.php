<?php

namespace Yzh\Model\Dataservice;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 平台企业预付业务服务费记录返回
 * Class ListDealerRechargeRecordV2ResponseData
 */
class ListDealerRechargeRecordV2ResponseData extends BaseModel implements ResponseDataInterface
{
    /**
     * 预付业务服务费记录
     * @var RechargeRecordInfo[]
     */
    protected $data;

    /**
     * @var array $items
     */
    public function setData($items)
    {
        $this->data = array();
        foreach ($items as $k => $v) {
            array_push($this->data, new RechargeRecordInfo($v));
        }
    }

    /**
     * 预付业务服务费记录
     * @return RechargeRecordInfo[]
     */
    public function getData()
    {
        return $this->data;
    }
}
