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


class SubmitController extends PowerController {
    public function index(){

        if(IS_POST){
            $url =I('post.url');
            $type =I('post.type');
            $title =I('post.title');
            $tags =I('post.tags');
            $description =I('post.description');
            $userid =I('post.userid');

            $data=array(
                'url'=>$url,
                'type'=>$type,
                'title'=>$title,
                'tags'=>$tags,
                'description'=>$description,
                'userid'=>$userid,
                'date'=>time(),
                'ip'=>get_client_ip(),
             );


            if ($id= M('headline')->add($data)) {
                redirect(U('submit/page',array('id'=>$id)));
            }

        }else{
            $a = M("atc_tag");
            $c = M("category");

            $list = $a->order('id asc')->select();
            $tree=new TreeData("id","pid","children");
            $tree->load($list);
            $treelist=$tree->DeepTree();//所有分类树结构

            $category=$c->order('id asc')->select();

            $this->assign('category', $category);
            $this->assign('list', $treelist);
            $this->assign('current', "发头条");
            $this->display();
        }
    }

}