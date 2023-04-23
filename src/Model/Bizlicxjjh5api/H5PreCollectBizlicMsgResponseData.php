<?php

namespace Yzh\Model\Bizlicxjjh5api;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 工商实名信息录入返回
 * Class H5PreCollectBizlicMsgResponseData
 */
class H5PreCollectBizlicMsgResponseData extends BaseModel implements ResponseDataInterface
{
  /**
   * 平台企业端的用户 ID
   * @var string
   */
  protected $dealer_user_id;

  /**
   * 平台企业端的用户 ID
   *  @var string $dealer_user_id
   */
  public function setDealerUserId($dealer_user_id)
  {
    $this->dealer_user_id = $dealer_user_id;
  }


  /**
   * 平台企业端的用户 ID
   * @var string
   */
  public function getDealerUserId()
  {
    return $this->dealer_user_id;
  }
}
