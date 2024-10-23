<?php

namespace Yzh\Model\Invoice;

use Yzh\Model\BaseModel;

/**
 * 查询发票信息返回
 * Class InformationDataInfo
 */
class InformationDataInfo extends BaseModel
{
    /**
     * 货物或应税劳务、服务名称
     * @var string
     */
    protected $goods_services_name;
    /**
     * 发票号码
     * @var string
     */
    protected $invoice_num;
    /**
     * 发票代码
     * @var string
     */
    protected $invoice_code;
    /**
     * 不含税金额
     * @var string
     */
    protected $price_amount;
    /**
     * 税额
     * @var string
     */
    protected $tax_amount;
    /**
     * 税率
     * @var string
     */
    protected $tax_rate;
    /**
     * 价税合计
     * @var string
     */
    protected $price_tax_amount;
    /**
     * 开票日期
     * @var string
     */
    protected $invoiced_date;
    /**
     * 发票状态
     * @var string
     */
    protected $status;

    /**
     * 货物或应税劳务、服务名称
     * @var string $goods_services_name
     */
    public function setGoodsServicesName($goods_services_name)
    {
        $this->goods_services_name = $goods_services_name;
    }

    /**
     * 货物或应税劳务、服务名称
     * @return string
     */
    public function getGoodsServicesName()
    {
        return $this->goods_services_name;
    }

    /**
     * 发票号码
     * @var string $invoice_num
     */
    public function setInvoiceNum($invoice_num)
    {
        $this->invoice_num = $invoice_num;
    }

    /**
     * 发票号码
     * @return string
     */
    public function getInvoiceNum()
    {
        return $this->invoice_num;
    }

    /**
     * 发票代码
     * @var string $invoice_code
     */
    public function setInvoiceCode($invoice_code)
    {
        $this->invoice_code = $invoice_code;
    }

    /**
     * 发票代码
     * @return string
     */
    public function getInvoiceCode()
    {
        return $this->invoice_code;
    }

    /**
     * 不含税金额
     * @var string $price_amount
     */
    public function setPriceAmount($price_amount)
    {
        $this->price_amount = $price_amount;
    }

    /**
     * 不含税金额
     * @return string
     */
    public function getPriceAmount()
    {
        return $this->price_amount;
    }

    /**
     * 税额
     * @var string $tax_amount
     */
    public function setTaxAmount($tax_amount)
    {
        $this->tax_amount = $tax_amount;
    }

    /**
     * 税额
     * @return string
     */
    public function getTaxAmount()
    {
        return $this->tax_amount;
    }

    /**
     * 税率
     * @var string $tax_rate
     */
    public function setTaxRate($tax_rate)
    {
        $this->tax_rate = $tax_rate;
    }

    /**
     * 税率
     * @return string
     */
    public function getTaxRate()
    {
        return $this->tax_rate;
    }

    /**
     * 价税合计
     * @var string $price_tax_amount
     */
    public function setPriceTaxAmount($price_tax_amount)
    {
        $this->price_tax_amount = $price_tax_amount;
    }

    /**
     * 价税合计
     * @return string
     */
    public function getPriceTaxAmount()
    {
        return $this->price_tax_amount;
    }

    /**
     * 开票日期
     * @var string $invoiced_date
     */
    public function setInvoicedDate($invoiced_date)
    {
        $this->invoiced_date = $invoiced_date;
    }

    /**
     * 开票日期
     * @return string
     */
    public function getInvoicedDate()
    {
        return $this->invoiced_date;
    }

    /**
     * 发票状态
     * @var string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * 发票状态
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
}
