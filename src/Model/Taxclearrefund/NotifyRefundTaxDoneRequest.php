<?php

namespace Yzh\Model\Taxclearrefund;

use Yzh\Model\BaseRequest;

/**
 * 连续劳务税费退补完成通知
 * Class NotifyRefundTaxDoneRequest
 */
class NotifyRefundTaxDoneRequest extends BaseRequest
{
    /**
     * 通知 ID
     * @var string
     */
    public $notify_id;
    /**
     * 通知时间
     * @var string
     */
    public $notify_time;
    /**
     * 返回数据
     * @var RefundTaxData
     */
    public $data;

    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}
