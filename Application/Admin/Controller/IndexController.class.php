<?php
namespace Admin\Controller;
use Think\Controller;

/**
 * 首页控制器
 * @package Home\Controller
 */

class IndexController extends CommonController {
    /**
     * 系统首页
     */
    public function index(){
        // 获取当前账户的登录信息



        $this->assign('SERVER_SOFTWARE', $_SERVER['SERVER_SOFTWARE']);

        $this->display();
    }


}