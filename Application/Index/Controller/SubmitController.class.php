<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/29
 * Time: 20:53
 */

namespace Index\Controller;
use Think\Controller;



class SubmitController extends PowerController {
    public function index(){

        $this->assign('current', "发头条");
        $this->display();
    }

}