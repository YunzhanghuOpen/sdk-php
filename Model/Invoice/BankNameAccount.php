<?php

namespace Yzh\Invoice;

use Yzh\Model\BaseModel;

/**
 * 系统支持的开户行及账号
 * Class BankNameAccount
 */
class BankNameAccount extends BaseModel
{

    /**
     * 开户行及账号
     * @var string
     */
    public $item;

    /**
     * 是否为默认值
     * @var bool
     */
    public $default;
}