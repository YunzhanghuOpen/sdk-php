<?php

namespace Yzh\Model\Dataservice;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 查询余额日账单数据返回
 * Class ListBalanceDailyStatementResponseData
 */
class ListBalanceDailyStatementResponseData extends BaseModel implements ResponseDataInterface
{
  /**
   * 条目信息
   * @var StatementDetail[]
   */
  protected $list;

  /**
   * @var array $items
   */
  public function setList($items)
  {
      $this->list = array();
      foreach ($items as $k => $v) {
          array_push($this->list, new StatementDetail($v));
      }
  }


  /**
   * 条目信息
   * @var StatementDetail[]
   */
  public function getList()
  {
    return $this->list;
  }
}
