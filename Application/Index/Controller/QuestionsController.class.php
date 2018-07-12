<?php
namespace Index\Controller;
use Think\Controller;
class QuestionsController extends CommonController {
    public function index(){

        $this->assign('current', "最新的问题");
        $this->display();
    }
    public function page($id){

        $this->assign('current', "最新的问题");
        $this->display();
    }
}