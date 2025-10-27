<?php

namespace Yzh\Model\Authentication;

use Yzh\Model\BaseRequest;

/**
 * 上传非居民身份证验证名单信息请求
 * Class UserExemptedInfoRequest
 */
class UserExemptedInfoRequest extends BaseRequest
{
    /**
     * 证件类型码
     * @var string
     */
    public $card_type;
    /**
     * 证件号码
     * @var string
     */
    public $id_card;
    /**
     * 姓名
     * @var string
     */
    public $real_name;
    /**
     * 申请备注
     * @var string
     */
    public $comment_apply;
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
     * 人员信息图片
     * @var string[]
     */
    public $user_images;
    /**
     * 国别（地区）代码
     * @var string
     */
    public $country;
    /**
     * 出生日期
     * @var string
     */
    public $birthday;
    /**
     * 性别
     * @var string
     */
    public $gender;
    /**
     * 回调地址
     * @var string
     */
    public $notify_url;
    /**
     * 请求流水号
     * @var string
     */
    public $ref;
    /**
     * 证件照片 URL 地址
     * @var string[]
     */
    public $image_urls;
    /**
     * 外籍人员类型
     * @var string
     */
    public $resident_type;

    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}
