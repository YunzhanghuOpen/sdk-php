<?php

namespace Yzh\Model\Dataservice;

use Yzh\Model\BaseRequest;

/**
    * 查询日流水数据请求
    * Class ListDailyBillRequest
    */
class ListDailyBillRequest extends BaseRequest
{

    /**
        * 流水查询日期
        * @var string
        */
    public $bill_date;

    /**
        * 偏移量
        * @var int32
        */
    public $offset;

    /**
        * 长度
        * @var int32
        */
    public $length;

    /**
        * 如果为 encryption，则对返回的 data 进行加密
        * @var string
        */
    public $data_type;


    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $this->{$property} = $params[$property];
            }
        }
    }
}