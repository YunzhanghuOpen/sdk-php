<?php

namespace Yzh\Model\Invoice;

use Yzh\Model\BaseResponse;
use Yzh\Model\ResponseInterface;

/**
 * 发送发票扫描件压缩包下载链接邮件返回
 * Class SendReminderEmailResponse
 */
class SendReminderEmailResponse extends BaseResponse implements ResponseInterface
{
  /**
   * 获取数据对象
   * @return  SendReminderEmailResponseData
   */
  public function getData()
  {
    return $this->data;
  }

  /**
   * 设置数据对象
   * @param  array $data
   * @return SendReminderEmailResponseData
   */
  public function setData($data)
  {
    $this->data = new SendReminderEmailResponseData($data);
    return $this;
  }
}
