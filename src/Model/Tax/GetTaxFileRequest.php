<?php

namespace Yzh\Model\Tax;

use Yzh\Model\BaseRequest;

/**
 * 下载个人所得税扣缴明细表请求
 * Class GetTaxFileRequest
 */
class GetTaxFileRequest extends BaseRequest
{
    /**
     * 平台企业 ID
     * @var string
     */
    public $dealer_id;
    /**
     * 平台企业签约主体
     * @var string
     */
    public $ent_id;
    /**
     * 所属期
     * @var string
     */
    public $year_month;

    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}
