<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 19/06/2018
 * Time: 20:20
 */

namespace Index\Controller;
use Think\Controller;

use Think\Page;

class SearchController extends CommonController {
    public function index(){
        $search_word=I('get.q');
        $search_type=I('get.type');
        $this->assign('current', "搜索");
        // 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
        $nowPage = isset($_GET['p'])?$_GET['p']:1;

        if (!$search_word){}
            $this->display();

        $map="title like '%$search_word%'";


        $Data = M('act'); // 实例化Data数据对象
        $count      = $Data->where($map)->count();// 查询满足要求的总记录数 $map表示查询条件
        $Page       = new Page($count);// 实例化分页类 传入总记录数
        $show       = $Page->show();// 分页显示输出
        // 进行分页数据查询
        $list = $Data->where($map)->order('date')->page($nowPage.','.$Page->listRows)->select();

        $assign=array(
            'list'=>$list,
            'page'=>$show,
            'title'=>$search_word,
            'type'=>$search_type,
            'cnt'=>'找到约'.$count.'条结果',

        );

        $this->assign('search', $assign);
        $this->display();
    }

}