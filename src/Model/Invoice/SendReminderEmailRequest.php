<?php

namespace Yzh\Model\Invoice;

use Yzh\Model\BaseRequest;

/**
    * 发送发票扫描件压缩包下载链接邮件请求
    * Class SendReminderEmailRequest
    */
class SendReminderEmailRequest extends BaseRequest
{

    /**
        * 发票申请编号
        * @var string
        */
    public $invoice_apply_id;

    /**
        * 发票申请单 ID
        * @var string
        */
    public $application_id;


    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}