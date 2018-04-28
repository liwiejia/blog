<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 27/04/2018
 * Time: 16:06
 */

namespace Admin\Controller;


class SendmailController
{
    public function sendMail(){
        if(IS_POST){
            if($_GET['type'] == "blog"){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $number = $_POST['number'];
                $message = $_POST['message'];

                $str ="<div class='header' style='background-color: rgb(117, 212, 183); padding: 10px;'><span class='logo'><img src='__PUBLIC__/Image/logo.png' style='width: 150px;'></span></div><div style='font-size: 14px;padding: 2em;'><br><br>        您好  李伟佳,<br><br><p>Email：".$email."</p><p>电话:".$number."</p><p>留言内容:".$message."</p></div><div style='font-size: 14px; padding: 2em;'>        Regards<br>        Your Blog Team<br>        ------------------------------------<br><a href=''>www.liweijia.site</a><br><div style='color: #999;'><p>发件时间：<span id='stickerTimer' style='border-bottom: 1px dashed rgb(204, 204, 204); position: relative;'  times='".date("G").":".date("i")."' isout='0'>".date("Y")."/".date("m")."/".date("d")."</span>  ".date("G").":".date("i").":".date("s")."</p><p>此邮件为系统自动发出的，请勿直接回复。</p></div></div></body>
";
                if(send_mail("1076217644@qq.com","李伟佳",$name."-向您留言",$str))
                    exit(json_encode(array("status"=>200)));
                else
                    exit(json_encode(array("status"=>500)));
            }
        }
    }
}