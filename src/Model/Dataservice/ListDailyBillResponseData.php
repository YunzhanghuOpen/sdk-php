<?php

namespace Yzh\Model\Dataservice;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 查询日流水数据返回
 * Class ListDailyBillResponseData
 */
class ListDailyBillResponseData extends BaseModel implements ResponseDataInterface
{
  /**
   * 总条数
   * @var int32
   */
  protected $total_num;
  /**
   * 条目信息
   * @var DealerBillInfo[]
   */
  protected $list;

  /**
   * 总条数
   *  @var int32 $total_num
   */
  public function setTotalNum($total_num)
  {
    $this->total_num = $total_num;
  }


  /**
   * 总条数
   * @var int32
   */
  public function getTotalNum()
  {
    return $this->total_num;
  }

  /**
   * @var array $items
   */
  public function setList($items)
  {
      $this->list = array();
      foreach ($items as $k => $v) {
          array_push($this->list, new DealerBillInfo($v));
      }
  }


  /**
   * 条目信息
   * @var DealerBillInfo[]
   */
  public function getList()
  {
    return $this->list;
  }
}
