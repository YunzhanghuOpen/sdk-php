<?php

namespace Yzh\Utils;

use Yzh\Exception\ConfigException;
use Yzh\Exception\ExceptionCode;

class Rsa
{
    private static $instance;
    private $private_key;
    private $public_key;
    private $mode = "SHA256";

    private function __construct($privateKey = "", $publicKey = "")
    {
        if (!extension_loaded("openssl")) {
            throw new ConfigException("缺少 openssl 扩展", ExceptionCode::CONFIG_ERROR_LACK_PACKAGE);
        }

        $this->private_key = openssl_pkey_get_private($privateKey);
        if (!$this->private_key) {
            throw new ConfigException("私钥解析失败", ExceptionCode::CONFIG_ERROR_RSA_KEY_INVALID);
        }

        $this->public_key = openssl_pkey_get_public($publicKey);
        if (!$this->public_key) {
            throw new ConfigException("公钥解析失败", ExceptionCode::CONFIG_ERROR_RSA_KEY_INVALID);
        }
    }

    private function __clone()
    {
        return false;
    }

    public static function getInstance($privateKey = "", $publicKey = "")
    {
        if (!self::$instance instanceof Rsa) {
            self::$instance = new Rsa($privateKey, $publicKey);
        }
        return self::$instance;
    }

    /**
     * 私钥加密
     * @param $value
     * @return string
     */
    public function encrypt($value)
    {
        $encrypted = "";
        if (!openssl_private_encrypt($value, $encrypted, $this->private_key)) {
            throw new ConfigException("openssl 加密失败", ExceptionCode::PRIVATE_KEY_ENCRYPT_FAIL);
        }
        return $encrypted;
    }

    /**
     * 私钥解密
     * @param $encrypted
     * @return string
     */
    public function privateKeyDecrypt($encrypted)
    {
        $decrypted = "";
        if (!openssl_private_decrypt($encrypted, $decrypted, $this->private_key)) {
            throw new ConfigException("openssl 解密失败", ExceptionCode::PRIVATE_KEY_DECRYPT_FAIL);
        }
        return $decrypted;
    }

    /**
     * 公钥解密
     * @param $encrypted
     * @return string
     */
    public function decrypt($encrypted)
    {
        $decrypted = "";
        if (!openssl_public_decrypt($encrypted, $decrypted, $this->public_key)) {
            throw new ConfigException("openssl 解密失败", ExceptionCode::PUBLIC_KEY_DECRYPT_FAIL);
        }
        return $decrypted;
    }

    /**
     * 获取数据签名
     * @param $data
     * @return string
     */
    public function sign($data)
    {
        openssl_sign($data, $sign, $this->private_key, $this->mode);
        return base64_encode($sign);
    }

    /**
     * 验证数据签名
     * @param string $data 
     * @param string $sign
     * @return bool
     */
    public function verify($data, $sign)
    {
        $result = openssl_verify($data, base64_decode($sign), $this->public_key, $this->mode);
        return $result == 1;
    }
}
