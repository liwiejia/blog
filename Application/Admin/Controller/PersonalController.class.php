<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 28/04/2018
 * Time: 10:52
 */

namespace Admin\Controller;
use Think\Controller;


class PersonalController extends CommonController {
    public function index(){
       // $member = M('users')->where('userid=' . $this->USER['uid'])->find();
        $this->assign('nav', array('Personal', 'profile', ''));//导航
        $this->assign('member', $this->USER);
        $this->display();
    }
    public function update(){




    }


}