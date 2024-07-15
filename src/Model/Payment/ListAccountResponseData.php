<?php

namespace Yzh\Model\Payment;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 查询平台企业余额返回
 * Class ListAccountResponseData
 */
class ListAccountResponseData extends BaseModel implements ResponseDataInterface
{
    /**
     * @var AccountInfo[]
     */
    protected $dealer_infos;

    /**
     * @var array $items
     */
    public function setDealerInfos($items)
    {
        $this->dealer_infos = array();
        foreach ($items as $k => $v) {
            array_push($this->dealer_infos, new AccountInfo($v));
        }
    }

    /**
     * @return AccountInfo[]
     */
    public function getDealerInfos()
    {
        return $this->dealer_infos;
    }
}
