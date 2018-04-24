<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 19/04/2018
 * Time: 15:43
 */

namespace Admin\Controller;
use Think\Controller;



class MenuController extends CommonController {
    public function index(){
        $m = M('menu');
        $count = $m->count();

        $list = $m->order('id asc')->select();
        $list = $this->getMenu($list);
        $this->assign('list', $list);

        $this->display();

    }
    public function update(){
        $id = I('post.id', '', 'intval');
        $data['pid'] = I('post.pid', '', 'intval');
        $data['title'] = I('post.title', '', 'strip_tags');
        $data['name'] = I('post.name', '', 'strip_tags');
        $data['icon'] = I('post.icon');
        $data['islink'] = I('post.islink', '', 'intval');
        $data['tips'] = I('post.tips');
        $data['lastdate'] = time();

        if ($id) {
            M('menu')->data($data)->where("id='{$id}'")->save();
           // addlog('编辑菜单，ID：' . $id);
        } else {

            M('menu')->data($data)->add();
            //addlog('新增菜单，名称：' . $data['title']);
        }

        $this->success('操作成功！');

    }
    public function edit($id = 0){
        $id = intval($id);
        $m = M('menu');
        $currentmenu = $m->where("id='$id'")->find();
        if (!$currentmenu) {
            $this->error('参数错误！');
        }

        $option = $m->order('id ASC')->select();
        $option = $this->getMenu($option);
        $this->assign('option', $option);
        $this->assign('currentmenu', $currentmenu);
        $this->display('form');
    }
    public function add(){

            $option = M('menu')->order('id ASC')->select();
            $option = $this->getMenu($option);
            $this->assign('option', $option);

            $this->display('form');


    }

}