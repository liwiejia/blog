<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 26/05/2018
 * Time: 13:05
 */

namespace Admin\Controller;
use Think\Controller;


class UploadController extends CommonController {

    public function uploadpic()
    {
        $Img = I('Img');

        $Path = null;
        if ($_FILES['img']) {
            $Img = $this->saveimg($_FILES);
        }
        $BackCall = I('BackCall');
        $Width = I('Width');
        $Height = I('Height');
        if (!$BackCall) {
            $Width = $_POST['BackCall'];
        }
        if (!$Width) {
            $Width = $_POST['Width'];
        }
        if (!$Height) {
            $Width = $_POST['Height'];
        }

        $this->assign('Width', $Width);
        $this->assign('BackCall', $BackCall);
        $this->assign('Img', $Img);
        $this->assign('Height', $Height);
        $this->display('Uploadpic');
    }

    public function saveimg($files){

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

            return "/blog/Uploads/image/".$info[0]['savename'];
            // $this->success('上传成功！');
        }else{
            $error = $upload->getErrorMsg();
            echo "<script>alert('<$error}>')</script>";
        }
    }
}