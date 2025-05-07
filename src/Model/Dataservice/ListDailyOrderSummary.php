<?php

namespace Yzh\Model\Dataservice;

use Yzh\Model\BaseModel;

/**
 * 日订单汇总数据详情
 * Class ListDailyOrderSummary
 */
class ListDailyOrderSummary extends BaseModel
{
    /**
     * 订单查询日期，格式：yyyy-MM-dd
     * @var string
     */
    protected $date;
    /**
     * 成功订单汇总
     * @var DailyOrderSummary
     */
    protected $success;
    /**
     * 处理中订单汇总
     * @var DailyOrderSummary
     */
    protected $processing;
    /**
     * 失败订单汇总
     * @var DailyOrderSummary
     */
    protected $failed;

    /**
     * 订单查询日期，格式：yyyy-MM-dd
     * @var string $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * 订单查询日期，格式：yyyy-MM-dd
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * 成功订单汇总
     * @var DailyOrderSummary $success
     */
    public function setSuccess($success)
    {
        $this->success = $success;
    }

    /**
     * 成功订单汇总
     * @return DailyOrderSummary
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * 处理中订单汇总
     * @var DailyOrderSummary $processing
     */
    public function setProcessing($processing)
    {
        $this->processing = $processing;
    }

    /**
     * 处理中订单汇总
     * @return DailyOrderSummary
     */
    public function getProcessing()
    {
        return $this->processing;
    }

    /**
     * 失败订单汇总
     * @var DailyOrderSummary $failed
     */
    public function setFailed($failed)
    {
        $this->failed = $failed;
    }

    /**
     * 失败订单汇总
     * @return DailyOrderSummary
     */
    public function getFailed()
    {
        return $this->failed;
    }
}
