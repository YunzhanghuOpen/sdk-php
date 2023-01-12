<?php

namespace Yzh\Model\Dataservice;

use Yzh\Model\BaseResponse;

/**
 * 查询日流水数据返回
 * Class ListDailyBillResponse
 */
class ListDailyBillResponse extends BaseResponse
{

    /**
     * 总条数
     * @var int32
     */
    public $total_num;

    /**
     * 条目信息
     * @var DealerBillInfo[]
     */
    public $list;
}