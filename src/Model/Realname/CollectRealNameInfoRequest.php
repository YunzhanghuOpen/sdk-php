<?php

namespace Yzh\Model\Realname;

use Yzh\Model\BaseRequest;

/**
 
 * Class CollectRealNameInfoRequest
 */
class CollectRealNameInfoRequest extends BaseRequest
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
     * 实名认证结果
     * @var int32
     */
    public $realname_result;
    /**
     * 实名认证通过时间
     * @var string
     */
    public $realname_time;
    /**
     * 实名认证方式
     * @var int32
     */
    public $realname_type;
    /**
     * 实名认证唯一可追溯编码
     * @var string
     */
    public $realname_trace_id;
    /**
     * 认证平台
     * @var string
     */
    public $realname_platform;
    /**
     * 人脸照片
     * @var string
     */
    public $face_image;
    /**
     * 人脸识别验证分数
     * @var string
     */
    public $face_verify_score;
    /**
     * 银行卡号
     * @var string
     */
    public $bank_no;
    /**
     * 银行预留手机号
     * @var string
     */
    public $bank_phone;
    /**
     * 平台企业审核人
     * @var string
     */
    public $reviewer;
    /**
     * 人脸照片收集类型
     * @var int32
     */
    public $face_image_collect_type;

    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}
