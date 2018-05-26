<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 28/04/2018
 * Time: 10:52
 */

namespace Admin\Controller;
use Think\Controller;


class PersonalController extends CommonController {
    public function index(){
       // $member = M('users')->where('userid=' . $this->USER['uid'])->find();
        $this->assign('nav', array('Personal', 'profile', ''));//导航
        $this->assign('member', $this->USER);
        $this->display();
    }
    public function update(){
        $uid = $this->USER['userid'];
        $password = isset($_POST['password']) ? trim($_POST['password']) : false;
        if ($password) {
            $data['password'] = auth_code($password);
        }

        $head = I('post.head', '', 'strip_tags');
        if ($head <> '') {
            $data['head'] = $head;
        }

        $data['sex'] = isset($_POST['sex']) ? intval($_POST['sex']) : 0;
        $data['birthday'] = isset($_POST['birthday']) ? strtotime($_POST['birthday']) : 0;
        $data['mobile'] = isset($_POST['mobile']) ? trim($_POST['mobile']) : '';
        $data['qq'] = isset($_POST['qq']) ? trim($_POST['qq']) : '';
        $data['email'] = isset($_POST['email']) ? trim($_POST['email']) : '';
        $isadmin = isset($_POST['isadmin']) ? $_POST['isadmin'] : '';
        if ($uid <> 1) {#禁止最高管理员设为普通会员。
            $data['isadmin'] = $isadmin == 'on' ? 1 : 0;
        }
        $Model = M('users');

        $Model->data($data)->where("userid=$uid")->save();
       // addlog('修改个人资料');
        $this->success('操作成功！');

    }


}