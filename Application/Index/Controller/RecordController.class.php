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
        if(IS_POST){
            $data['title'] =I('post.title');
            $data['content'] =I('post.content');
            $data['userid'] =I('post.userid');
            $data['type'] =I('post.type');
            $data['ip'] =get_client_ip();

            if ($id= M('record')->add($data)) {
                redirect(U('Questions/page',array('id'=>$id)));
            }

        }else{
            $this->assign('current', "记笔记");
            $this->display();
        }

    }

}