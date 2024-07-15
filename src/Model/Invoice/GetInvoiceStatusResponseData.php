<?php

namespace Yzh\Model\Invoice;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**
 * 查询发票开具申请状态返回
 * Class GetInvoiceStatusResponseData
 */
class GetInvoiceStatusResponseData extends BaseModel implements ResponseDataInterface
{
    /**
     * 申请结果
     * @var string
     */
    protected $status;
    /**
     * 发票张数
     * @var int64
     */
    protected $count;
    /**
     * 价税合计
     * @var string
     */
    protected $price_tax_amount;
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
     * 发票类型
     * @var string
     */
    protected $invoice_type;
    /**
     * 购方名称
     * @var string
     */
    protected $customer_name;
    /**
     * 纳税人识别号
     * @var string
     */
    protected $customer_tax_num;
    /**
     * 购方地址、电话
     * @var string
     */
    protected $customer_address_tel;
    /**
     * 开户行及账号
     * @var string
     */
    protected $bank_name_account;
    /**
     * 货物或应税劳务、服务名称
     * @var string
     */
    protected $goods_services_name;
    /**
     * 发票备注
     * @var string
     */
    protected $remark;
    /**
     * 邮寄类型
     * @var string
     */
    protected $post_type;
    /**
     * 快递单号
     * @var string[]
     */
    protected $waybill_number;

    /**
     * 申请结果
     * @var string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * 申请结果
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * 发票张数
     * @var int64 $count
     */
    public function setCount($count)
    {
        $this->count = $count;
    }

    /**
     * 发票张数
     * @return int64
     */
    public function getCount()
    {
        return $this->count;
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
     * 发票类型
     * @var string $invoice_type
     */
    public function setInvoiceType($invoice_type)
    {
        $this->invoice_type = $invoice_type;
    }

    /**
     * 发票类型
     * @return string
     */
    public function getInvoiceType()
    {
        return $this->invoice_type;
    }

    /**
     * 购方名称
     * @var string $customer_name
     */
    public function setCustomerName($customer_name)
    {
        $this->customer_name = $customer_name;
    }

    /**
     * 购方名称
     * @return string
     */
    public function getCustomerName()
    {
        return $this->customer_name;
    }

    /**
     * 纳税人识别号
     * @var string $customer_tax_num
     */
    public function setCustomerTaxNum($customer_tax_num)
    {
        $this->customer_tax_num = $customer_tax_num;
    }

    /**
     * 纳税人识别号
     * @return string
     */
    public function getCustomerTaxNum()
    {
        return $this->customer_tax_num;
    }

    /**
     * 购方地址、电话
     * @var string $customer_address_tel
     */
    public function setCustomerAddressTel($customer_address_tel)
    {
        $this->customer_address_tel = $customer_address_tel;
    }

    /**
     * 购方地址、电话
     * @return string
     */
    public function getCustomerAddressTel()
    {
        return $this->customer_address_tel;
    }

    /**
     * 开户行及账号
     * @var string $bank_name_account
     */
    public function setBankNameAccount($bank_name_account)
    {
        $this->bank_name_account = $bank_name_account;
    }

    /**
     * 开户行及账号
     * @return string
     */
    public function getBankNameAccount()
    {
        return $this->bank_name_account;
    }

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
     * 发票备注
     * @var string $remark
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;
    }

    /**
     * 发票备注
     * @return string
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * 邮寄类型
     * @var string $post_type
     */
    public function setPostType($post_type)
    {
        $this->post_type = $post_type;
    }

    /**
     * 邮寄类型
     * @return string
     */
    public function getPostType()
    {
        return $this->post_type;
    }

    /**
     * 快递单号
     * @var string[] $waybill_number
     */
    public function setWaybillNumber($waybill_number)
    {
        $this->waybill_number = $waybill_number;
    }

    /**
     * 快递单号
     * @return string[]
     */
    public function getWaybillNumber()
    {
        return $this->waybill_number;
    }
}
