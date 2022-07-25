<?php

namespace Yzh;


use Yzh\Model\Invoice\GetInvoiceStatRequest;
use Yzh\Model\Invoice\GetInvoiceStatResponse;
use Yzh\Model\Invoice\GetInvoiceAmountRequest;
use Yzh\Model\Invoice\GetInvoiceAmountResponse;
use Yzh\Model\Invoice\ApplyInvoiceRequest;
use Yzh\Model\Invoice\ApplyInvoiceResponse;
use Yzh\Model\Invoice\GetInvoiceStatusRequest;
use Yzh\Model\Invoice\GetInvoiceStatusResponse;
use Yzh\Model\Invoice\GetInvoiceFileRequest;
use Yzh\Model\Invoice\GetInvoiceFileResponse;
use Yzh\Model\Invoice\SendReminderEmailRequest;
use Yzh\Model\Invoice\SendReminderEmailResponse;

/**
 * Invoice 发票接口
 */
class InvoiceClient extends BaseClient
{
    protected static $service_name = 'invoice';

    public function __construct($config)
    {
        if(!$config instanceof Config){
            throw new \Exception('config 参数必须是 Yzh\\Config 实例');
        }
        $this->config = $config;
        $this->setEnv($config->env);
        parent::__construct();
    }

    /**
     * 查询平台企业已开具和待开具发票金额
     * @param GetInvoiceStatRequest $request
     * @param null $option
     * @return GetInvoiceStatResponse
     */
    public function getInvoiceStat($request, $option = null)
    {
        if (!$request instanceof GetInvoiceStatRequest) {
            throw new \Exception("Invoice->getInvoiceStat request 必须是 Yzh\\Model\\Invoice\\GetInvoiceStatRequest 实例");
        }
        return $this->send('GET', '/api/payment/v1/invoice-stat', $request, "Yzh\\Model\\Invoice\\GetInvoiceStatResponse", $option);
    }

    /**
     * 查询可开票额度和开票信息
     * @param GetInvoiceAmountRequest $request
     * @param null $option
     * @return GetInvoiceAmountResponse
     */
    public function getInvoiceAmount($request, $option = null)
    {
        if (!$request instanceof GetInvoiceAmountRequest) {
            throw new \Exception("Invoice->getInvoiceAmount request 必须是 Yzh\\Model\\Invoice\\GetInvoiceAmountRequest 实例");
        }
        return $this->send('POST', '/api/invoice/v2/invoice-amount', $request, "Yzh\\Model\\Invoice\\GetInvoiceAmountResponse", $option);
    }

    /**
     * 开票申请
     * @param ApplyInvoiceRequest $request
     * @param null $option
     * @return ApplyInvoiceResponse
     */
    public function applyInvoice($request, $option = null)
    {
        if (!$request instanceof ApplyInvoiceRequest) {
            throw new \Exception("Invoice->applyInvoice request 必须是 Yzh\\Model\\Invoice\\ApplyInvoiceRequest 实例");
        }
        return $this->send('POST', '/api/invoice/v2/apply', $request, "Yzh\\Model\\Invoice\\ApplyInvoiceResponse", $option);
    }

    /**
     * 查询开票申请状态
     * @param GetInvoiceStatusRequest $request
     * @param null $option
     * @return GetInvoiceStatusResponse
     */
    public function getInvoiceStatus($request, $option = null)
    {
        if (!$request instanceof GetInvoiceStatusRequest) {
            throw new \Exception("Invoice->getInvoiceStatus request 必须是 Yzh\\Model\\Invoice\\GetInvoiceStatusRequest 实例");
        }
        return $this->send('POST', '/api/invoice/v2/invoice/invoice-status', $request, "Yzh\\Model\\Invoice\\GetInvoiceStatusResponse", $option);
    }

    /**
     * 下载 PDF 版发票
     * @param GetInvoiceFileRequest $request
     * @param null $option
     * @return GetInvoiceFileResponse
     */
    public function getInvoiceFile($request, $option = null)
    {
        if (!$request instanceof GetInvoiceFileRequest) {
            throw new \Exception("Invoice->getInvoiceFile request 必须是 Yzh\\Model\\Invoice\\GetInvoiceFileRequest 实例");
        }
        return $this->send('POST', '/api/invoice/v2/invoice/invoice-pdf', $request, "Yzh\\Model\\Invoice\\GetInvoiceFileResponse", $option);
    }

    /**
     * 发送发票扫描件压缩包下载链接邮件
     * @param SendReminderEmailRequest $request
     * @param null $option
     * @return SendReminderEmailResponse
     */
    public function sendReminderEmail($request, $option = null)
    {
        if (!$request instanceof SendReminderEmailRequest) {
            throw new \Exception("Invoice->sendReminderEmail request 必须是 Yzh\\Model\\Invoice\\SendReminderEmailRequest 实例");
        }
        return $this->send('POST', '/api/invoice/v2/invoice/reminder/email', $request, "Yzh\\Model\\Invoice\\SendReminderEmailResponse", $option);
    }
}