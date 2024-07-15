<?php

namespace Yzh\Model\Dataservice;

use Yzh\Model\BaseRequest;

/**
 * 平台企业预付业务服务费记录请求
 * Class ListDealerRechargeRecordV2Request
 */
class ListDealerRechargeRecordV2Request extends BaseRequest
{
    /**
     * 开始时间，格式：yyyy-MM-dd
     * @var string
     */
    public $begin_at;
    /**
     * 结束时间，格式：yyyy-MM-dd
     * @var string
     */
    public $end_at;

    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}
