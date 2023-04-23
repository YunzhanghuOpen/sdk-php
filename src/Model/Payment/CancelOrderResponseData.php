<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 取消待支付订单返回
 * Class CancelOrderResponseData
 */
class CancelOrderResponseData extends BaseModel implements ResponseDataInterface
{
  /**
   
   * @var string
   */
  protected $ok;

  /**
  
   *  @var string $ok
   */
  public function setOk($ok)
  {
    $this->ok = $ok;
  }


  /**
  
   * @var string
   */
  public function getOk()
  {
    return $this->ok;
  }
}
