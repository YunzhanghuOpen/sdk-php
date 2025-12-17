<?php

namespace Yzh\Model\Taxclearrefund;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 查询税费清缴完成结果返回
 * Class GetClearTaxInfoResponseData
 */
class GetClearTaxInfoResponseData extends BaseModel implements ResponseDataInterface
{
    /**
     * 清缴批次列表
     * @var ClearTaxData[]
     */
    protected $batch_list;

    /**
     * @var array $items
     */
    public function setBatchList($items)
    {
        $this->batch_list = array();
        foreach ($items as $k => $v) {
            array_push($this->batch_list, new ClearTaxData($v));
        }
    }

    /**
     * 清缴批次列表
     * @return ClearTaxData[]
     */
    public function getBatchList()
    {
        return $this->batch_list;
    }
}
