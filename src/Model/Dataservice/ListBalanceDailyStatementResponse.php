<?php

namespace Yzh\Model\Dataservice;

use Yzh\Model\BaseResponse;

/**
 *  * 查询余额日账单数据响应
 * Class ListBalanceDailyStatementResponse
 */
class ListBalanceDailyStatementResponse extends BaseResponse
{

    /**
     * 条目信息
     * @var StatementDetail[]
     */
    public $list;
}