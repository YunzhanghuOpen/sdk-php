<?php

namespace Yzh\Model\H5usersign;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 预申请签约返回
 * Class H5UserPresignResponseData
 */
class H5UserPresignResponseData extends BaseModel implements ResponseDataInterface
{
  /**
   * 用户 ID（废弃字段）
   * @var string
   */
  protected $uid;
  /**
   * H5 签约 token
   * @var string
   */
  protected $token;
  /**
   * 签约状态
   * @var int32
   */
  protected $status;

  /**
   * 用户 ID（废弃字段）
   *  @var string $uid
   */
  public function setUid($uid)
  {
    $this->uid = $uid;
  }


  /**
   * 用户 ID（废弃字段）
   * @var string
   */
  public function getUid()
  {
    return $this->uid;
  }

  /**
   * H5 签约 token
   *  @var string $token
   */
  public function setToken($token)
  {
    $this->token = $token;
  }


  /**
   * H5 签约 token
   * @var string
   */
  public function getToken()
  {
    return $this->token;
  }

  /**
   * 签约状态
   *  @var int32 $status
   */
  public function setStatus($status)
  {
    $this->status = $status;
  }


  /**
   * 签约状态
   * @var int32
   */
  public function getStatus()
  {
    return $this->status;
  }
}
