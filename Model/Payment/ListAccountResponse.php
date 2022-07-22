<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseResponse;

/**
 * 查询平台企业余额返回
 * Class ListAccountResponse
 */
class ListAccountResponse extends BaseResponse
{

    /**
     
     * @var AccountInfo[]
     */
    public $dealer_infos;
}