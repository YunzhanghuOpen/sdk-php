<?php

namespace Yzh\Model\Authentication;

use Yzh\Model\BaseRequest;

/**
 * 上传免验证用户名单信息审核结果通知
 * Class NotifyUserExemptedInfoRequest
 */
class NotifyUserExemptedInfoRequest extends BaseRequest
{
    /**
     * 综合服务主体 ID
     * @var string
     */
    public $broker_id;
    /**
     * 平台企业 ID
     * @var string
     */
    public $dealer_id;
    /**
     * 姓名
     * @var string
     */
    public $real_name;
    /**
     * 证件号
     * @var string
     */
    public $id_card;
    /**
     * 审核状态
     * @var string
     */
    public $status;
    /**
     * 流水号
     * @var string
     */
    public $ref;
    /**
     * 审核信息
     * @var string
     */
    public $comment;

    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}
