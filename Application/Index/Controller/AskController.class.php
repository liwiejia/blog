<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/29
 * Time: 20:53
 */

namespace Index\Controller;
use Think\Controller;



class AskController extends PowerController {
    public function index(){
        if(IS_POST){
            $title =I('post.title');
            $tags =I('post.tags');
            $content =I('post.content');
            $userid =I('post.userid');

            $data=array(
                'title'=>$title,
                'tag'=>$tags,
                'content'=>$content,
                'userid'=>$userid,
                'date'=>time(),
                'ip'=>get_client_ip(),
             );

            if ($id= M('ask')->add($data)) {
                redirect(U('Questions/page',array('id'=>$id)));
            }

        }else{
            $this->assign('current', "提出问题");
            $this->display();
        }
    }

}