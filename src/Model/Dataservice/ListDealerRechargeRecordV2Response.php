<?php

namespace Yzh\Model\Dataservice;

use Yzh\Model\BaseResponse;

/**
 *  * 平台企业充值记录响应
 * Class ListDealerRechargeRecordV2Response
 */
class ListDealerRechargeRecordV2Response extends BaseResponse
{

    /**
     * 充值记录
     * @var RechargeRecordInfo[]
     */
    public $data;
}
