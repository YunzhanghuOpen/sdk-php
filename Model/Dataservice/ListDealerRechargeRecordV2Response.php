<?php

namespace Yzh\Model\Dataservice;

use Yzh\Model\BaseResponse;

/**
 * 平台企业预付业务服务费记录返回
 * Class ListDealerRechargeRecordV2Response
 */
class ListDealerRechargeRecordV2Response extends BaseResponse
{

    /**
     * 预付业务服务费记录
     * @var RechargeRecordInfo[]
     */
    public $data;
}