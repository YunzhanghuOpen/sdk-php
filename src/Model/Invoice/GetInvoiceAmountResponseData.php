<?php

namespace Yzh\Model\Invoice;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 查询可开具发票额度和发票开具信息返回
 * Class GetInvoiceAmountResponseData
 */
class GetInvoiceAmountResponseData extends BaseModel implements ResponseDataInterface
{
    /**
     * 可开票额度
     * @var string
     */
    protected $amount;
    /**
     * 系统支持的开户行及账号
     * @var BankNameAccount[]
     */
    protected $bank_name_account;
    /**
     * 系统支持的货物或应税劳务、服务名称
     * @var GoodsServicesName[]
     */
    protected $goods_services_name;

    /**
     * 可开票额度
     * @var string $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * 可开票额度
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * 系统支持的开户行及账号
     * @var array $items
     */
    public function setBankNameAccount($items)
    {
        $this->bank_name_account = array();
        foreach ($items as $k => $v) {
            array_push($this->bank_name_account, new BankNameAccount($v));
        }
    }

    /**
     * 系统支持的开户行及账号
     * @return BankNameAccount[]
     */
    public function getBankNameAccount()
    {
        return $this->bank_name_account;
    }

    /**
     * 系统支持的货物或应税劳务、服务名称
     * @var array $items
     */
    public function setGoodsServicesName($items)
    {
        $this->goods_services_name = array();
        foreach ($items as $k => $v) {
            array_push($this->goods_services_name, new GoodsServicesName($v));
        }
    }

    /**
     * 系统支持的货物或应税劳务、服务名称
     * @return GoodsServicesName[]
     */
    public function getGoodsServicesName()
    {
        return $this->goods_services_name;
    }
}
