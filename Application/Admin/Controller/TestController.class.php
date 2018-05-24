<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 02/04/2018
 * Time: 19:36
 */

namespace Admin\Controller;
use Think\Controller;
use Vendor\ThinkSDK\ThinkOauth;

use Think\Upload;


class TestController extends Controller
{
    //SNS登录首页
    public function index(){
        $this->display();
    }
    //登录地址
    public function login($type = null){


        empty($type) && $this->error('参数错误');
        //加载ThinkOauth类并实例化一个对象
        //import("ORG.ThinkSDK.ThinkOauth");
        $sns = ThinkOauth::getInstance($type);
        //跳转到授权页面
        redirect($sns->getRequestCodeURL());

    }
    //授权回调地址
    public function callback($type = null, $code = null){
        (empty($type) || empty($code)) && $this->error('参数错误');

        //加载ThinkOauth类并实例化一个对象
        import("ORG.ThinkSDK.ThinkOauth");
        $sns  = ThinkOauth::getInstance($type);
        //腾讯微博需传递的额外参数
        $extend = null;
        if($type == 'tencent'){
            $extend = array('openid' => $this->_get('openid'), 'openkey' => $this->_get('openkey'));
        }
        //请妥善保管这里获取到的Token信息，方便以后API调用
        //调用方法，实例化SDK对象的时候直接作为构造函数的第二个参数传入
        //如： $qq = ThinkOauth::getInstance('qq', $token);
        $token = $sns->getAccessToken($code , $extend);
        //获取当前登录用户信息
        if(is_array($token)){
            $user_info = A('Type', 'Event')->$type($token);
            echo("<h1>恭喜！使用 {$type} 用户登录成功</h1><br>");
            echo("授权信息为：<br>");
            dump($token);
            echo("当前登录用户信息为：<br>");
            dump($user_info);
        }
    }
    // 文件上传
    public function upload() {

        $upload =new \Think\Upload();// 实例化上传类
        $upload->maxSize  = 3145728 ;// 设置附件上传大小
        $upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->savePath =  './Uploads/image/';// 设置附件上传目录
        //设置需要生成缩略图，仅对图像文件有效
        $upload->thumb = true;
        //设置需要生成缩略图的文件后缀
        $upload->thumbPrefix = 'm_,s_';  //生产2张缩略图
        //设置缩略图最大宽度
        $upload->thumbMaxWidth = '200,50';
        //设置缩略图最大高度
        $upload->thumbMaxHeight = '200,50';




        if(!$upload->upload()) {// 上传错误提示错误信息
            $this->error($upload->getErrorMsg());
        }else{// 上传成功
            //取得成功上传的文件信息
            $info = $upload->getUploadFileInfo();

            $data['image'] = $info[0]['savename'];
            $data['create_time'] = NOW_TIME;
            $this->success('上传成功！');
        }
    }

}