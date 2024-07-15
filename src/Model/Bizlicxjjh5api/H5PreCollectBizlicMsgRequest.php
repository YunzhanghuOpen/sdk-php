<?php

namespace Yzh\Model\Bizlicxjjh5api;

use Yzh\Model\BaseRequest;

/**
 * 工商实名信息录入请求
 * Class H5PreCollectBizlicMsgRequest
 */
class H5PreCollectBizlicMsgRequest extends BaseRequest
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
     * 手机号
     * @var string
     */
    public $phone_no;
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
     * 身份证住址
     * @var string
     */
    public $id_card_address;
    /**
     * 身份证签发机关
     * @var string
     */
    public $id_card_agency;
    /**
     * 身份证民族
     * @var string
     */
    public $id_card_nation;
    /**
     * 身份证有效期开始时间
     * @var string
     */
    public $id_card_validity_start;
    /**
     * 身份证有效期结束时间
     * @var string
     */
    public $id_card_validity_end;

    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}
