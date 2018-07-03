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
            <h3 class="panel-title">重置密码</h3>
        </div>
        <div class="panel-body sfModal-content login-modal">
            <form class="form--forgot-password login-wrap mt15 mb15" action="<?php echo U('User/forgot');?>" method="POST" id="user" role="form">
                <div class="form-group" data-type="phone">
                    <label class="control-label">Email</label>
                    <div>
                        <input type="email"  class=" form-control email" name="email" placeholder="Email"  required="">
                    </div>
                </div>
                <div class="captchaInput mb15 form-group">
                    <input type="text" class="form-control" name="verify" placeholder="右侧的验证码" style="width: 50%;display: inline;margin-right: 15px;" id="cap-area" required="">
                    <span class="mt10 ">
                        <a id="loginReloadCaptcha" href="javascript:void(0)">
                        <img src="<?php echo U('Api/verify');?>" onclick="this.src=this.src+'?'+Math.random()" class="captcha" width="135" height="34"></a>
                    </span>
                </div>
                <button type="submit" id="submit" class="btn btn-primary btn-block">提交</button>

            </form>
        </div>
    </div>
</div>
<script type="text/javascript" src="/blog/Public/Js/jquery.min.js"></script>
<script type="text/javascript" src="/blog/Public/Js/Index/index.min.js"></script>

<script>
    var a =new Array();
    $("form")[0].addEventListener('submit',function(t){
        t.preventDefault();
        var o = {},
            r = $(this).closest("form").find("input:not(.hide,hidden)");
        r.each(function() {
            var t = $(this)
                , n = t.attr("name")
                , a = t.val();
            o[n] = a
        });
        if(a.length>0){
            for(i=0;i<a.length;i++){
                $('[name='+a[i]+']').parent().removeClass("has-error")
                $('[name='+a[i]+']').siblings("[class='help-block err']").remove();
            }
            a.length=0;
        }

        if(o.verify.length!=4){
            $('[name="verify"]').parent().append('<span class="help-block err">图形验证码错误</span>')
            $('[name="verify"]').parent().addClass("has-error");
            a.push('verify')
            return false;
        }

        $("#submit").prop("disabled", !0);
        $.post("<?php echo U('User/forgot');?>", o, function(e) {
            e=JSON.parse(e);
            if(e.status!=200){
                $('.captcha').click();
                for(i=0;i<e.cap.length;i++){
                    !$('[name='+e.cap[i].name+']').siblings("[class='help-block err']").length ? $('[name='+e.cap[i].name+']').parent().append('<span class="help-block err">'+e.cap[i].value+'</span>'):$('[name='+e.cap[i].name+']').siblings("[class='help-block err']")[0].innerHTML = e.cap[i].value;
                    $('[name='+e.cap[i].name+']').parent().addClass("has-error");
                    a.push(e.cap[i].name);
                }

            }else{
                window.location.reload();
            }
            $("#submit").prop("disabled", !1);
        })
    });
</script>

</body>
</html>