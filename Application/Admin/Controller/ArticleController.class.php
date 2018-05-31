<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 28/04/2018
 * Time: 10:42
 */

namespace Admin\Controller;
use Think\Controller;
use Vendor\Tree;


class ArticleController extends CommonController {
    public function index(){
        //得到排序的方式
        $order =$_POST[order][0][dir]!='' ? $_POST[order][0][dir] : "desc";
        //得到排序字段的下标
        $order_column =$_POST['order'][0]['column'] !='' ? $_POST[order][0][dir] : "2";
        //根据排序字段的下标得到排序字段
        $order_field =$_POST['columns'][0][$order_column]['data'] !='' ? $_POST['columns'][0][$order_column]['data'] : "id" ;
        //得到limit参数
        $limit_start = $_POST[start]!=0 ? $_POST[start]: 0;
        $limit_length =$_POST[length]!='' ? $_POST[length]: 10;

        //得到搜索的关键词
        $search =$_POST[search][value]!='' ? $_POST[search][value]: '';

        $data  = array();
        $cnt = 0;

        $where = '1 = 1 ';
        $prefix = C('DB_PREFIX');
        //从数据库取出结果
        //如果有搜索行为，则按照关键词查询数据

        if($limit_length<0){
            $limit = "";
        }else{
            $limit = "$limit_start , $limit_length";
        }

        if($search) {
            $where .= "and title like '%{$search}%' ";
        }


        $data = M('act')->field("{$prefix}act.*,{$prefix}category.name")->where($where)->order( $order_field." ".$order)->join("{$prefix}category ON {$prefix}category.id = {$prefix}act.sid")->limit($limit)->select();

        $cnt = M('act')->where($where)->count();
        if(IS_POST){
            exit(json_encode(array(
                'draw'=> $_POST['draw'], // ajax请求次数，作为标识符
                'recordsTotal'=>count($data),  // 获取到的结果数(每页显示数量)
                'recordsFiltered'=>$cnt,       // 符合条件的总数据量
                'data'=>$data
            )));
        }else{
            $this->display();
            exit();
        }




    }
    public function add(){
        $category = M('category')->field('id,pid,name')->order('id asc')->select();
        $tree = new Tree($category);
        $str = "<option value=\$id \$selected>\$spacer\$name</option>"; //生成的形式
        $category = $tree->get_tree(0, $str, 0);
        $this->assign('category', $category);//导航
        $this->display('form');

    }
    public function edit($id)
    {

        $id = intval($id);
        $article = M('act')->where('id=' . $id)->find();
        if ($article) {

            $category = M('category')->field('id,pid,name')->order('id asc')->select();
            $tree = new Tree($category);
            $str = "<option value=\$id \$selected>\$spacer\$name</option>"; //生成的形式
            $category = $tree->get_tree(0, $str, $article['sid']);
            $this->assign('category', $category);//导航

            $this->assign('article', $article);
        } else {
            $this->error('参数错误！');
        }
        $this->display('form');
    }
    public function del()
    {

        $ids = isset($_REQUEST['id']) ? $_REQUEST['id'] : false;
        if ($ids) {
            if (is_array($ids)) {
                $ids = implode(',', $ids);
                $map['id'] = array('in', $ids);
            } else {
                $map = 'id=' . $ids;
            }
            if (M('act')->where($map)->delete()) {
               // addlog('删除文章，AID：' . $aids);
                $this->success('恭喜，文章删除成功！');
            } else {
                $this->error('参数错误！');
            }
        } else {
            $this->error('参数错误！');
        }

    }
    public function update($id = 0)
    {

        $aid = intval($id);
        $data['sid'] = isset($_POST['sid']) ? intval($_POST['sid']) : 0;
        $data['title'] = isset($_POST['title']) ? $_POST['title'] : false;
        $data['seotitle'] = isset($_POST['seotitle']) ? $_POST['seotitle'] : '';
        $data['keywords'] = I('post.keywords', '', 'strip_tags');
        $data['description'] = I('post.description', '', 'strip_tags');
        $data['content'] = isset($_POST['content']) ? $_POST['content'] : false;
        $data['thumbnail'] = I('post.thumbnail', '', 'strip_tags');
        $data['date'] = time();


        if (!$data['sid'] or !$data['title'] or !$data['content']) {
            $this->error('警告！文章分类、文章标题及文章内容为必填项目。');
        }
        if ($id) {
            M('act')->data($data)->where('id=' . $id)->save();
           // addlog('编辑文章，AID：' . $id);
            $this->success('恭喜！文章编辑成功！');
        } else {
            $id = M('act')->data($data)->add();
            if ($id) {
               // addlog('新增文章，AID：' . $id);
                $this->success('恭喜！文章新增成功！');
            } else {
                $this->error('抱歉，未知错误！');
            }

        }
    }
}