<?php

namespace Yzh\Model\Tax;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 查询纳税人是否为跨集团用户返回
 * Class GetUserCrossResponseData
 */
class GetUserCrossResponseData extends BaseModel implements ResponseDataInterface
{
  /**
   * 跨集团标识
   * @var bool
   */
  protected $is_cross;

  /**
   * 跨集团标识
   *  @var bool $is_cross
   */
  public function setIsCross($is_cross)
  {
    $this->is_cross = $is_cross;
  }


  /**
   * 跨集团标识
   * @var bool
   */
  public function getIsCross()
  {
    return $this->is_cross;
  }
}
