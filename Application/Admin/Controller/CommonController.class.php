<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 13/03/2018
 * Time: 17:27
 */

namespace Admin\Controller;
use Think\Controller;

class CommonController extends Controller {
    /* 定义用户id */
    public static $userid ='';

    /**
     * 自动执行
     */
   // public function _initialize()
    public function _initialize()
    {
        // 判断用户是否登录
        if (session('uid')) {
            $this->userid = session('uid');

            $m = M();
            $prefix = C('DB_PREFIX');

            $info = M('users')->where(array('id' => $this->userid))->field('loginnum,username,nickname,head')->find();
            $webInfo = M('website')->field('k,v')->select();
            foreach ($webInfo as $v) {
                $webcConfig[$v['key']] = $v['value'];

            };
//exit(var_dump($webcConfig));
            $this->assign('info', $info);
            $this->assign('webcConfig', $webcConfig);

            $current_action_name = ACTION_NAME == 'edit' ? "index" : ACTION_NAME;
            $current = $m->query("SELECT s.id,s.title,s.name,s.tips,s.pid,p.pid as ppid,p.title as ptitle FROM {$prefix}menu s left join {$prefix}menu p on p.id=s.pid where s.name='" . CONTROLLER_NAME . '/' . $current_action_name . "'");

            $this->assign('current', $current[0]);

            //获取列表
            $menu = M('menu')->field('id,title,pid,name,icon')->where("islink=1")->order('id ASC')->select();
            $menu = $this->getMenu($menu);

            $this->assign('menu', $menu);

        } else {
            $this->error('对不起,您还没有登录,正跳转至登录面...', U('Login/login'));
        }
    }
    protected function getMenu($items, $id = 'id', $pid = 'pid', $son = 'children')
    {
        $tree = array();
        $tmpMap = array();
        //修复父类设置islink=0，但是子类仍然显示的bug @感谢linshaoneng提供代码
        foreach( $items as $item ){
            if( $item['pid']==0 ){
                $father_ids[] = $item['id'];
            }
        }
        //----
        foreach ($items as $item) {
            $tmpMap[$item[$id]] = $item;
        }

        foreach ($items as $item) {
            //修复父类设置islink=0，但是子类仍然显示的bug by shaoneng @感谢linshaoneng提供代码
            if( $item['pid']<>0 && !in_array( $item['pid'], $father_ids )){
                continue;
            }
            //----
            if (isset($tmpMap[$item[$pid]])) {
                $tmpMap[$item[$pid]][$son][] = &$tmpMap[$item[$id]];
            } else {
                $tree[] = &$tmpMap[$item[$id]];
            }
        }
        return $tree;
    }


}