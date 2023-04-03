<?php

namespace Yzh\Model\Authentication;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 查看免验证用户名单是否存在返回
 * Class UserWhiteCheckResponseData
 */
class UserWhiteCheckResponseData extends BaseModel implements ResponseDataInterface
{
  /**
   
   * @var bool
   */
  protected $ok;

  /**
  
   *  @var bool $ok
   */
  public function setOk($ok)
  {
    $this->ok = $ok;
  }


  /**
  
   * @var bool
   */
  public function getOk()
  {
    return $this->ok;
  }
}
