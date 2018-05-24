<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ThinkLogin</title>
</head>
<body>
<ul>
    <li><a href="login/type/qq">腾讯QQ用户登录</a></li>
    <li><a href="login/type/tencent">腾讯微博用户登录</a></li>
    <li><a href="login/type/sina">新浪微博用户登录</a></li>
    <li><a href="login/type/t163">网易微博用户登录</a></li>
    <li><a href="login/type/renren">人人网用户登录</a></li>
    <li><a href="login/type/x360">360用户登录</a></li>
    <li><a href="login/type/douban">豆瓣用户登录</a></li>
    <li><a href="login/type/github">Github用户登录</a></li>
    <li><a href="login/type/google">Google用户登录</a></li>
    <li><a href="login/type/msn">MSN用户登录</a></li>
    <li><a href="login/type/diandian">点点用户登录</a></li>
    <li><a href="login/type/taobao">淘宝网用户登录</a></li>
    <li><a href="login/type/baidu">百度用户登录</a></li>
    <li><a href="login/type/kaixin">开心网用户登录</a></li>
    <li><a href="login/type/sohu">搜狐微博用户登录</a></li>
</ul>
<form id="upload" method='post' action="/blog/index.php/Admin/Test/upload/" enctype="multipart/form-data">
    <input name="image" type="file" />
    <input type="submit" value="提交" >
</form>

</body>
</html>