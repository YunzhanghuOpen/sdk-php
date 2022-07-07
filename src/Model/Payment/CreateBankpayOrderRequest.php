<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseRequest;

/**
 * 
 * Class CreateBankpayOrderRequest
 */
class CreateBankpayOrderRequest extends BaseRequest
{

    /**
     * 平台企业订单号
     * @var string
     */
    public $order_id;

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
     * 姓名
     * @var string
     */
    public $real_name;

    /**
     * 银行卡号
     * @var string
     */
    public $card_no;

    /**
     * 身份证号
     * @var string
     */
    public $id_card;

    /**
     * 手机号
     * @var string
     */
    public $phone_no;

    /**
     * 打款金额
     * @var string
     */
    public $pay;

    /**
     * 订单备注
     * @var string
     */
    public $pay_remark;

    /**
     * 回调地址
     * @var string
     */
    public $notify_url;

    /**
     * 项目标识
     * @var string
     */
    public $project_id;


    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}
