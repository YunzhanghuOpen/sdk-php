<?php

namespace Yzh\Model\Apiusersign;

use Yzh\Model\BaseRequest;

/**
 *  * 用户签约请求
 * Class ApiUserSignRequest
 */
class ApiUserSignRequest extends BaseRequest
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
     * 证件类型 idcard：身份证 mtphkm：港澳居民来往内地通行证 passport：护照 mtpt：台湾居民往来大陆通行证
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