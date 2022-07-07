<?php

namespace Yzh\Model\Dataservice;

use Yzh\Model\BaseResponse;

/**
 *  * 查询日订单响应
 * Class ListDailyOrderReply
 */
class ListDailyOrderReply extends BaseResponse
{

    /**
     * 总数目
     * @var int32
     */
    public $total_num;

    /**
     * 条目信息
     * @var DealerOrderInfo[]
     */
    public $list;
}