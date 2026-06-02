<?php

namespace Yzh\Model\Faceauth;

use Yzh\Model\BaseRequest;

/**
 * 查询人脸识别实名核验结果请求
 * Class GetFaceAuthResultRequest
 */
class GetFaceAuthResultRequest extends BaseRequest
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
     * 人脸识别实名核验唯一 ID
     * @var string
     */
    public $record_id;
    /**
     * 平台企业实名核验 ID
     * @var string
     */
    public $verification_id;

    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}
