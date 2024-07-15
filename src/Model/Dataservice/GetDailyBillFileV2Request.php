<?php

namespace Yzh\Model\Dataservice;

use Yzh\Model\BaseRequest;

/**
 * 查询日流水文件请求
 * Class GetDailyBillFileV2Request
 */
class GetDailyBillFileV2Request extends BaseRequest
{
    /**
     * 所需获取的日流水日期，格式：yyyy-MM-dd
     * @var string
     */
    public $bill_date;

    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}
