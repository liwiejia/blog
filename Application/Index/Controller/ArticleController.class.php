<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 11/06/2018
 * Time: 15:06
 */

namespace Index\Controller;
use Think\Controller;


class ArticleController extends CommonController {
    public function index($id)
    {
        $id = intval($id);
        $prefix = C('DB_PREFIX');

        $data = M('act')->field("{$prefix}act.*,{$prefix}category.name,{$prefix}users.nickname,{$prefix}users.head,{$prefix}users.pageurl")
            ->where("{$prefix}act.id= $id")
            ->join("{$prefix}users ON {$prefix}users.id = {$prefix}act.usersid")
            ->join("{$prefix}category ON {$prefix}category.id = {$prefix}act.sid")
            ->find();
        if(!$data){
            header('Location: http://liweijia.site/404/index.html');
        }
        $this->assign('current', "文章");
        $this->assign('data', $data);
        $this->display();
    }

}