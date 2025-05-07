<?php

namespace Yzh\Model\Dataservice;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 查询日订单汇总数据返回
 * Class ListDailyOrderSummaryResponseData
 */
class ListDailyOrderSummaryResponseData extends BaseModel implements ResponseDataInterface
{
    /**
     * 汇总数据列表
     * @var ListDailyOrderSummary[]
     */
    protected $summary_list;

    /**
     * @var array $items
     */
    public function setSummaryList($items)
    {
        $this->summary_list = array();
        foreach ($items as $k => $v) {
            array_push($this->summary_list, new ListDailyOrderSummary($v));
        }
    }

    /**
     * 汇总数据列表
     * @return ListDailyOrderSummary[]
     */
    public function getSummaryList()
    {
        return $this->summary_list;
    }
}
