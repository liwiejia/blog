<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/23
 * Time: 21:03
 */

namespace Index\Controller;
use Think\Controller;

class ApiController
{
    /**
     * 验证码
     */
    public function verify()
    {
        // 实例化Verify对象
        $verify = new \Think\Verify();

        // 配置验证码参数
        $verify->fontSize = 18;     // 验证码字体大小
        $verify->length = 4;        // 验证码位数
        $verify->imageH = 34;       // 验证码高度
        $verify->useImgBg = true;   // 开启验证码背景
        $verify->useNoise = false;  // 关闭验证码干扰杂点
        $verify->entry();
    }
    /**
     *
     */
    public function sendMail(){

        if(IS_POST){
            //获取mail
            $mail = I('post.email');

            $pattern="/([a-z0-9]*[-_.]?[a-z0-9]+)*@([a-z0-9]*[-_]?[a-z0-9]+)+[.][a-z]{2,3}([.][a-z]{2})?/i";
            if(!$mail || !preg_match($pattern,$mail)){
                exit(json_encode(array(
                    'status'=> 404, // 格式错误
                    'cap'=>'非有效Email，请检查是否输入错误'  // 错误信息
                )));
            }

            if(M('users')->where(array('email' => $mail))->find()){
                exit(json_encode(array(
                    'status'=> 403, // 格式错误
                    'cap'=>'此Email已注册'  // 错误信息
                )));
            }

            $verifyDate='';
            // 实例化mail_verify对象
            $mail_verify = M('mail_verify');
            if($date = $mail_verify->where(array('email' => $mail,'type'=>1))->find()){
                $verifyDate = $date;
                if((time()-$date['date'])< 60*30)
                    exit(json_encode(array(
                        'status' => 403, // 格式错误
                        'cap' => '已经发送了哦，请检查邮箱'  // 错误信息
                    )));
            }
            $verify = auth_code(rand_int(),"11") ;

            $str ="<div class='header' style='background-color: rgb(117, 212, 183); padding: 10px;'><span class='logo'><img src='__PUBLIC__/Image/log-1.png' style='width: 150px;'></span></div><div style='font-size: 14px;padding: 2em;'><br><br>        您好  ".$mail.",<br><br><p>您的验证码为：</p><h3 style='font-size: 60px; color: #f00; font-weight: bold;'>".auth_code($verify)."</h3><p>该验证邮件有效期为30分钟，超时请重新发送邮件。</p></div><div style='font-size: 14px; padding: 2em;'>        Regards<br>        Your  Team<br>        ------------------------------------<br><a href=''>www.blog.liweijia.site</a><br><div style='color: #999;'><p>发件时间：<span id='stickerTimer' style='border-bottom: 1px dashed rgb(204, 204, 204); position: relative;'  times='".date("G").":".date("i")."' isout='0'>".date("Y")."/".date("m")."/".date("d")."</span>  ".date("G").":".date("i").":".date("s")."</p><p>此邮件为系统自动发出的，请勿直接回复。</p></div></div>";

            $data=array(
                'verify' => $verify,
                'email' => $mail,
                'date' => time(),
                'type' => 1,
                'ip' => get_client_ip(),
            );

            if($verifyDate){
                $update = $mail_verify->where($verifyDate['id'])->save($data);
            }else{
                $add = $mail_verify->add($data);
            }

            if ($update || $add ) {
                $send_mail =send_mail($mail,$mail,'Blog-新用户注册验证码',$str);
                if($send_mail) {
                    exit(json_encode(array(
                        'status' => 200, // 格式错误
                        'cap' => '发送成功！'  // 错误信息
                    )));
                }else{
                    exit(json_encode(array(
                        'status' => 403, // 格式错误
                        'cap' => '网络不通畅，请稍后再试一下！'  // 错误信息
                    )));
                }
            } else {
                exit(json_encode(array(
                    'status' => 403, // 格式错误
                    'cap' => '网络不通畅，请稍后再试一下！'  // 错误信息
                )));
            }
        }

    }

}