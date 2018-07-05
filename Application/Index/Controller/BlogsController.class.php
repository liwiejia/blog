<?php
namespace Index\Controller;
use Think\Controller;
class BlogsController extends CommonController {
    public function index(){

        $this->assign('current', "专栏");
        $this->display();
    }
}