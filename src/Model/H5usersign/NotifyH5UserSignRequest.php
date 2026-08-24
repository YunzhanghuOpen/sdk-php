<?php

namespace Yzh\Model\H5usersign;

use Yzh\Model\BaseRequest;

/**
 * 签约回调
 * Class NotifyH5UserSignRequest
 */
class NotifyH5UserSignRequest extends BaseRequest
{
    /**
     * 平台企业 ID
     * @var string
     */
    public $dealer_id;
    /**
     * 综合服务主体 ID
     * @var string
     */
    public $broker_id;
    /**
     * 姓名
     * @var string
     */
    public $real_name;
    /**
     * 证件号码
     * @var string
     */
    public $id_card;
    /**
     * 预签约手机号
     * @var string
     */
    public $phone;
    /**
     * 签约状态 0：未签约 1：已签约 2：已解约
     * @var int
     */
    public $status;
    /**
     * 签约事件类型
     * @var string
     */
    public $event_type;
    /**
     * 签约事件状态
     * @var string
     */
    public $event_status;
    /**
     * 签约事件状态详情
     * @var string
     */
    public $event_status_detail;

    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}
