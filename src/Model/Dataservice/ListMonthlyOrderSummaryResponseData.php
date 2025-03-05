<?php

namespace Yzh\Model\Dataservice;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 查询月订单汇总数据返回
 * Class ListMonthlyOrderSummaryResponseData
 */
class ListMonthlyOrderSummaryResponseData extends BaseModel implements ResponseDataInterface
{
    /**
     * 汇总数据列表
     * @var ListMonthlyOrderSummary
     */
    protected $summary;

    /**
     * 汇总数据列表
     * @var ListMonthlyOrderSummary $summary
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;
    }

    /**
     * 汇总数据列表
     * @return ListMonthlyOrderSummary
     */
    public function getSummary()
    {
        return $this->summary;
    }
}
