<?php

namespace Yzh;

use Yzh\Exception\ConfigException;
use Yzh\Exception\ExceptionCode;

class Config
{
    const DEFAULT_TIMEOUT = 1;

    public $app_dealer_id;
    public $app_broker_id;
    public $app_key;
    public $app_des3_key;
    public $app_private_key;
    public $yzh_public_key;
    public $timeout;
    public $env;

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

        if (isset($params['timeout']) && intval($params['timeout']) > 0) {
            $config->timeout = intval($params['timeout']);
        } else {
            $config->timeout = self::DEFAULT_TIMEOUT;
        }
        if (isset($params['env']) && !empty($params['env'])) {
            $config->env = $params['env'];
        } else {
            $config->env = BaseClient::ENV_PROD;
        }

        return $config;
    }
}
