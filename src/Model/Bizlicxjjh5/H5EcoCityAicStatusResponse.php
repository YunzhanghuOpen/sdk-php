<?php

namespace Yzh\Model\Bizlicxjjh5;

use Yzh\Model\BaseResponse;

/**
 * 查询个体工商户状态返回
 * Class H5EcoCityAicStatusResponse
 */
class H5EcoCityAicStatusResponse extends BaseResponse
{

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
     * 注册发起时间
     * @var string
     */
    public $applyed_at;

    /**
     * 注册完成时间
     * @var string
     */
    public $registed_at;

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
}