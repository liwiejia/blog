<?php
// +----------------------------------------------------------------------
// | LTHINK [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2015-2016 http://LTHINK.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 涛哥 <liangtao.gz@foxmail.com>
// +----------------------------------------------------------------------
// | sdk_config.php 2015-12-01
// +----------------------------------------------------------------------
//定义回调URL通用的URL
define('URL_CALLBACK', 'http://blog.liweijia.site/User/callback/type/');
return array(
    //支付宝登录
    'THINK_SDK_ALIPAY' => array(
        'APP_KEY' => '', //应用注册成功后分配的 APP ID
        'APP_SECRET' => '', //应用注册成功后分配的KEY
        'CALLBACK' => URL_CALLBACK . 'alipay',
    ),
    //微信登录
    'THINK_SDK_WEIXIN' => array(
        'APP_KEY' => '', //应用注册成功后分配的 APP ID
        'APP_SECRET' => '', //应用注册成功后分配的KEY
        'CALLBACK' => URL_CALLBACK . 'weixin',
    ),
    //腾讯QQ登录配置
    'THINK_SDK_QQ' => array(
        'APP_KEY' => '101497958', //应用注册成功后分配的 APP ID
        'APP_SECRET' => '63d2c7341d7b12b5ea5ad84ec159ab0d', //应用注册成功后分配的KEY
        'CALLBACK' => URL_CALLBACK . 'qq.html',
    ),
    //腾讯微博配置
    'THINK_SDK_TENCENT' => array(
        'APP_KEY' => '111111', //应用注册成功后分配的 APP ID
        'APP_SECRET' => '11111', //应用注册成功后分配的KEY
        'CALLBACK' => URL_CALLBACK . 'tencent',
    ),
    //新浪微博配置
    'THINK_SDK_SINA' => array(
        'APP_KEY' => '1631390292', //应用注册成功后分配的 APP ID
        'APP_SECRET' => '7cccdd411ca51cbd33bdfb1f07c3d475', //应用注册成功后分配的KEY
        'CALLBACK' => URL_CALLBACK . 'sina.html',
    ),
    //网易微博配置
    'THINK_SDK_T163' => array(
        'APP_KEY' => '', //应用注册成功后分配的 APP ID
        'APP_SECRET' => '', //应用注册成功后分配的KEY
        'CALLBACK' => URL_CALLBACK . 't163',
    ),
    //人人网配置
    'THINK_SDK_RENREN' => array(
        'APP_KEY' => '', //应用注册成功后分配的 APP ID
        'APP_SECRET' => '', //应用注册成功后分配的KEY
        'CALLBACK' => URL_CALLBACK . 'renren',
    ),
    //360配置
    'THINK_SDK_X360' => array(
        'APP_KEY' => '', //应用注册成功后分配的 APP ID
        'APP_SECRET' => '', //应用注册成功后分配的KEY
        'CALLBACK' => URL_CALLBACK . 'x360',
    ),
    //豆瓣配置
    'THINK_SDK_DOUBAN' => array(
        'APP_KEY' => '', //应用注册成功后分配的 APP ID
        'APP_SECRET' => '', //应用注册成功后分配的KEY
        'CALLBACK' => URL_CALLBACK . 'douban',
    ),
    //Github配置
    'THINK_SDK_GITHUB' => array(
        'APP_KEY' => '', //应用注册成功后分配的 APP ID
        'APP_SECRET' => '', //应用注册成功后分配的KEY
        'CALLBACK' => URL_CALLBACK . 'github',
    ),
    //Google配置
    'THINK_SDK_GOOGLE' => array(
        'APP_KEY' => '', //应用注册成功后分配的 APP ID
        'APP_SECRET' => '', //应用注册成功后分配的KEY
        'CALLBACK' => URL_CALLBACK . 'google',
    ),
    //MSN配置
    'THINK_SDK_MSN' => array(
        'APP_KEY' => '', //应用注册成功后分配的 APP ID
        'APP_SECRET' => '', //应用注册成功后分配的KEY
        'CALLBACK' => URL_CALLBACK . 'msn',
    ),
    //点点配置
    'THINK_SDK_DIANDIAN' => array(
        'APP_KEY' => '', //应用注册成功后分配的 APP ID
        'APP_SECRET' => '', //应用注册成功后分配的KEY
        'CALLBACK' => URL_CALLBACK . 'diandian',
    ),
    //淘宝网配置
    'THINK_SDK_TAOBAO' => array(
        'APP_KEY' => '', //应用注册成功后分配的 APP ID
        'APP_SECRET' => '', //应用注册成功后分配的KEY
        'CALLBACK' => URL_CALLBACK . 'taobao',
    ),
    //百度配置
    'THINK_SDK_BAIDU' => array(
        'APP_KEY' => '', //应用注册成功后分配的 APP ID
        'APP_SECRET' => '', //应用注册成功后分配的KEY
        'CALLBACK' => URL_CALLBACK . 'baidu',
    ),
    //开心网配置
    'THINK_SDK_KAIXIN' => array(
        'APP_KEY' => '', //应用注册成功后分配的 APP ID
        'APP_SECRET' => '', //应用注册成功后分配的KEY
        'CALLBACK' => URL_CALLBACK . 'kaixin',
    ),
    //搜狐微博配置
    'THINK_SDK_SOHU' => array(
        'APP_KEY' => '', //应用注册成功后分配的 APP ID
        'APP_SECRET' => '', //应用注册成功后分配的KEY
        'CALLBACK' => URL_CALLBACK . 'sohu',
    ),
);