<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/29
 * Time: 20:53
 */

namespace Index\Controller;
use Think\Controller;



class RecordController extends PowerController {
    public function index(){

        $this->assign('current', "记笔记");
        $this->display();
    }

}