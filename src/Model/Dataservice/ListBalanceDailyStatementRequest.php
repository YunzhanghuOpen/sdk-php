<?php

namespace Yzh\Model\Dataservice;

use Yzh\Model\BaseRequest;

/**
 * 查询余额日账单数据请求
 * Class ListBalanceDailyStatementRequest
 */
class ListBalanceDailyStatementRequest extends BaseRequest
{
    /**
     * 账单查询日期 格式：yyyy-MM-dd
     * @var string
     */
    public $statement_date;

    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}
