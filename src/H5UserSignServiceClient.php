<?php

namespace Yzh;
use Yzh\Model\H5UserSignService\H5UserPresignRequest;
use Yzh\Model\H5UserSignService\H5UserPresignResponse;
use Yzh\Model\H5UserSignService\H5UserSignRequest;
use Yzh\Model\H5UserSignService\H5UserSignResponse;
use Yzh\Model\H5UserSignService\GetH5UserSignStatusRequest;
use Yzh\Model\H5UserSignService\GetH5UserSignStatusResponse;
use Yzh\Model\H5UserSignService\H5UserReleaseRequest;
use Yzh\Model\H5UserSignService\H5UserReleaseResponse;

/**
 * H5签约接口
 * Class H5UserSignServiceClient
 */
class H5UserSignServiceClient extends BaseClient
{
    protected static $service_name = 'h5usersignservice';

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
            throw new \Exception("H5UserSignService->h5UserPresign request 必须是 Yzh\\Model\\H5UserSignService\\H5UserPresignRequest 实例");
        }
        return $this->send('POST', '/api/sdk/v1/presign', $request, "Yzh\\Model\\H5UserSignService\\H5UserPresignResponse", $option);
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
            throw new \Exception("H5UserSignService->h5UserSign request 必须是 Yzh\\Model\\H5UserSignService\\H5UserSignRequest 实例");
        }
        return $this->send('GET', '/api/sdk/v1/sign/h5', $request, "Yzh\\Model\\H5UserSignService\\H5UserSignResponse", $option);
    }

    /**
     * H5 获取用户签约状态
     * @param GetH5UserSignStatusRequest $request
     * @param null $option
     * @return GetH5UserSignStatusResponse
     */
    public function getH5UserSignStatus($request, $option = null)
    {
        if (!$request instanceof GetH5UserSignStatusRequest) {
            throw new \Exception("H5UserSignService->getH5UserSignStatus request 必须是 Yzh\\Model\\H5UserSignService\\GetH5UserSignStatusRequest 实例");
        }
        return $this->send('GET', '/api/sdk/v1/sign/user/status', $request, "Yzh\\Model\\H5UserSignService\\GetH5UserSignStatusResponse", $option);
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
            throw new \Exception("H5UserSignService->h5UserRelease request 必须是 Yzh\\Model\\H5UserSignService\\H5UserReleaseRequest 实例");
        }
        return $this->send('POST', '/api/sdk/v1/sign/release', $request, "Yzh\\Model\\H5UserSignService\\H5UserReleaseResponse", $option);
    }
}