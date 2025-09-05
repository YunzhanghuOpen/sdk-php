<?php

namespace Yzh;

use Yzh\Exception\ConfigException;
use Yzh\Exception\ExceptionCode;
use Yzh\Utils\Rsa;

/**
 * 专属客服链接
 * Class CustomerLinkServiceClient
 */
class CustomerLinkServiceClient extends BaseClient
{
        /**
         * 获取客服链接
         * @return str
         */
        public function getCustomerLink($member_id,$base_url)
        {

            $mess = MessString::rand(16);
            $timestamp = time();
            $signature="";
            // 签名
            $signdata = "data=member_id=".$member_id."&mess=".$mess."&timestamp=".$timestamp."&key=".$this->config->app_key;

            if ($this->config->sign_type == Config::SIGN_TYPE_RSA) {
                $signature = $this->rsa->sign($signdata);
            }else ($this->config->sign_type == Config::SIGN_TYPE_HMAC) {
                $signature = $this->hmac->sign($signdata);
            }

            $encodesign=urlencode($signature);

            $url=$base_url."?sign_type=rsa&sign=".$encodesign."&member_id=".$member_id."&mess=".$mess."&timestamp=".$timestamp;
            return  $url;
        }
    }