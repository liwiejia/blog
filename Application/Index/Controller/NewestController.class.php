<?php
namespace Index\Controller;
use Think\Controller;
class NewestController extends CommonController {
    public function index(){
        $prefix = C('DB_PREFIX');

        $p =I('post.p',1);
        $pagesize = 20;#每页数量
        $offset = $pagesize * ($p - 1);//计算记录偏移量

        $data = M('act')->field("{$prefix}act.id,{$prefix}act.title,{$prefix}act.date,{$prefix}act.thumbs,{$prefix}category.name,{$prefix}users.nickname,{$prefix}users.head,{$prefix}users.pageurl")
            ->order("thumbs desc")
            ->join("{$prefix}users ON {$prefix}users.id = {$prefix}act.userid")
            ->join("{$prefix}category ON {$prefix}category.id = {$prefix}act.pid")
            ->limit(0,20)
            ->select();


        if (IS_POST){
            if(count($data)>0){
                exit(json_encode(array(
                    'status'=> 200, // 格式错误
                    'data'=>$data  // 错误信息
                )));
            }else{
                exit(json_encode(array(
                    'status'=> 404, // 格式错误
                )));
            }
        }else{
            //->where("{$prefix}act.id = 1527151509 || {$prefix}act.id = 1527154543 || {$prefix}act.id = 1527151225 || {$prefix}act.id = 1527153877 || {$prefix}act.id = 1527154308")->select();
            $slideData = M('act')->field('id,title,content') ->order("thumbs desc") ->limit(0,5) ->select();


            $this->assign('slideData', $slideData);
            $this->assign('current', "最新内容");
            $this->assign('data', $data);
            $this->display();
        }

    }
}