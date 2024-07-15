<?php

namespace Yzh\Model\Bizlicgxv2h5;

use Yzh\Model\BaseRequest;

/**
 * 查询个体工商户状态请求
 * Class GxV2H5GetAicStatusRequest
 */
class GxV2H5GetAicStatusRequest extends BaseRequest
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
     * 用户唯一标识
     * @var string
     */
    public $open_id;
    /**
     * 姓名
     * @var string
     */
    public $real_name;
    /**
     * 身份证号码
     * @var string
     */
    public $id_card;
    /**
     * 平台企业端的用户 ID
     * @var string
     */
    public $dealer_user_id;

    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}
