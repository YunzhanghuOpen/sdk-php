<?php

namespace Yzh\Model\Dataservice;

use Yzh\Model\BaseModel;

/**
 * 月订单汇总数据详情
 * Class ListMonthlyOrderSummary
 */
class ListMonthlyOrderSummary extends BaseModel
{
    /**
     * 成功订单汇总
     * @var MonthlyOrderSummary
     */
    protected $success;
    /**
     * 处理中订单汇总
     * @var MonthlyOrderSummary
     */
    protected $processing;
    /**
     * 失败订单汇总
     * @var MonthlyOrderSummary
     */
    protected $failed;

    /**
     * 成功订单汇总
     * @var MonthlyOrderSummary $success
     */
    public function setSuccess($success)
    {
        $this->success = $success;
    }

    /**
     * 成功订单汇总
     * @return MonthlyOrderSummary
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * 处理中订单汇总
     * @var MonthlyOrderSummary $processing
     */
    public function setProcessing($processing)
    {
        $this->processing = $processing;
    }

    /**
     * 处理中订单汇总
     * @return MonthlyOrderSummary
     */
    public function getProcessing()
    {
        return $this->processing;
    }

    /**
     * 失败订单汇总
     * @var MonthlyOrderSummary $failed
     */
    public function setFailed($failed)
    {
        $this->failed = $failed;
    }

    /**
     * 失败订单汇总
     * @return MonthlyOrderSummary
     */
    public function getFailed()
    {
        return $this->failed;
    }
}
