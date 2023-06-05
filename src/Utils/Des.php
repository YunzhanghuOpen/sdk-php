<?php

namespace Yzh\Utils;

use Yzh\Exception\RunTimeException;
use Yzh\Exception\ExceptionCode;

class Des
{
    private $des3_key; // 密钥向量
    private $iv; // 混淆向量
    private $mode = 'cbc';

    /**
     * 构造，传递二个已经进行 base64_encode 的 KEY 与 IV
     * @param $des3key
     * @param null $iv
     */
    function __construct($des3key, $iv = null)
    {
        $this->des3_key = $des3key;
        $this->iv = $iv;
    }

    /**
     * 加密
     * @param $value
     * @return string
     * @throws RunTimeException
     */
    public function encrypt($value)
    {
        // 兼容5.3以前版本
        if (version_compare(PHP_VERSION, '5.3.0', '<')) {
            return $this->encrypt5($value);
        }
        $iv  = substr($this->des3_key, 0, 8);
        $ret = openssl_encrypt($value, 'DES-EDE3-CBC', $this->des3_key, 0, $iv);
        if (false === $ret) {
            $errMsg = "DES encrypt err";
            while ($errStr = openssl_error_string()) {
                $errMsg = $errStr;
            }
            throw new RunTimeException($errMsg, ExceptionCode::DES_KEY_ENCRYPT_FAIL);
        }
        return $ret;
    }

    /**
     * 解密
     * @param $value
     * @return bool|false|string
     * @throws RunTimeException
     */
    public function decrypt($value)
    {
        // 兼容5.3以前版本
        if (version_compare(PHP_VERSION, '5.3.0', '<')) {
            return $this->decrypt5($value);
        }
        $iv  = substr($this->des3_key, 0, 8);
        $ret = openssl_decrypt($value, 'DES-EDE3-CBC', $this->des3_key, 0, $iv);
        if (false === $ret) {
            $errMsg = "DES decrypt err";
            while ($errStr = openssl_error_string()) {
                $errMsg = $errStr;
            }
            throw new RunTimeException($errMsg, ExceptionCode::DES_KEY_DECRYPT_FAIL);
        }

        return $ret;
    }

    /**
     * 加密 5.3以前版本
     * @param $value
     * @return bool|false|string
     */
    private function encrypt5($value)
    {
        $td = mcrypt_module_open("tripledes", '', $this->mode, '');
        $iv = substr($this->des3_key, 0, 8);
        $value = $this->paddingPKCS7($value);
        if (false === $value) {
            return openssl_error_string();
        }
        @mcrypt_generic_init($td, $this->des3_key, $iv);
        $dec = mcrypt_generic($td, $value);
        $ret = base64_encode($dec);
        mcrypt_generic_deinit($td);
        mcrypt_module_close($td);
        return $ret;
    }

    /**
     * 解密 5.3以前版本
     * @param $value
     * @return bool|false|string
     */
    private function decrypt5($value)
    {
        $td = mcrypt_module_open("tripledes", '', $this->mode, '');
        $iv = substr($this->des3_key, 0, 8);
        @mcrypt_generic_init($td, $this->des3_key, $iv);
        $ret = trim(mdecrypt_generic($td, base64_decode($value)));
        $ret = $this->unPaddingPKCS7($ret);
        mcrypt_generic_deinit($td);
        mcrypt_module_close($td);
        return $ret;
    }

    /**
     * 填充
     * @param $value
     * @return bool|false|string
     */
    private function paddingPKCS7($value)
    {
        $blockSize = mcrypt_get_block_size('tripledes', $this->mode);
        if (false === $blockSize) {
            return false;
        }
        $paddingChar = $blockSize - (strlen($value) % $blockSize);
        $value .= str_repeat(chr($paddingChar), $paddingChar);
        return $value;
    }

    /**
     * 去掉填充
     * @param $value
     * @return bool|false|string
     */
    private function unPaddingPKCS7($value)
    {
        $pad = ord($value[strlen($value) - 1]);
        if ($pad > strlen($value)) {
            return false;
        }
        if (strspn($value, chr($pad), strlen($value) - $pad) != $pad) {
            return false;
        }
        return substr($value, 0, -1 * $pad);
    }
}
