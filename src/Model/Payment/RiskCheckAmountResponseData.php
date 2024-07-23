<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 用户结算金额校验返回
 * Class RiskCheckAmountResponseData
 */
class RiskCheckAmountResponseData extends BaseModel implements ResponseDataInterface
{
    /**
     * 是否超过月限额
     * @var bool
     */
    protected $is_over_whole_user_month_quota;
    /**
     * 是否超过年限额
     * @var bool
     */
    protected $is_over_whole_user_year_quota;

    /**
     * 是否超过月限额
     * @var bool $is_over_whole_user_month_quota
     */
    public function setIsOverWholeUserMonthQuota($is_over_whole_user_month_quota)
    {
        $this->is_over_whole_user_month_quota = $is_over_whole_user_month_quota;
    }

    /**
     * 是否超过月限额
     * @return bool
     */
    public function getIsOverWholeUserMonthQuota()
    {
        return $this->is_over_whole_user_month_quota;
    }

    /**
     * 是否超过年限额
     * @var bool $is_over_whole_user_year_quota
     */
    public function setIsOverWholeUserYearQuota($is_over_whole_user_year_quota)
    {
        $this->is_over_whole_user_year_quota = $is_over_whole_user_year_quota;
    }

    /**
     * 是否超过年限额
     * @return bool
     */
    public function getIsOverWholeUserYearQuota()
    {
        return $this->is_over_whole_user_year_quota;
    }
}
