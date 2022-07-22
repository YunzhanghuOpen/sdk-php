<?php

namespace Yzh\Model\Tax;

use Yzh\Model\BaseRequest;

/**
 * 查询纳税人是否为跨集团用户请求
 * Class GetUserCrossRequest
 */
class GetUserCrossRequest extends BaseRequest
{

    /**
     * 平台企业 ID
     * @var string
     */
    public $dealer_id;

    /**
     * 年份
     * @var string
     */
    public $year;

    /**
     * 身份证号码
     * @var string
     */
    public $id_card;

    /**
     * 平台企业签约主体
     * @var string
     */
    public $ent_id;


    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}