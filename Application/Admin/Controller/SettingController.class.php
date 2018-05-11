<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 21/04/2018
 * Time: 15:44
 */

namespace Admin\Controller;
use Think\Controller;

class SettingController extends CommonController {
    public function setting(){

        $vars = M('website')->select();
        $this->assign('vars', $vars);

        $this->display();
    }
    public function update()
    {

        $data = $_POST;
        $data['sitename'] = isset($_POST['sitename']) ? strip_tags($_POST['sitename']) : '';
        $data['title'] = isset($_POST['title']) ? strip_tags($_POST['title']) : '';
        $data['keywords'] = isset($_POST['keywords']) ? strip_tags($_POST['keywords']) : '';
        $data['description'] = isset($_POST['description']) ? strip_tags($_POST['description']) : '';
        $data['footer'] = isset($_POST['footer']) ? $_POST['footer'] : '';
        $data['logo'] = isset($_POST['logo']) ? $_POST['logo'] : '';
        $Model = M('website');

        foreach ($data as $k => $v) {
            $Model->data(array('v' => $v))->where("k='{$k}'")->save();
        }
        //清除旧的缓存数据
        $cache = \Think\Cache::getInstance();
        $cache->clear();
        //addlog('修改网站配置。');
        $this->success('恭喜，网站配置成功！');
    }
}