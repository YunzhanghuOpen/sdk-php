# 云账户 SDK for PHP
欢迎使用云账户 SDK for PHP。    
云账户是一家专注为平台企业和新就业形态劳动者提供高质量灵活就业服务的新时代企业。云账户 SDK 对云账户综合服务平台API接口进行封装，让您不必关心过多参数请求，帮助您快速接入到云账户综合服务平台。云账户 SDK for PHP 为您提供签约、下单、回调、数据查询等功能，帮助您完成与云账户综合服务平台的接口对接及业务开发。           
如果您在使用过程中遇到任何问题，欢迎在当前 GitHub 提交 Issues，或发送邮件至技术支持组 [techsupport@yunzhanghu.com](mailto:techsupport@yunzhanghu.com)。

## 环境要求

云账户 SDK for PHP 支持 PHP 5.4 及其以上版本。

## 配置密钥
### 1、获取配置

使用云账户 SDK for PHP 前，您需先获取 dealer_id、broker_id、3DES Key、App Key 信息。  
获取方式：使用开户邮件中的账号登录【[云账户综合服务平台](https://service.yunzhanghu.com)】，选择“业务中心 > 业务管理 > 对接信息”，查看并获取以上配置信息。
![获取配置信息](https://infra-engineering-yos-prod.obs.cn-north-1.myhuaweicloud.com/3edacfcb8f2f689d3ee6e9e7aba983139a8ec869-duijiexinxi.png)

### 2、生成密钥

- 方式一：使用 OpenSSL 生成 RSA 公私钥

```
① ⽣成私钥 private_key.pem

Openssl-> genrsa -out private_key.pem 2048   // 建议密钥⻓度⾄少为 2048 位

OpenSSL-> pkcs8 -topk8 -inform PEM -in private_key.pem -outform PEM -nocrypt -out private_key_pkcs8.pem    // 将私钥转为 PKCS8 格式 

② ⽣成公钥 pubkey.pem

Openssl-> rsa -in private_key.pem -pubout -out pubkey.pem
```

- 方式二：使用工具生成

请联系云账户技术支持获取 RSA 密钥生成工具

### 3、配置密钥

登录【[云账户综合服务平台](https://service.yunzhanghu.com)】，选择"业务中心 > 业务管理 > 对接信息"，单击页面右上角的"编辑"，配置平台企业公钥。  
![配置平台企业公钥信息](https://infra-engineering-yos-prod.obs.cn-north-1.myhuaweicloud.com/6cfd4c1c6560b7ae99d5c3cb358aea23b9433c58-dujiexinxi-2.png)

## 安装 PHP SDK  
### 1、安装依赖

```
composer install
```

### 2、Composer 安装 SDK

```
composer require yunzhanghuopen/sdk-php
```


## 快速使用

### 示例功能列表

- [H5 签约](example/h5UserSign.php ) or [API 签约](example/apiUserSign.php )  
- [实时下单接口](example/payment.php ) 
- [订单异步回调](example/notify.php )     
- [数据接口](example/dataService.php )    
- [发票接口](example/invoice.php )     
- [个税扣缴明细表下载接口](example/tax.php )       
- [用户信息验证接口](example/verify.php )      


### 示例
```
<?php
   define('TEST_PATH', dirname(__FILE__));
   include_once(TEST_PATH . '/../vendor/autoload.php');
   include_once(TEST_PATH . '/test_var.php');
   
   use Yzh\Config;
   use Yzh\Model\Payment\CreateBankpayOrderRequest;
   use Yzh\PaymentClient;
   
   $config = Config::newFromArray(array(
       'app_dealer_id' => $test_var['app_dealer_id'],
       'app_broker_id' => $test_var['app_broker_id'],
       'app_key' => $test_var['app_key'],
       'app_des3_key' => $test_var['app_des3_key'],
       'app_private_key' => $test_var['app_private_key'],
       'yzh_public_key' => $test_var['yzh_public_key'],
   ));
   
   try {
       $paymentClient = new PaymentClient($config);
       $paymentClient->setEnv(PaymentClient::ENV_PROD);
   } catch (\Exception $e) {
       die($e->getMessage());
   }
   
   
   //银行卡实时下单
   $request = new CreateBankpayOrderRequest(array(
       'order_id' => 'bank12345678901111',                
       'dealer_id' => $test_var['app_dealer_id'],        
       'broker_id' => $test_var['app_broker_id'],        
       'real_name' => '张一',                             
       'card_no' => '6214012345678910',                   
       'id_card' => '110101012345678910',               
       'phone_no' => '18100000000',                       
       'pay' => '0.1',                                    
       'pay_remark' => '测试订单',                           
       'notify_url' => 'http://localhost/php-sdk-2/test/callback.php',   
       'project_id' => ''              
   ));
   $response = $paymentClient->createBankpayOrder($request);
   var_dump(array('request'=>$request, 'response'=>$response));
   
```
