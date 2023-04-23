<?php

namespace Yzh\Model\Bizlicxjjh5api;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 工商实名信息录入返回
 * Class H5PreCollectBizlicMsgResponse
 */
class H5PreCollectBizlicMsgResponse extends BaseResponse implements ResponseInterface
{
  /**
   * 获取数据对象
   * @return  H5PreCollectBizlicMsgResponseData
   */
  public function getData()
  {
    return $this->data;
  }

  /**
   * 设置数据对象
   * @param  array $data
   * @return H5PreCollectBizlicMsgResponseData
   */
  public function setData($data)
  {
    $this->data = new H5PreCollectBizlicMsgResponseData($data);
    return $this;
  }
}
