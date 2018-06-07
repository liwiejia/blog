<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 06/06/2018
 * Time: 09:34
 */

namespace Index\Controller;
use Think\Controller;

class CommonController extends Controller {
    /* 定义用户id */
    public static $Iuserid ='';
    public $IUSER;

    /**
     * 自动执行
     */
    public function _initialize()
    {
        // 判断用户是否登录
        $info = '1';
        if (session('Iuid')) {
            $this->Iuserid = session('uid');
            $info = M('users')->where(array('userid' => $this->userid))->find();
        }

        $category = M('category')->select();
        $this->assign('category', $category);
        $this->assign('info', $info);

    }
}