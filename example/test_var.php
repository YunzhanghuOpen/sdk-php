<?php
$test_var = array(

    // 平台企业 ID，登录云账户综合服务平台，选择“业务中心 > 业务管理 > 对接信息”获取
    'app_dealer_id' => '25***15',
    // 综合服务主体 ID，登录云账户综合服务平台，选择“业务中心 > 业务管理 > 对接信息”获取
    'app_broker_id' =>  '275***44',
    // 平台企业App Key，登录云账户综合服务平台，选择“业务中心 > 业务管理 > 对接信息”获取
    'app_key' => '0gyU3F***k516ES',
    // 平台企业 3DES Key，登录云账户综合服务平台，选择“业务中心 > 业务管理 > 对接信息”获取
    'app_des3_key' => 'Isg2W***zx6iP',
    // 签名方式，登录云账户综合服务平台，选择“业务中心 > 业务管理 > 对接信息”获取
    // 签名方式为 RSA，参数固定为：rsa
    'sign_type' =>'rsa',
    // 平台企业私钥，自行生成 RSA 公私钥，私钥请妥善保存，谨防泄露。平台企业公钥请登录云账户综合服务平台配置，选择“业务中心 > 业务管理 > 对接信息”，单击页面右上角的“编辑”，完成平台企业公钥配置
    'app_private_key' => '-----BEGIN PRIVATE KEY-----
MIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQDACZcSLLFF8KX2
*
*
*
ade7mYlW652td/f9vxIzPUsoeAEV8D5lgwndKKz2gs/tF7buP/drmAx3NKYvP2EV
SbuWiGzRX/nNUsg+/RKCR56k
-----END PRIVATE KEY-----',
    // 云账户公钥，登录云账户综合服务平台，选择“业务中心 > 业务管理 > 对接信息”获取
    'yzh_public_key' => '-----BEGIN PUBLIC KEY-----
MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDM8TIYAVN+xwvTyNOttvt+rVGo
*
*
*
bSPGVxNMgAMmu6PVLQIDAQAB
-----END PUBLIC KEY-----',
);