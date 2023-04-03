<?php

namespace Yzh\Model\Authentication;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 上传免验证用户名单信息返回
 * Class UserExemptedInfoResponseData
 */
class UserExemptedInfoResponseData extends BaseModel implements ResponseDataInterface
{
  /**
   * 是否上传成功
   * @var string
   */
  protected $ok;

  /**
   * 是否上传成功
   *  @var string $ok
   */
  public function setOk($ok)
  {
    $this->ok = $ok;
  }


  /**
   * 是否上传成功
   * @var string
   */
  public function getOk()
  {
    return $this->ok;
  }
}
