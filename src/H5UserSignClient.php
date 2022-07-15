<?php

namespace Yzh;
use Yzh\Model\H5usersign\H5UserPresignRequest;
use Yzh\Model\H5usersign\H5UserPresignResponse;
use Yzh\Model\H5usersign\H5UserSignRequest;
use Yzh\Model\H5usersign\H5UserSignResponse;
use Yzh\Model\H5usersign\GeH5UserSignStatusRequest;
use Yzh\Model\H5usersign\GeH5UserSignStatusResponse;
use Yzh\Model\H5usersign\H5UserReleaseRequest;
use Yzh\Model\H5usersign\H5UserReleaseResponse;

/**
 * H5签约接口
 * Class H5UserSignServiceClient
 */
class H5UserSignClient extends BaseClient
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
     * H5 预申请签约接口
     * @param H5UserPresignRequest $request
     * @param null $option
     * @return H5UserPresignResponse
     */
    public function h5UserPresign($request, $option = null)
    {
        if (!$request instanceof H5UserPresignRequest) {
            throw new \Exception("H5UserSignService->h5UserPresign request 必须是 Yzh\\Model\\H5usersign\\H5UserPresignRequest 实例");
        }
        return $this->send('POST', '/api/sdk/v1/presign', $request, "Yzh\\Model\\H5usersign\\H5UserPresignResponse", $option);
    }

    /**
     * H5 签约接口
     * @param H5UserSignRequest $request
     * @param null $option
     * @return H5UserSignResponse
     */
    public function h5UserSign($request, $option = null)
    {
        if (!$request instanceof H5UserSignRequest) {
            throw new \Exception("H5UserSignService->h5UserSign request 必须是 Yzh\\Model\\H5usersign\\H5UserSignRequest 实例");
        }
        return $this->send('GET', '/api/sdk/v1/sign/h5', $request, "Yzh\\Model\\H5usersign\\H5UserSignResponse", $option);
    }

    /**
     * H5 获取用户签约状态
     * @param GeH5UserSignStatusRequest $request
     * @param null $option
     * @return GeH5UserSignStatusResponse
     */
    public function geH5UserSignStatus($request, $option = null)
    {
        if (!$request instanceof GeH5UserSignStatusRequest) {
            throw new \Exception("H5UserSignService->geH5UserSignStatus request 必须是 Yzh\\Model\\H5usersign\\GeH5UserSignStatusRequest 实例");
        }
        return $this->send('GET', '/api/sdk/v1/sign/user/status', $request, "Yzh\\Model\\H5usersign\\GeH5UserSignStatusResponse", $option);
    }

    /**
     * H5 对接测试解约接口
     * @param H5UserReleaseRequest $request
     * @param null $option
     * @return H5UserReleaseResponse
     */
    public function h5UserRelease($request, $option = null)
    {
        if (!$request instanceof H5UserReleaseRequest) {
            throw new \Exception("H5UserSignService->h5UserRelease request 必须是 Yzh\\Model\\H5usersign\\H5UserReleaseRequest 实例");
        }
        return $this->send('POST', '/api/sdk/v1/sign/release', $request, "Yzh\\Model\\H5usersign\\H5UserReleaseResponse", $option);
    }
}