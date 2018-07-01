<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta property="qc:admins" content="15317273575564615446375">
    <meta property="og:image" content="https://static.segmentfault.com/v-5b112aa6/global/img/touch-icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="alexaVerifyID" content="LkzCRJ7rPEUwt6fVey2vhxiw1vQ">
    <meta name="apple-itunes-app" content="app-id=958101793, app-argument=">
    <title><?php echo ($current['title']); ?>-<?php echo ($webcConfig["sitename"]); ?></title>
    <meta name="description" content="Liweijia-Blog ( blog.liweijia.site) 是开发者技术社区。 我希望为编程爱好者提供一个纯粹、高质的技术交流的平台， 与开发者一起学习、交流与成长，创造属于开发者的时代！">
    <meta name="keywords" content="Liweijia-Blog,Liweijia-Blog,IT技术社区,编程社区,技术问答,技术文章,技术笔记,技术活动,开发者,程序员,极客,编程,代码,开源">
    <link rel="shortcut icon" href="/blog/Public/Image/favicon.ico">
    <link href="/blog/Public/Style/Index/head.css" rel="stylesheet" type="text/css">
    <link href="/blog/Public/Plugin/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<style>
    .panel {width: 600px}
    @media(max-width: 600px) {
        .panel {width: 100%}
    }
</style>
<div class="container">
    <div class="header text-center">
        <h1>
            <a href="/" class="logo">
                <img src="/blog/Public/Image/home-logo.png" alt="Liweijia-Blog">
            </a>
        </h1>
        <p class="description text-muted">欢迎来到Liwieji-Blog</p>
    </div>
    <div class="panel panel-default center-block">
        <div class="panel-heading">
            <h3 class="panel-title">登录</h3>
        </div>
        <div class="panel-body sfModal-content">

        </div>
    </div>
</div>

<script type="text/javascript" src="/blog/Public/Js/jquery.min.js"></script>
<script type="text/javascript" src="/blog/Public/Js/Index/index.min.js"></script>

<script>

    $(document).ready(function (){
        $('body').attr('class','user-login ')
        str= loginStr.replace("{partyStr}",partyStr).replace("{loRore}",'<a class="btn-block btn btn-default pull-right pl20 pr20 SFLogin" href="<?php echo U('User/register');?>"> 注册新账号 </a>')
        $(".panel-body.sfModal-content").html(str);
        checkLogin()
    });

</script>
</body>
</html>