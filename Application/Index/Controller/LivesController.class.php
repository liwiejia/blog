<?php
namespace Index\Controller;
use Think\Controller;
class LivesController extends CommonController {
    public function index(){

        $this->assign('current', "讲堂");
        $this->display();
    }
}