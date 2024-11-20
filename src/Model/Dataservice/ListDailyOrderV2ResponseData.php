<?php

namespace Yzh\Model\Dataservice;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 查询日订单数据（支付和退款订单）返回
 * Class ListDailyOrderV2ResponseData
 */
class ListDailyOrderV2ResponseData extends BaseModel implements ResponseDataInterface
{
    /**
     * 总条数
     * @var int32
     */
    protected $total_num;
    /**
     * 条目明细
     * @var DealerOrderInfoV2[]
     */
    protected $list;

    /**
     * 总条数
     * @var int32 $total_num
     */
    public function setTotalNum($total_num)
    {
        $this->total_num = $total_num;
    }

    /**
     * 总条数
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
            array_push($this->list, new DealerOrderInfoV2($v));
        }
    }

    /**
     * 条目明细
     * @return DealerOrderInfoV2[]
     */
    public function getList()
    {
        return $this->list;
    }
}
