<?php

namespace Yzh;

use Yzh\Exception\ConfigException;
use Yzh\Exception\ExceptionCode;
use Yzh\Exception\RunTimeException;
use Yzh\Model\Custom\CustomRequest;
use Yzh\Model\Custom\CustomResponse;
use Yzh\Model\Custom\CustomResponseData;

/**
 * 通用请求函数
 */
class CustomClient extends BaseClient {
    const METHOD_GET = "GET";
    const METHOD_POST = "POST";

    /**
     * 发起请求
     * @param string $method 请求方式 GET/POST
     * @param string $url 请求地址
     * @param Object $request 请求参数
     * @param Object $response 响应参数
     * @param null $option
     * @throws ConfigException
     * @throws RunTimeException
     */
    public function doRequest($method, $url, $request, $response, $option = null)
    {
        if (empty($this->config->service_name)) {
            throw new ConfigException("config service_name 必须设置", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        self::$service_name= $this->config->service_name;
        if (!$request instanceof CustomRequest) {
            throw new ConfigException("request 必须是 Yzh\Model\CustomerRequest 的子类", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        if (!$response instanceof CustomResponseData) {
            throw new ConfigException("response 必须是 Yzh\Model\CustomerResponseData 的子类", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
        }
        $method = strtoupper($method);
        $res = $this->send($method, $url, $request, "Yzh\\Model\\Custom\\CustomResponse", $option);
        if (!$res instanceof CustomResponse) {
            throw new RunTimeException("系统错误");
        }
        $res->setCustomerData($response);
        return $res;
    }
}
