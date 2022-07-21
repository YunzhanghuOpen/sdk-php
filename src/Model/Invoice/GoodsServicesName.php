<?php

namespace Yzh\Invoice;

use Yzh\Model\BaseModel;

/**
 * 系统支持的货物或应税劳务、服务名称
 * Class GoodsServicesName
 */
class GoodsServicesName extends BaseModel
{

    /**
     * 货物或应税劳务、服务名称
     * @var string
     */
    public $item;

    /**
     * 是否为默认值
     * @var bool
     */
    public $default;
}