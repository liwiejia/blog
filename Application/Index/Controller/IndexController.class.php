<?php
namespace Index\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
        $prefix = C('DB_PREFIX');

        $p =I('post.p',1);
        $pagesize = 20;#每页数量
        $offset = $pagesize * ($p - 1);//计算记录偏移量

        $data = M('act')->field("{$prefix}act.id,{$prefix}act.title,{$prefix}act.date,{$prefix}act.thumbs,{$prefix}category.name,{$prefix}users.nickname,{$prefix}users.head,{$prefix}users.pageurl")
            ->order("id desc")
            ->join("{$prefix}users ON {$prefix}users.id = {$prefix}act.userid")
            ->join("{$prefix}category ON {$prefix}category.id = {$prefix}act.pid")
            ->limit($offset,$pagesize)
            ->select();
        if (IS_POST){
            if(count($data)<0){
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
        $this->assign('current', "首页");
        $this->assign('data', $data);
        $this->display();
        }

    }

}