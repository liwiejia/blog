<?php
namespace Index\Controller;
use Think\Controller;
class ChannelController extends CommonController {

    public function Ai(){
        $prefix = C('DB_PREFIX');

        $p =I('post.p',1);
        $pagesize = 20;#每页数量
        $offset = $pagesize * ($p - 1);//计算记录偏移量

        $data = M('act')->field("{$prefix}act.id,{$prefix}act.title,{$prefix}act.date,{$prefix}act.thumbs,{$prefix}category.name,{$prefix}users.nickname,{$prefix}users.head,{$prefix}users.pageurl")
            ->order("id desc")
            ->where("{$prefix}act.pid = 1")
            ->join("{$prefix}users ON {$prefix}users.id = {$prefix}act.userid")
            ->join("{$prefix}category ON {$prefix}category.id = {$prefix}act.pid")
            ->limit($offset,$pagesize)
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
        }else {
            $this->assign('current', "人工智能");
            $this->assign('data', $data);
            $this->display('index');
        }
    }
    public function Bc(){
        $this->assign('current', "区块链");
        $this->display('index');
    }
    public function Frontend(){
        $this->assign('current', "前端");
        $this->display('index');
    }
    public function Backend(){
        $this->assign('current', "后端");
        $this->display('index');
    }
    public function Android(){
        $this->assign('current', "Android");
        $this->display('index');
    }
    public function Ios(){
        $this->assign('current', "iOS");
        $this->display('index');
    }
    public function Toolkit(){
        $this->assign('current', "工具");
        $this->display('index');
    }
    public function Netsec(){
        $this->assign('current', "安全");
        $this->display('index');
    }
    public function Programmer(){
        $this->assign('current', "程序员");
        $this->display('index');
    }
    public function Industry(){
        $this->assign('current', "行业");
        $this->display('index');
    }
}