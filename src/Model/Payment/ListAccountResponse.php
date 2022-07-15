<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseResponse;

/**
 * 
 * Class ListAccountResponse
 */
class ListAccountResponse extends BaseResponse
{

    /**
    
     * @var AccountInfo[]
     */
    public $dealer_infos;
}