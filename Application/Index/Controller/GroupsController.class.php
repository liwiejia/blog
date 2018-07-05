<?php
namespace Index\Controller;
use Think\Controller;
class GroupsController extends CommonController {
    public function index(){

        $this->assign('current', "圈子");
        $this->display();
    }
}