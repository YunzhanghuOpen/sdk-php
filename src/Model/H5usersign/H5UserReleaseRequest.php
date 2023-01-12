<?php

namespace Yzh\Model\H5usersign;

use Yzh\Model\BaseRequest;

/**
 * 用户解约（测试账号专用接口）请求
 * Class H5UserReleaseRequest
 */
class H5UserReleaseRequest extends BaseRequest
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
     * 证件号码
     * @var string
     */
    public $id_card;

    /**
     * 证件类型 0：身份证 2：港澳居民来往内地通行证 3：护照 5：台湾居民来往大陆通行证 9：港澳居民居住证 10：台湾居民居住证 11：外国人永久居留身份证 12：外国人工作许可证
     * @var int32
     */
    public $certificate_type;


    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}