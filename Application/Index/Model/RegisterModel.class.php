<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 13/03/2018
 * Time: 17:32
 */

namespace Index\Model;
use Think\Model;


class RegisterModel extends Model {

    // 重新定义表
    protected $tableName = 'users';

    /**
     * 自动验证
     * self::EXISTS_VALIDATE 或者0 存在字段就验证（默认）
     * self::MUST_VALIDATE 或者1 必须验证
     * self::VALUE_VALIDATE或者2 值不为空的时候验证
     */
    protected $_validate = array(
        array('nickname', 'require', '昵称不能为空！'), //默认情况下用正则进行验证
        array('email', 'require', '用户名不能为空！'), //默认情况下用正则进行验证
        array('email', '', '该用户名已被注册！', 0, 'unique', 1), // 在新增的时候验证name字段是否唯一
        array('password', '/^([a-zA-Z0-9@*#]{6,22})$/', '密码格式不正确,请重新输入！', 0),
        array('email', 'email', '邮箱格式不正确'), // 内置正则验证邮箱格式
        array('verify', 'verify_check', '验证码错误', 0, 'function'), // 判断验证码是否正确
        //array('agree', 'is_agree', '请先同意网站安全协议！', 1, 'callback'), // 判断是否勾选网站安全协议
        //array('agree', 'require', '请先同意网站安全协议！', 1), // 判断是否勾选网站安全协议
    );

    /**
     * 自动完成
     */
    protected $_auto = array (
        array('password', 'md5', 3, 'function') , // 对password字段在新增和编辑的时候使md5函数处理
        array('regdate', 'time', 1, 'function'), // 对regdate字段在新增的时候写入当前时间戳
        array('regip', 'get_client_ip', 1, 'function'), // 对regip字段在新增的时候写入当前注册ip地址
        array('head', '/blog/Public/Image/user-64.png'), // 对regip字段在新增的时候写入当前注册ip地址
    );

    /**
     * 判断是否同意网站安全管理协议
     * @return bool
     */
    protected function is_agree()
    {
        // 获取POST数据
        $agree = I('post.agree', 0, 'intval');

        // 验证
        if ($agree) {
            return true;
        } else {
            return false;
        }
    }

}