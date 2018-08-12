<?php
namespace Index\Controller;
use Think\Controller;
class FeedController extends CommonController {
    public function index(){

        $this->assign('current', "为你推荐");
        $this->display();
    }
}