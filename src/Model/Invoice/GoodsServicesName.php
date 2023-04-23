<?php

namespace Yzh\Model\Invoice;

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
  protected $item;
  /**
   * 是否为默认值
   * @var bool
   */
  protected $default;
  
  /**
   * 货物或应税劳务、服务名称
   *  @var string $item
   */
  public function setItem($item)
  {
    $this->item = $item;
  }


  /**
   * 货物或应税劳务、服务名称
   * @var string
   */
  public function getItem()
  {
    return $this->item;
  }
  
  /**
   * 是否为默认值
   *  @var bool $default
   */
  public function setDefault($default)
  {
    $this->default = $default;
  }


  /**
   * 是否为默认值
   * @var bool
   */
  public function getDefault()
  {
    return $this->default;
  }
}
