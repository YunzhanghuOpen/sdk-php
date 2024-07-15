<?php

namespace Yzh\Model\Authentication;

use Yzh\Model\BaseRequest;

/**
 * 银行卡信息查询请求
 * Class GetBankCardInfoRequest
 */
class GetBankCardInfoRequest extends BaseRequest
{
    /**
     * 银行卡号
     * @var string
     */
    public $card_no;
    /**
     * 银行名称
     * @var string
     */
    public $bank_name;

    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}
