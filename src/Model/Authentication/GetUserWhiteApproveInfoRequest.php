<?php

namespace Yzh\Model\Authentication;

use Yzh\Model\BaseRequest;

/**
 * 非居民身份证验证名单审核结果查询请求
 * Class GetUserWhiteApproveInfoRequest
 */
class GetUserWhiteApproveInfoRequest extends BaseRequest
{
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
     * 证件类型编码
     * @var string
     */
    public $card_type;

    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}
