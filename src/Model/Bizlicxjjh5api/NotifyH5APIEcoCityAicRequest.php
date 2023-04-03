<?php

namespace Yzh\Model\Bizlicxjjh5api;

use Yzh\Model\BaseRequest;

/**
    * 结果回调
    * Class NotifyH5APIEcoCityAicRequest
    */
class NotifyH5APIEcoCityAicRequest extends BaseRequest
{

    /**
        * 用户唯一标识
        * @var string
        */
    public $open_id;

    /**
        * 平台企业端的用户 ID
        * @var string
        */
    public $dealer_user_id;

    /**
        * 注册/注销提交时间
        * @var string
        */
    public $submit_at;

    /**
        * 注册/注销完成时间
        * @var string
        */
    public $registed_at;

    /**
        * 用户签约状态
        * @var int32
        */
    public $status;

    /**
        * 注册状态描述
        * @var string
        */
    public $status_message;

    /**
        * 注册详情状态码
        * @var int32
        */
    public $status_detail;

    /**
        * 注册详情状态码描述
        * @var string
        */
    public $status_detail_message;

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
        * 统一社会信用代码
        * @var string
        */
    public $uscc;

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
        * 回调类型
        * @var int32
        */
    public $type;


    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}