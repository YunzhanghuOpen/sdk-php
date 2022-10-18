<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseResponse;

/**
 * 批量下单返回
 * Class CreateBatchOrderResponse
 */
class CreateBatchOrderResponse extends BaseResponse
{

    /**
     * 平台企业批次号
     * @var string
     */
    public $batch_id;

    /**
     * 订单结果列表
     * @var BatchOrderResult[]
     */
    public $result_list;
}