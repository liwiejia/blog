<?php
namespace Index\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
        $prefix = C('DB_PREFIX');


       // $data = M('act')->field("{$prefix}act.*,{$prefix}category.name")->order("id desc")->join("{$prefix}category ON {$prefix}category.id = {$prefix}act.sid")->limit(0,30)->select();

        $data = M('act')->field("{$prefix}act.*,{$prefix}category.name,{$prefix}users.nickname,{$prefix}users.head,{$prefix}users.pageurl")
            ->order("id desc")
            ->join("{$prefix}users ON {$prefix}users.id = {$prefix}act.usersid")
            ->join("{$prefix}category ON {$prefix}category.id = {$prefix}act.sid")
            ->limit(0,30)
            ->select();


        $this->assign('data', $data);
        $this->display();
    }

}