<?php

namespace Yzh\Model\Apiusersign;

use Yzh\Model\BaseRequest;

/**
 * 用户解约（测试账号专用接口）请求
 * Class ApiUserSignReleaseRequest
 */
class ApiUserSignReleaseRequest extends BaseRequest
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
     * 证件类型 idcard：身份证 passport：护照 mtphkm：港澳居民来往内地通行证 mtpt：台湾居民来往大陆通行证（台胞证） rphkm：中华人民共和国港澳居民居住证 rpt：中华人民共和国台湾居民居住证 fpr：外国人永久居留身份证（外国人永久居留证） fwpa：中华人民共和国外国人工作许可证（A类） fwpb：中华人民共和国外国人工作许可证（B类） fwpc：中华人民共和国外国人工作许可证（C类） mtphkmnc：港澳居民来往内地通行证（非中国国籍）
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
