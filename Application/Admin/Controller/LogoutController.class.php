<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 26/05/2018
 * Time: 16:58
 */

namespace Admin\Controller;
use Think\Controller;


class LogoutController extends CommonController {

    public function index()
    {
        cookie('auth', null);
        session('uid',null);
        $url = U("login/login");
        header("Location: {$url}");
        exit(0);
    }
}