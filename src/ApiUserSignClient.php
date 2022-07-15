<?php

namespace Yzh;
use Yzh\Model\ApiUserSign\ApiUseSignContractRequest;
use Yzh\Model\ApiUserSign\ApiUseSignContractResponse;
use Yzh\Model\ApiUserSign\ApiUserSignRequest;
use Yzh\Model\ApiUserSign\ApiUserSignResponse;
use Yzh\Model\ApiUserSign\GetApiUserSignStatusRequest;
use Yzh\Model\ApiUserSign\GetApiUserSignStatusResponse;
use Yzh\Model\ApiUserSign\ApiUserSignReleaseRequest;
use Yzh\Model\ApiUserSign\ApiUserSignReleaseResponse;

/**
 * API签约接口
 * Class ApiUserSignServiceClient
 */
class ApiUserSignClient extends BaseClient
{
    protected static $service_name = 'usersign';

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
            throw new \Exception("ApiUserSignService->apiUseSignContract request 必须是 Yzh\\Model\\Apiusersign\\ApiUseSignContractRequest 实例");
        }
        return $this->send('GET', '/api/sign/v1/user/contract', $request, "Yzh\\Model\\Apiusersign\\ApiUseSignContractResponse", $option);
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
            throw new \Exception("ApiUserSignService->apiUserSign request 必须是 Yzh\\Model\\Apiusersign\\ApiUserSignRequest 实例");
        }
        return $this->send('POST', '/api/sign/v1/user/sign', $request, "Yzh\\Model\\Apiusersign\\ApiUserSignResponse", $option);
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
            throw new \Exception("ApiUserSignService->getApiUserSignStatus request 必须是 Yzh\\Model\\Apiusersign\\GetApiUserSignStatusRequest 实例");
        }
        return $this->send('GET', '/api/sign/v1/user/status', $request, "Yzh\\Model\\Apiusersign\\GetApiUserSignStatusResponse", $option);
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
            throw new \Exception("ApiUserSignService->apiUserSignRelease request 必须是 Yzh\\Model\\Apiusersign\\ApiUserSignReleaseRequest 实例");
        }
        return $this->send('POST', '/api/sign/v1/user/release', $request, "Yzh\\Model\\Apiusersign\\ApiUserSignReleaseResponse", $option);
    }
}