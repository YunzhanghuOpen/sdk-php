<?php

namespace Yzh;


use Yzh\Model\Tax\GetTaxFileRequest;
use Yzh\Model\Tax\GetTaxFileResponse;
use Yzh\Model\Tax\GetUserCrossRequest;
use Yzh\Model\Tax\GetUserCrossResponse;

/**
 * 个税服务
 * Class TaxClient
 */
class TaxClient extends BaseClient
{
    protected static $service_name = 'tax';

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
     * 下载个税扣缴明细表
     * @param GetTaxFileRequest $request
     * @param null $option
     * @return GetTaxFileResponse
     */
    public function getTaxFile($request, $option = null)
    {
        if (!$request instanceof GetTaxFileRequest) {
            throw new \Exception("Tax->getTaxFile request 必须是 Yzh\\Model\\Tax\\GetTaxFileRequest 实例");
        }
        return $this->send('POST', '/api/tax/v1/taxfile/download', $request, "Yzh\\Model\\Tax\\GetTaxFileResponse", $option);
    }

    /**
     * GetUserCross 查询纳税人是否为跨集团用户
     * @param GetUserCrossRequest $request
     * @param null $option
     * @return GetUserCrossResponse
     */
    public function getUserCross($request, $option = null)
    {
        if (!$request instanceof GetUserCrossRequest) {
            throw new \Exception("Tax->getUserCross request 必须是 Yzh\\Model\\Tax\\GetUserCrossRequest 实例");
        }
        return $this->send('POST', '/api/tax/v1/user/cross', $request, "Yzh\\Model\\Tax\\GetUserCrossResponse", $option);
    }
}