<?php

namespace Yzh\Model\Invoice;

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
    protected $item;
    /**
     * 是否为默认值
     * @var bool
     */
    protected $default;

    /**
     * 开户行及账号
     * @var string $item
     */
    public function setItem($item)
    {
        $this->item = $item;
    }

    /**
     * 开户行及账号
     * @return string
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * 是否为默认值
     * @var bool $default
     */
    public function setDefault($default)
    {
        $this->default = $default;
    }

    /**
     * 是否为默认值
     * @return bool
     */
    public function getDefault()
    {
        return $this->default;
    }
}
