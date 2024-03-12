<?php

namespace Yzh;

use Yzh\Exception\ConfigException;
use Yzh\Exception\ExceptionCode;

class Config
{
    public $app_dealer_id;
    public $app_broker_id;
    public $app_key;
    public $sign_type;
    public $app_private_key;
    public $yzh_public_key;
    public $app_des3_key;
    public $timeout;
    public $env;
    public $service_name;

    const SIGN_TYPE_RSA = 'rsa';
    const SIGN_TYPE_HMAC = 'sha256';

    private function __construct()
    {
    }

    public static function newFromArray($params = array())
    {
        $config = new Config();

        if (isset($params['app_dealer_id']) && !empty($params['app_dealer_id'])) {
            $config->app_dealer_id = $params['app_dealer_id'];
        } else {
            throw new ConfigException("缺少 app_dealer_id", ExceptionCode::CONFIG_ERROR_LOST_KEY);
        }

        if (isset($params['app_broker_id']) && !empty($params['app_broker_id'])) {
            $config->app_broker_id = $params['app_broker_id'];
        } else {
            throw new ConfigException("缺少 app_broker_id", ExceptionCode::CONFIG_ERROR_LOST_KEY);
        }

        if (isset($params['app_key']) && !empty($params['app_key'])) {
            $config->app_key = $params['app_key'];
        } else {
            throw new ConfigException("缺少 app_key", ExceptionCode::CONFIG_ERROR_LOST_KEY);
        }

        if (isset($params['app_des3_key']) && !empty($params['app_des3_key'])) {
            $config->app_des3_key = $params['app_des3_key'];
        } else {
            throw new ConfigException("缺少 app_des3_key", ExceptionCode::CONFIG_ERROR_LOST_KEY);
        }

        if (isset($params['sign_type']) && !empty($params['sign_type'])) {
            $config->sign_type = $params['sign_type'];
        } else {
            $config->sign_type = self::SIGN_TYPE_RSA; // 默认是 RSA 签名
        }

        if (!in_array($config->sign_type, array(self::SIGN_TYPE_RSA, self::SIGN_TYPE_HMAC))) {
            throw new ConfigException("缺少 app_private_key", ExceptionCode::CONFIG_ERROR_WRONG_SIGN_TYPE);
        }

        if ($config->sign_type == self::SIGN_TYPE_RSA) {
            if (isset($params['app_private_key']) && !empty($params['app_private_key'])) {
                $config->app_private_key = $params['app_private_key'];
            } else {
                throw new ConfigException("缺少 app_private_key", ExceptionCode::CONFIG_ERROR_LOST_KEY);
            }

            if (isset($params['yzh_public_key']) && !empty($params['yzh_public_key'])) {
                $config->yzh_public_key = $params['yzh_public_key'];
            } else {
                throw new ConfigException("缺少 yzh_public_key", ExceptionCode::CONFIG_ERROR_LOST_KEY);
            }
        }

        if (isset($params['timeout']) && intval($params['timeout']) > 0) {
            $config->timeout = intval($params['timeout']);
        }

        if (isset($params['env']) && !empty($params['env'])) {
            $config->env = $params['env'];
        } else {
            $config->env = BaseClient::ENV_PROD;
        }

        if (isset($params["service_name"]) && !empty($params["service_name"])) {
            $config->service_name = $params["service_name"];
        }

        return $config;
    }
}
