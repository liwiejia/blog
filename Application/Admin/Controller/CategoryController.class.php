<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 28/04/2018
 * Time: 10:45
 */
namespace Admin\Controller;
use Think\Controller;
use Vendor\Tree;



class CategoryController extends CommonController {
    public function index(){


        $this->display();

    }
    public function edit()
    {

        $id = isset($_GET['id']) ? intval($_GET['id']) : false;
        $currentcategory = M('category')->where('id=' . $id)->find();
        $this->assign('currentcategory', $currentcategory);

        $category = M('category')->field('id,pid,name')->where("id <> {$id}")->order('o asc')->select();
        $tree = new Tree($category);
        $str = "<option value=\$id \$selected>\$spacer\$name</option>"; //生成的形式
        $category = $tree->get_tree(0, $str, $currentcategory['pid']);

        $this->assign('category', $category);
        $this->display('form');
    }
    public function update($act = null){
        if ($act == 'order') {
            $id = I('post.id', 0, 'intval');
            if (!$id) {
                die('0');
            }
            $o = I('post.o', 0, 'intval');
            M('category')->data(array('o' => $o))->where("id='{$id}'")->save();
            //addlog('分类修改排序，ID：' . $id);
            die('1');
        }
        $id = I('post.id', false, 'intval');
        $data['type'] = I('post.type', 0, 'intval');
        $data['pid'] = I('post.pid', 0, 'intval');
        $data['name'] = I('post.name');
        $data['url'] = I('post.url');
        $data['iconUrl'] = I('post.iconUrl');
        $data['seotitle'] = I('post.seotitle', '', 'htmlspecialchars');
        $data['keywords'] = I('post.keywords', '', 'htmlspecialchars');
        $data['description'] = I('post.description', '', 'htmlspecialchars');
        $data['content'] = I('post.content');
        if ($data['name'] == '') {
            $this->error('分类名称不能为空！');
        }
        if ($id) {
            if (M('category')->data($data)->where('id=' . $id)->save()) {
               // addlog('文章分类修改，ID：' . $id . '，名称：' . $data['name']);
                $this->success('恭喜，分类修改成功！');
                die(0);
            }
        } else {

            $id = M('category')->data($data)->add();
            if ($id) {
                //addlog('新增分类，ID：' . $id . '，名称：' . $data['name']);
                $this->success('恭喜，新增分类成功！', 'index');
                die(0);
            }
        }
        $this->success('恭喜，操作成功！');
    }
    public function add(){
        $pid = isset($_GET['pid']) ? intval($_GET['pid']) : 0;
        $category = M('category')->field('id,pid,name')->order('id asc')->select();
        $tree = new Tree($category);

        $str = "<option value=\$id \$selected>\$spacer\$name</option>"; //生成的形式
        $category = $tree->get_tree(0, $str, $pid);

        $this->assign('category', $category);
        $this->display('form');

    }

}