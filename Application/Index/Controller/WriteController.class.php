<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/29
 * Time: 20:53
 */

namespace Index\Controller;
use Think\Controller;
use Vendor\TreeData;


class WriteController extends PowerController {
    public function index(){
        if(IS_POST){
            $title =I('post.title');
            $url =I('post.url');
            $type =I('post.type');
            $tags =I('post.tags');
            $content =I('post.content');
            $userid =I('post.userid');

            $data=array(
                'title'=>$title,
                'pid'=>$tags,
                'url'=>$url,
                'type'=>$type,
                'content'=>$content,
                'userid'=>$userid,
                'date'=>time(),
                'ip'=>get_client_ip(),
             );


            if ($id= M('act')->add($data)) {
                redirect(U('Questions/page',array('id'=>$id)));
            }

        }else{
            $m = M("atc_tag");

            $list = $m->order('id asc')->select();
            $tree=new TreeData("id","pid","children");
            $tree->load($list);
            $treelist=$tree->DeepTree();//所有分类树结构


            $this->assign('list', $treelist);
            $this->assign('current', "撰写文章");
            $this->display();
        }
    }

}