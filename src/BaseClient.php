<?php

namespace Yzh;

use Yzh\Exception\ConfigException;
use Yzh\Exception\ExceptionCode;
use Yzh\Exception\HttpException;
use Yzh\Config;
use Yzh\Utils\Rsa;
use Yzh\Utils\Des;
use Yzh\Utils\MessString;
// use Guzzle\Http\Client as HttpClient;

defined("JSON_UNESCAPED_UNICODE") or define("JSON_UNESCAPED_UNICODE", 256);

abstract class BaseClient
{
    const ENV_PROD = "yzh_env_prod";
    const ENV_SANDBOX = "yzh_env_sandbox";

    protected $env;
    /**
     * @var Config
     */
    protected $config;
    protected static $service_name;

    protected static $env_service_host_map = array(
        self::ENV_PROD => array( // 正式环境
            'payment' => 'https://api-service.yunzhanghu.com', // 实时支付服务接口域名
            'tax' => 'https://api-service.yunzhanghu.com',
            'authentication' => 'https://api-service.yunzhanghu.com',
            'invoice' => 'https://api-service.yunzhanghu.com',
            'ins' => 'https://api-ins.yunzhanghu.com',         // 保险服务接口域名
            'aic' => 'https://api-aic.yunzhanghu.com',         // 个体工商户注册服务接口域名
            'task' => 'https://api-task.yunzhanghu.com',       // 任务库服务接口域名
            'dataservice' => 'https://api-service.yunzhanghu.com',    // 数据服务接口域名
            'apiusersignservice' => 'https://api-service.yunzhanghu.com',    // API 用户签约接口域名
            'h5usersignservice' => 'https://api-service.yunzhanghu.com',    // H5 用户签约接口域名


        ),
        self::ENV_SANDBOX => array( // 沙箱环境
            'payment' => 'https://api-service.yunzhanghu.com/sandbox',   // 实时支付服务接口域名
            'authentication' => 'https://api-service.yunzhanghu.com/sandbox', // 用户信息验证接口域名
            'apiusersignservice' => 'https://api-service.yunzhanghu.com/sandbox',   // API 用户签约接口域名
            'h5usersignservice' => 'https://api-service.yunzhanghu.com/sandbox',   // H5 用户签约接口域名
            'ins' => '',       // 保险服务接口域名
            'aic' => '',       // 个体工商户注册服务接口域名
            'task' => '',      // 任务库服务接口域名
            'dataservice' => '', // 数据服务接口域名
        ),
    );

    private $rsa;
    private $des;


    protected function __construct()
    {
        $this->rsa = Rsa::getInstance($this->config->app_private_key, $this->config->yzh_public_key);
        $this->des = new Des($this->config->app_des3_key);
    }


    public function setEnv($envName)
    {
        if (!in_array($envName, array(self::ENV_PROD, self::ENV_SANDBOX), true)) {
            throw new \Exception("请选择正确的服务环境");
        }
        $this->env = $envName;
        return $this;
    }


    protected function get($url, $data, $header, $option)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL =>  $url  . '?' . http_build_query($data),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CONNECTTIMEOUT => $option->getConnectTimeout(),
            CURLOPT_TIMEOUT => $option->getTimeout(),
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => $header,
        ));

        $response = curl_exec($curl);
        $curlInfo = curl_getinfo($curl);
        curl_close($curl);

        if ($curlInfo['http_code'] != 200) {
            throw new HttpException("请求失败,response:" . $response, $curlInfo['http_code']);
        }
        return $response;
    }

    /**
     * @var Option $option 
     */
    protected function post($url, $data, $header, $option)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CONNECTTIMEOUT => $option->getConnectTimeout(),
            CURLOPT_TIMEOUT => $option->getTimeout(),
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => http_build_query($data),
            CURLOPT_HTTPHEADER => $header,
        ));
        $response = curl_exec($curl);
        $curlInfo = curl_getinfo($curl);
        curl_close($curl);

        if ($curlInfo['http_code'] != 200) {
            throw new HttpException("请求失败,response:" . $response, $curlInfo['http_code']);
        }
        return $response;
    }

    protected function send($method, $path, $request, $responseDataClass, $option = null)
    {
        if (!is_null($option) && !$option instanceof Option) {
            throw new \Exception("参数 option 必须为 Yzh\\Request\\Option 实例");
        }

        if (is_null($option)) {
            $option = new Option(array('timeout' => $this->config->timeout));
        }

        // 获取接口请求参数
        $requestData = $this->getRequestData($request);
        $responseDecoder = property_exists($request, 'data_type') && $request->data_type == 'encryption' ? $this->des : null;

        // 获取 url 的 path 部分, 将 path 部分拼接到传入的 path 上
        $baseUrl = self::$env_service_host_map[$this->env][$this::$service_name];
        if (empty($baseUrl)) {
            throw new ConfigException('该环境不支持该请求,环境为:' . $this::$service_name, ExceptionCode::CONFIG_ERROR_UNSUPPORT_URL_IN_CURRENT_ENV);
        }

        $header = array(
            'Content-Type: application/x-www-form-urlencoded',
            'dealer-id: ' . $this->config->app_dealer_id,
            'request-id:' . MessString::rand(32)
        );

        $url = $baseUrl . $path;
        if ($method == "GET") {
            $response = $this->get($url, $requestData, $header, $option);
        } else {
            $response = $this->post($url, $requestData, $header, $option);
        }

        return ApiResponse::newFromResponse($response, $responseDataClass, $responseDecoder);
    }


    private function getRequestData($request)
    {
        $encryptedBody = $this->des->encrypt(json_encode($request->getRequestData(), JSON_UNESCAPED_UNICODE));
        $mess = MessString::rand(16);
        $nowts = time();
        $sign = $this->rsa->sign(sprintf("data=%s&mess=%s&timestamp=%d&key=%s", $encryptedBody, $mess, $nowts, $this->config->app_key));
        return array(
            'data' => $encryptedBody,
            'mess' => $mess,
            'timestamp' => $nowts,
            'sign' => $sign,
            'sign_type' => 'rsa',
        );
    }
}
