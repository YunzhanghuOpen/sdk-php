<?php

namespace Yzh\Model\Dataservice;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 查询日订单数据返回
 * Class ListDailyOrderResponseData
 */
class ListDailyOrderResponseData extends BaseModel implements ResponseDataInterface
{
    /**
     * 总数目
     * @var int32
     */
    protected $total_num;
    /**
     * 条目信息
     * @var DealerOrderInfo[]
     */
    protected $list;

    /**
     * 总数目
     * @var int32 $total_num
     */
    public function setTotalNum($total_num)
    {
        $this->total_num = $total_num;
    }

    /**
     * 总数目
     * @return int32
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
            array_push($this->list, new DealerOrderInfo($v));
        }
    }

    /**
     * 条目信息
     * @return DealerOrderInfo[]
     */
    public function getList()
    {
        return $this->list;
    }
}
