<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 11/06/2018
 * Time: 16:10
 */

namespace Index\Controller;
use Think\Controller;



class UserController extends CommonController {
    public function index($user){
        $infor = M('users')->where("pageurl='$user'")->find();

        $this->assign('infor', $infor);
        $this->display();
    }
    public function about($user){
        $infor = M('users')->where("pageurl='$user'")->find();
        $this->assign('infor', $infor);
        $this->display();
    }
    public function login(){
        // 判断提交方式
        if (IS_POST) {
            // 实例化Login对象
            $login = D('login');

            // 自动验证 创建数据集
            if (!$data = $login->create()) {
                $this->error($login->getError());
            }

            // 组合查询条件
            $where = array();
            $where['username'] = $data['username'];
            $result = $login->where($where)->field('userid,username,nickname,password,lastdate,lastip')->find();

            // 验证用户名 对比 密码
            if ($result && $result['password'] == $data['password']) {

                // 存储session
                session('Iuid', $result['userid']);          // 当前用户id
                session('Inickname', $result['nickname']);   // 当前用户昵称
                session('Iusername', $result['username']);   // 当前用户名
                session('Ilastdate', $result['lastdate']);   // 上一次登录时间
                session('Ilastip', $result['lastip']);       // 上一次登录ip


                // 更新用户登录信息
                $where['userid'] = session('Iuid');
                M('admin')->where($where)->setInc('loginnum');   // 登录次数加 1
                M('admin')->where($where)->save($data);   // 更新登录时间和登录ip

                $this->success('登录成功,正跳转至系统首页...', U('Index/index'));
            } else {
                $this->error('登录失败,用户名或密码不正确!');
            }
        } else {
            $this->success('非法操作', U('Index/index'));
        }
    }
    public function logout(){

        // 清楚所有session
        session(null);
        $this->success('正在退出登录...',U('Index/index'), 2);
    }

    public function register(){
        // 判断提交方式 做不同处理
        if (IS_POST) {
            // 实例化Register对象
            $user = D('Register');

            // 自动验证 创建数据集
            if (!$data = $user->create()) {
                // 防止输出中文乱码
                header("Content-type: text/html; charset=utf-8");
                exit(json_encode(array(
                    'status'=> 404, // 格式错误
                    'cap'=>$user->getError()  // 错误信息
                 )));
            }
            //插入数据库
            if ($id = $user->add($data)) {
                /* 直接注册用户为超级管理员,子用户采用邀请注册的模式,
                   遂设置公司id等于注册用户id,便于管理公司用户*/
                $user->where("userid = $id")->setField('companyid', $id);
                $this->success('注册成功', U('Index/index'), 2);
            } else {
                $this->error('注册失败');
            }
        } else {
            $this->display();
        }
    }


}