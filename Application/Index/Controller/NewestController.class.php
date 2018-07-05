<?php
namespace Index\Controller;
use Think\Controller;
class NewestController extends CommonController {
    public function index(){
        $this->assign('current', "最新内容");
        $this->display();
    }
}