<?php

namespace Yzh\Model\H5usersign;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 预申请签约返回
 * Class H5UserPresignResponse
 */
class H5UserPresignResponse extends BaseResponse implements ResponseInterface
{
  /**
   * 获取数据对象
   * @return  H5UserPresignResponseData
   */
  public function getData()
  {
    return $this->data;
  }

  /**
   * 设置数据对象
   * @param  array $data
   * @return H5UserPresignResponseData
   */
  public function setData($data)
  {
    $this->data = new H5UserPresignResponseData($data);
    return $this;
  }
}
