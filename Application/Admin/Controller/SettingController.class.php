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

        $upload =new \Think\Upload();// 实例化上传类
        $upload->maxSize  = 3145728 ;// 设置附件上传大小
        $upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->savePath =  './Uploads/image/';// 设置附件上传目录
        //设置需要生成缩略图，仅对图像文件有效
       // $upload->thumb = true;
        //设置需要生成缩略图的文件后缀
       // $upload->thumbPrefix = 'm_,s_';  //生产2张缩略图
        //设置缩略图最大宽度
       // $upload->thumbMaxWidth = '200,50';
        //设置缩略图最大高度
        //$upload->thumbMaxHeight = '200,50';

        if($upload->upload()) {// 上传错误提示错误信息

            //取得成功上传的文件信息
            $info = $upload->getUploadFileInfo();

            $data['logo'] ="/blog/Uploads/image/".$info[0]['savename'];

           // $this->success('上传成功！');
        }

        $data['sitename'] = isset($_POST['sitename']) ? strip_tags($_POST['sitename']) : '';
        $data['title'] = isset($_POST['title']) ? strip_tags($_POST['title']) : '';
        $data['keywords'] = isset($_POST['keywords']) ? strip_tags($_POST['keywords']) : '';
        $data['description'] = isset($_POST['description']) ? strip_tags($_POST['description']) : '';
        $data['footer'] = isset($_POST['footer']) ? $_POST['footer'] : '';

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