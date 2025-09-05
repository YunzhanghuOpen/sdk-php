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
        public function getCustomerLink($request)
        {
            if (!$request instanceof GetCustomerLinkRequest) {
                throw new ConfigException("CustomerLink->getCustomerLink request 必须是 Yzh\\Model\\CustomerLink\\GetCustomerLinkRequest 实例", ExceptionCode::CONFIG_ERROR_WRONG_PARAM);
            }

             $signature="";
             // 签名
             $signdata = "data=member_id=".$request->memberID."&mess=".$request->mess."&timestamp=".$request->timestamp."&key=".$this->config->app_key;

             if ($this->config->sign_type == Config::SIGN_TYPE_RSA) {
                $signature =$this->rsa->sign($signdata);
             }else ($this->config->sign_type == Config::SIGN_TYPE_HMAC) {
                $signature =$this->hmac->sign($signdata);
             }

             $encodesign=urlencode($signature);

             $url=$request->base_url."?sign_type=rsa&sign=".$encodesign."&member_id=".$member_id."&mess=".$mess."&timestamp=".$timestamp;
             return  $url;
        }
    }