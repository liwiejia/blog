<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo (L("login_title")); ?></title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link href="/Blog/Public/Plugin/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/Blog/Public/Style/Admin/login.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/Blog/Public/Js/jquery.min.js"></script>
    <script type="text/javascript" src="/Blog/Public/Plugin/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/Blog/Public/Js/Admin/login.js"></script>
</head>
<body>

<div class="text-center login">
    <h1>登录</h1>
    <form action="/Blog/index.php/Admin/Login/login.html" method="post" class="form" >
        <div class="input-group input-group-lg" id="username"  data-toggle="tooltip" data-placement="right" data-trigger="focus" title="" foucs-message="请输入您的用户名" lost-message="用户名格式不正确（请输入需包含字母数字中的一种或两种,长度为4-22位）">
            <span class="input-group-addon" > <span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
            <input type="text" class="form-control" placeholder="用户名" aria-describedby="basic-addon1" name="username" >
            <span class="glyphicon   form-control-feedback" aria-hidden="true"></span>

        </div>
        <div class="input-group input-group-lg" id="password" data-toggle="tooltip" data-placement="right" data-trigger="focus" title="" foucs-message="请输入您的密码" lost-message="密码格式不正确（请输入需包含字母数字以及@*#中的一种,长度为6-22位）">
            <span class="input-group-addon" > <span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
            <input type="password" class="form-control" placeholder="密码" aria-describedby="basic-addon2" name="password">
        </div>
        <div class="input-group input-group-lg" id="verify" data-toggle="tooltip" data-placement="right" data-trigger="focus" title="" placeholder="<?php echo (L("verify")); ?>" foucs-message="请输入验证码" lost-message="验证码格式不正确（长度为4位）">
            <span class="input-group-addon" > <span class="glyphicon glyphicon glyphicon-pencil" aria-hidden="true"></span></span>
            <input type="text" class="form-control" placeholder="验证码" aria-describedby="basic-addon2" name="verify" style="width: 40%">
            <img  class="img-rounded" src="<?php echo U(verify);?>" alt="<?php echo (L("verify")); ?>" onclick="this.src=this.src+'?'+Math.random()" style="float: right; height: 40px;width:130px">
        </div>
        <button type="submit" id="fat-btn" class="btn btn-primary " data-loading-text="Loading...">登录</button>
    </form>
</div>


<script type="text/javascript">

</script>
<script>
  function Al(AlertStr) {
     return   $AlertL=$('<div id="myAlert" class="alert alert-warning"><a href="#" class="close" data-dismiss="alert">&times;</a><strong>警告！</strong>'+AlertStr+'</div>');
  }

    $(".form").submit(function(e){
        e.preventDefault();
        e.stopPropagation();
        var data = new Object();
        data.username = $("input[name='username']").val();
        data.password = $("input[name='password']").val();
        data.verify = $("input[name='verify']").val();
        if (data.username == '') {
            AlertStr=$("input[name='username']").parent().attr('lost-message');
            $("body").append(Al(AlertStr));
            $("input[name='username']").focus();
            return false;
        }
        if (data.password == '') {
            AlertStr=$("input[name='username']").parent().attr('lost-message');
            $("body").append(Al(AlertStr));
            $("input[name='password']").focus();
            return false;
        }
        if (data.verify == '') {
            $("input[name='verify']").focus();
            return false;
        }
      //  $("#fat-btn").button('loading');
        var url = $(this).attr('action');
        $.post(url, data , function(json){
            if (json.status) {
               // showInfor(json.info);
                $("#fat-btn").button('reset');
                window.location.href = "/Blog/index.php/Admin/Index/index";
            }else {
                $("#fat-btn").button('reset');
                AlertStr=json.info;
                $("body").append(Al(AlertStr));

                $(".verify_img").trigger('click');
                return false;
            }
        }, 'json');
        return false;
    });
</script>
</body>
</html>