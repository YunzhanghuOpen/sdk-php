<?php

namespace Yzh\Model\Taxclearrefund;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 查询税费退补涉及劳动者返回
 * Class GetRefundTaxLaborInfoResponseData
 */
class GetRefundTaxLaborInfoResponseData extends BaseModel implements ResponseDataInterface
{
    /**
     * 税款所属期
     * @var string
     */
    protected $tax_month;
    /**
     * 批次号
     * @var string
     */
    protected $batch_id;
    /**
     * 批次生成时间
     * @var string
     */
    protected $batch_create_time;
    /**
     * 退补税劳动者数量
     * @var string
     */
    protected $labor_num;
    /**
     * 退补税订单数量
     * @var string
     */
    protected $order_num;
    /**
     * 总数据条数
     * @var string
     */
    protected $total_num;
    /**
     * 退补税劳动者明细
     * @var LaborRefundInfo[]
     */
    protected $labor_refund_info;

    /**
     * 税款所属期
     * @var string $tax_month
     */
    public function setTaxMonth($tax_month)
    {
        $this->tax_month = $tax_month;
    }

    /**
     * 税款所属期
     * @return string
     */
    public function getTaxMonth()
    {
        return $this->tax_month;
    }

    /**
     * 批次号
     * @var string $batch_id
     */
    public function setBatchId($batch_id)
    {
        $this->batch_id = $batch_id;
    }

    /**
     * 批次号
     * @return string
     */
    public function getBatchId()
    {
        return $this->batch_id;
    }

    /**
     * 批次生成时间
     * @var string $batch_create_time
     */
    public function setBatchCreateTime($batch_create_time)
    {
        $this->batch_create_time = $batch_create_time;
    }

    /**
     * 批次生成时间
     * @return string
     */
    public function getBatchCreateTime()
    {
        return $this->batch_create_time;
    }

    /**
     * 退补税劳动者数量
     * @var string $labor_num
     */
    public function setLaborNum($labor_num)
    {
        $this->labor_num = $labor_num;
    }

    /**
     * 退补税劳动者数量
     * @return string
     */
    public function getLaborNum()
    {
        return $this->labor_num;
    }

    /**
     * 退补税订单数量
     * @var string $order_num
     */
    public function setOrderNum($order_num)
    {
        $this->order_num = $order_num;
    }

    /**
     * 退补税订单数量
     * @return string
     */
    public function getOrderNum()
    {
        return $this->order_num;
    }

    /**
     * 总数据条数
     * @var string $total_num
     */
    public function setTotalNum($total_num)
    {
        $this->total_num = $total_num;
    }

    /**
     * 总数据条数
     * @return string
     */
    public function getTotalNum()
    {
        return $this->total_num;
    }

    /**
     * @var array $items
     */
    public function setLaborRefundInfo($items)
    {
        $this->labor_refund_info = array();
        foreach ($items as $k => $v) {
            array_push($this->labor_refund_info, new LaborRefundInfo($v));
        }
    }

    /**
     * 退补税劳动者明细
     * @return LaborRefundInfo[]
     */
    public function getLaborRefundInfo()
    {
        return $this->labor_refund_info;
    }
}
