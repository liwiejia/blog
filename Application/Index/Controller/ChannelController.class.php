<?php
namespace Index\Controller;
use Think\Controller;
class ChannelController extends CommonController {
    public function Ai(){
        $this->assign('current', "人工智能");
        $this->display('index');
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