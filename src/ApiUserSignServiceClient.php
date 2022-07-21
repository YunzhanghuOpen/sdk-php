<?php

namespace Yzh;
use Yzh\Model\ApiUserSignService\ApiUseSignContractRequest;
use Yzh\Model\ApiUserSignService\ApiUseSignContractResponse;
use Yzh\Model\ApiUserSignService\ApiUserSignRequest;
use Yzh\Model\ApiUserSignService\ApiUserSignResponse;
use Yzh\Model\ApiUserSignService\GetApiUserSignStatusRequest;
use Yzh\Model\ApiUserSignService\GetApiUserSignStatusResponse;
use Yzh\Model\ApiUserSignService\ApiUserSignReleaseRequest;
use Yzh\Model\ApiUserSignService\ApiUserSignReleaseResponse;

/**
 * API签约接口
 * Class ApiUserSignServiceClient
 */
class ApiUserSignServiceClient extends BaseClient
{
    protected static $service_name = 'apiusersignservice';

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
     * 获取协议预览 URL
     * @param ApiUseSignContractRequest $request
     * @param null $option
     * @return ApiUseSignContractResponse
     */
    public function apiUseSignContract($request, $option = null)
    {
        if (!$request instanceof ApiUseSignContractRequest) {
            throw new \Exception("ApiUserSignService->apiUseSignContract request 必须是 Yzh\\Model\\ApiUserSignService\\ApiUseSignContractRequest 实例");
        }
        return $this->send('GET', '/api/sign/v1/user/contract', $request, "Yzh\\Model\\ApiUserSignService\\ApiUseSignContractResponse", $option);
    }

    /**
     * 用户签约
     * @param ApiUserSignRequest $request
     * @param null $option
     * @return ApiUserSignResponse
     */
    public function apiUserSign($request, $option = null)
    {
        if (!$request instanceof ApiUserSignRequest) {
            throw new \Exception("ApiUserSignService->apiUserSign request 必须是 Yzh\\Model\\ApiUserSignService\\ApiUserSignRequest 实例");
        }
        return $this->send('POST', '/api/sign/v1/user/sign', $request, "Yzh\\Model\\ApiUserSignService\\ApiUserSignResponse", $option);
    }

    /**
     * 获取用户签约状态
     * @param GetApiUserSignStatusRequest $request
     * @param null $option
     * @return GetApiUserSignStatusResponse
     */
    public function getApiUserSignStatus($request, $option = null)
    {
        if (!$request instanceof GetApiUserSignStatusRequest) {
            throw new \Exception("ApiUserSignService->getApiUserSignStatus request 必须是 Yzh\\Model\\ApiUserSignService\\GetApiUserSignStatusRequest 实例");
        }
        return $this->send('GET', '/api/sign/v1/user/status', $request, "Yzh\\Model\\ApiUserSignService\\GetApiUserSignStatusResponse", $option);
    }

    /**
     * 用户解约（测试账号专用接口）
     * @param ApiUserSignReleaseRequest $request
     * @param null $option
     * @return ApiUserSignReleaseResponse
     */
    public function apiUserSignRelease($request, $option = null)
    {
        if (!$request instanceof ApiUserSignReleaseRequest) {
            throw new \Exception("ApiUserSignService->apiUserSignRelease request 必须是 Yzh\\Model\\ApiUserSignService\\ApiUserSignReleaseRequest 实例");
        }
        return $this->send('POST', '/api/sign/v1/user/release', $request, "Yzh\\Model\\ApiUserSignService\\ApiUserSignReleaseResponse", $option);
    }
}