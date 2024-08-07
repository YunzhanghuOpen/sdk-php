<?php

namespace Yzh\Model\Bizlicxjjh5api;

use Yzh\Model\BaseRequest;

/**
 * 查询个体工商户状态请求
 * Class H5APIEcoCityAicStatusRequest
 */
class H5APIEcoCityAicStatusRequest extends BaseRequest
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
     * 平台企业端的用户 ID
     * @var string
     */
    public $dealer_user_id;
    /**
     * 身份证号码
     * @var string
     */
    public $id_card;
    /**
     * 姓名
     * @var string
     */
    public $real_name;
    /**
     * 用户唯一标识
     * @var string
     */
    public $open_id;

    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}
