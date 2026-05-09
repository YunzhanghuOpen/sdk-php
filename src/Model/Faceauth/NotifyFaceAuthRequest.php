<?php

namespace Yzh\Model\Faceauth;

use Yzh\Model\BaseRequest;

/**
 * 人脸识别实名核验结果回调通知请求
 * Class NotifyFaceAuthRequest
 */
class NotifyFaceAuthRequest extends BaseRequest
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
     * 身份证号码
     * @var string
     */
    public $id_card;
    /**
     * 人脸识别实名核验唯一 ID
     * @var string
     */
    public $record_id;
    /**
     * 平台企业实名核验 ID
     * @var string
     */
    public $verification_id;
    /**
     * 实名核验状态
     * @var string
     */
    public $status;
    /**
     * 实名核验完成时间
     * @var string
     */
    public $verify_time;
    /**
     * 实名核验失败详情
     * @var FaceAuthDetail
     */
    public $detail;

    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}
