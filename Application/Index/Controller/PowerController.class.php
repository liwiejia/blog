<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/29
 * Time: 21:00
 */

namespace Index\Controller;
use Think\Controller;


class PowerController extends Controller {
    public function _initialize()
    {


        if (session('Iuid')) {

            $this->Iuserid = session('Iuid');

            $info = M('users')->where(array('id' => $this->Iuserid))->find();
            $this->assign('info', $info);
        }else{
            $this->error('对不起,您还没有登录,正跳转至登录面...', U('User/login'));
        }

    }

}