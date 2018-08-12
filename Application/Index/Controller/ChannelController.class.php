<?php
namespace Index\Controller;
use Think\Controller;
class ChannelController extends CommonController {

    public function Ai(){
        $prefix = C('DB_PREFIX');

        $p =I('post.p',1);
        $pagesize = 20;#每页数量
        $offset = $pagesize * ($p - 1);//计算记录偏移量

        $data = M('act')->field("{$prefix}act.id,{$prefix}act.title,{$prefix}act.date,{$prefix}act.thumbs,{$prefix}category.name,{$prefix}users.nickname,{$prefix}users.head,{$prefix}users.pageurl")
            ->order("date desc")
            ->where("{$prefix}act.pid = 1")
            ->join("{$prefix}users ON {$prefix}users.id = {$prefix}act.userid")
            ->join("{$prefix}category ON {$prefix}category.id = {$prefix}act.pid")
            ->limit($offset,$pagesize)
            ->select();



        if (IS_POST){
            if(count($data)>0){
                exit(json_encode(array(
                    'status'=> 200, // 格式错误
                    'data'=>$data  // 错误信息
                )));
            }else{
                exit(json_encode(array(
                    'status'=> 404, // 格式错误
                )));
            }
        }else {
            $slideData = M('act')->field('id,title,content')->where("{$prefix}act.id =1527151420 || {$prefix}act.id =1527151445 || {$prefix}act.id =1527151428 || {$prefix}act.id =1527151452 || {$prefix}act.id =1527151468 ")->select();


            $this->assign('slideData', $slideData);
            $this->assign('data', $data);
            $this->assign('current', "人工智能");
            $this->display('index');
        }
    }
    public function Bc(){
        $prefix = C('DB_PREFIX');

        $p =I('post.p',1);
        $pagesize = 20;#每页数量
        $offset = $pagesize * ($p - 1);//计算记录偏移量

        $data = M('act')->field("{$prefix}act.id,{$prefix}act.title,{$prefix}act.date,{$prefix}act.thumbs,{$prefix}category.name,{$prefix}users.nickname,{$prefix}users.head,{$prefix}users.pageurl")
            ->order("date desc")
            ->where("{$prefix}act.pid = 2")
            ->join("{$prefix}users ON {$prefix}users.id = {$prefix}act.userid")
            ->join("{$prefix}category ON {$prefix}category.id = {$prefix}act.pid")
            ->limit($offset,$pagesize)
            ->select();



        if (IS_POST){
            if(count($data)>0){
                exit(json_encode(array(
                    'status'=> 200, // 格式错误
                    'data'=>$data  // 错误信息
                )));
            }else{
                exit(json_encode(array(
                    'status'=> 404, // 格式错误
                )));
            }
        }else {
            $slideData = M('act')->field('id,title,content')->where("{$prefix}act.id = 1527151545 || {$prefix}act.id = 1527151509 || {$prefix}act.id = 1527151539 || {$prefix}act.id = 1527151544 || {$prefix}act.id = 1527151480 ")->select();

            $this->assign('slideData', $slideData);
            $this->assign('data', $data);
            $this->assign('current', "区块链");
            $this->display('index');
        }
    }
    public function Frontend(){$prefix = C('DB_PREFIX');

        $p =I('post.p',1);
        $pagesize = 20;#每页数量
        $offset = $pagesize * ($p - 1);//计算记录偏移量

        $data = M('act')->field("{$prefix}act.id,{$prefix}act.title,{$prefix}act.date,{$prefix}act.thumbs,{$prefix}category.name,{$prefix}users.nickname,{$prefix}users.head,{$prefix}users.pageurl")
            ->order("date desc")
            ->where("{$prefix}act.pid = 3")
            ->join("{$prefix}users ON {$prefix}users.id = {$prefix}act.userid")
            ->join("{$prefix}category ON {$prefix}category.id = {$prefix}act.pid")
            ->limit($offset,$pagesize)
            ->select();



        if (IS_POST){
            if(count($data)>0){
                exit(json_encode(array(
                    'status'=> 200, // 格式错误
                    'data'=>$data  // 错误信息
                )));
            }else{
                exit(json_encode(array(
                    'status'=> 404, // 格式错误
                )));
            }
        }else {
            $slideData = M('act')->field('id,title,content')->where("{$prefix}act.id = 1527151945 || {$prefix}act.id = 1527151695 || {$prefix}act.id = 1527152538 || {$prefix}act.id = 1527151753|| {$prefix}act.id = 1527152397")->select();

            $this->assign('slideData', $slideData);
            $this->assign('data', $data);
            $this->assign('current', "前端");
            $this->display('index');
        }
    }
    public function Backend(){
            $prefix = C('DB_PREFIX');
            $p =I('post.p',1);
            $pagesize = 20;#每页数量
            $offset = $pagesize * ($p - 1);//计算记录偏移量

            $data = M('act')->field("{$prefix}act.id,{$prefix}act.title,{$prefix}act.date,{$prefix}act.thumbs,{$prefix}category.name,{$prefix}users.nickname,{$prefix}users.head,{$prefix}users.pageurl")
                ->order("date desc")
                ->where("{$prefix}act.pid = 4")
                ->join("{$prefix}users ON {$prefix}users.id = {$prefix}act.userid")
                ->join("{$prefix}category ON {$prefix}category.id = {$prefix}act.pid")
                ->limit($offset,$pagesize)
                ->select();



            if (IS_POST){
                if(count($data)>0){
                    exit(json_encode(array(
                        'status'=> 200, // 格式错误
                        'data'=>$data  // 错误信息
                    )));
                }else{
                    exit(json_encode(array(
                        'status'=> 404, // 格式错误
                    )));
                }
            }else {
                $slideData = M('act')->field('id,title,content')->where("{$prefix}act.pid = 4")->order("thumbs desc")->limit(0, 5)->select();

                $this->assign('slideData', $slideData);
                $this->assign('data', $data);
                $this->assign('current', "后端");
                $this->display('index');
            }
    }
    public function Android(){$prefix = C('DB_PREFIX');

                $p =I('post.p',1);
                $pagesize = 20;#每页数量
                $offset = $pagesize * ($p - 1);//计算记录偏移量

                $data = M('act')->field("{$prefix}act.id,{$prefix}act.title,{$prefix}act.date,{$prefix}act.thumbs,{$prefix}category.name,{$prefix}users.nickname,{$prefix}users.head,{$prefix}users.pageurl")
                    ->order("date desc")
                    ->where("{$prefix}act.pid = 5")
                    ->join("{$prefix}users ON {$prefix}users.id = {$prefix}act.userid")
                    ->join("{$prefix}category ON {$prefix}category.id = {$prefix}act.pid")
                    ->limit($offset,$pagesize)
                    ->select();



                if (IS_POST){
                    if(count($data)>0){
                        exit(json_encode(array(
                            'status'=> 200, // 格式错误
                            'data'=>$data  // 错误信息
                        )));
                    }else{
                        exit(json_encode(array(
                            'status'=> 404, // 格式错误
                        )));
                    }
                }else {
                    $slideData = M('act')->field('id,title,content')->where("{$prefix}act.id = 1527151089 || {$prefix}act.id = 1527151271 || {$prefix}act.id = 1527151207 || {$prefix}act.id = 1527151055 || {$prefix}act.id = 1527151159")->select();

                    $this->assign('slideData', $slideData);
                    $this->assign('data', $data);
                    $this->assign('current', "Android");
                    $this->display('index');
                }
    }
    public function Ios(){
        $prefix = C('DB_PREFIX');

        $p =I('post.p',1);
        $pagesize = 20;#每页数量
        $offset = $pagesize * ($p - 1);//计算记录偏移量

        $data = M('act')->field("{$prefix}act.id,{$prefix}act.title,{$prefix}act.date,{$prefix}act.thumbs,{$prefix}category.name,{$prefix}users.nickname,{$prefix}users.head,{$prefix}users.pageurl")
            ->order("date desc")
            ->where("{$prefix}act.pid = 6")
            ->join("{$prefix}users ON {$prefix}users.id = {$prefix}act.userid")
            ->join("{$prefix}category ON {$prefix}category.id = {$prefix}act.pid")
            ->limit($offset,$pagesize)
            ->select();



        if (IS_POST){
            if(count($data)>0){
                exit(json_encode(array(
                    'status'=> 200, // 格式错误
                    'data'=>$data  // 错误信息
                )));
            }else{
                exit(json_encode(array(
                    'status'=> 404, // 格式错误
                )));
            }
        }else {
            $slideData = M('act')->field('id,title,content')->where("{$prefix}act.id = 1527154063 || {$prefix}act.id = 1527154163 || {$prefix}act.id = 1527154149 || {$prefix}act.id = 1527154012 || {$prefix}act.id = 1527153993")->select();

            $this->assign('slideData', $slideData);
            $this->assign('data', $data);
            $this->assign('current', "iOS");
            $this->display('index');
        }
    }
    public function Toolkit(){
        $prefix = C('DB_PREFIX');

        $p =I('post.p',1);
        $pagesize = 20;#每页数量
        $offset = $pagesize * ($p - 1);//计算记录偏移量

        $data = M('act')->field("{$prefix}act.id,{$prefix}act.title,{$prefix}act.date,{$prefix}act.thumbs,{$prefix}category.name,{$prefix}users.nickname,{$prefix}users.head,{$prefix}users.pageurl")
            ->order("date desc")
            ->where("{$prefix}act.pid = 7")
            ->join("{$prefix}users ON {$prefix}users.id = {$prefix}act.userid")
            ->join("{$prefix}category ON {$prefix}category.id = {$prefix}act.pid")
            ->limit($offset,$pagesize)
            ->select();



        if (IS_POST){
            if(count($data)>0){
                exit(json_encode(array(
                    'status'=> 200, // 格式错误
                    'data'=>$data  // 错误信息
                )));
            }else{
                exit(json_encode(array(
                    'status'=> 404, // 格式错误
                )));
            }
        }else {
            $slideData = M('act')->field('id,title,content')->where("{$prefix}act.id = 1527154357 || {$prefix}act.id = 1527154394 || {$prefix}act.id = 1527154358 || {$prefix}act.id = 1527154259 || {$prefix}act.id = 1527154225")->select();

            $this->assign('slideData', $slideData);
            $this->assign('data', $data);
            $this->assign('current', "工具");
            $this->display('index');
        }
    }
    public function Netsec(){
        $prefix = C('DB_PREFIX');

        $p =I('post.p',1);
        $pagesize = 20;#每页数量
        $offset = $pagesize * ($p - 1);//计算记录偏移量

        $data = M('act')->field("{$prefix}act.id,{$prefix}act.title,{$prefix}act.date,{$prefix}act.thumbs,{$prefix}category.name,{$prefix}users.nickname,{$prefix}users.head,{$prefix}users.pageurl")
            ->order("date desc")
            ->where("{$prefix}act.pid = 8")
            ->join("{$prefix}users ON {$prefix}users.id = {$prefix}act.userid")
            ->join("{$prefix}category ON {$prefix}category.id = {$prefix}act.pid")
            ->limit($offset,$pagesize)
            ->select();



        if (IS_POST){
            if(count($data)>0){
                exit(json_encode(array(
                    'status'=> 200, // 格式错误
                    'data'=>$data  // 错误信息
                )));
            }else{
                exit(json_encode(array(
                    'status'=> 404, // 格式错误
                )));
            }
        }else {
            $slideData = M('act')->field('id,title,content')->where("{$prefix}act.id = 1527154737 || {$prefix}act.id = 1527154794 || {$prefix}act.id = 1527154699 || {$prefix}act.id = 1527154723 || {$prefix}act.id = 1527154722")->select();

            $this->assign('slideData', $slideData);
            $this->assign('data', $data);
            $this->assign('current', "安全");
            $this->display('index');
        }
    }
    public function Programmer(){
        $prefix = C('DB_PREFIX');

        $p =I('post.p',1);
        $pagesize = 20;#每页数量
        $offset = $pagesize * ($p - 1);//计算记录偏移量

        $data = M('act')->field("{$prefix}act.id,{$prefix}act.title,{$prefix}act.date,{$prefix}act.thumbs,{$prefix}category.name,{$prefix}users.nickname,{$prefix}users.head,{$prefix}users.pageurl")
            ->order("date desc")
            ->where("{$prefix}act.pid = 9")
            ->join("{$prefix}users ON {$prefix}users.id = {$prefix}act.userid")
            ->join("{$prefix}category ON {$prefix}category.id = {$prefix}act.pid")
            ->limit($offset,$pagesize)
            ->select();



        if (IS_POST){
            if(count($data)>0){
                exit(json_encode(array(
                    'status'=> 200, // 格式错误
                    'data'=>$data  // 错误信息
                )));
            }else{
                exit(json_encode(array(
                    'status'=> 404, // 格式错误
                )));
            }
        }else {
            $slideData = M('act')->field('id,title,content')->where("{$prefix}act.id = 1527154624 || {$prefix}act.id = 1527154562 || {$prefix}act.id = 1527154530 || {$prefix}act.id = 1527154650 || {$prefix}act.id = 1527154559")->select();

            $this->assign('slideData', $slideData);
            $this->assign('data', $data);
            $this->assign('current', "程序员");
            $this->display('index');
        }
    }
    public function Industry(){
        $prefix = C('DB_PREFIX');

        $p =I('post.p',1);
        $pagesize = 20;#每页数量
        $offset = $pagesize * ($p - 1);//计算记录偏移量

        $data = M('act')->field("{$prefix}act.id,{$prefix}act.title,{$prefix}act.date,{$prefix}act.thumbs,{$prefix}category.name,{$prefix}users.nickname,{$prefix}users.head,{$prefix}users.pageurl")
            ->order("date desc")
            ->where("{$prefix}act.pid = 10")
            ->join("{$prefix}users ON {$prefix}users.id = {$prefix}act.userid")
            ->join("{$prefix}category ON {$prefix}category.id = {$prefix}act.pid")
            ->limit($offset,$pagesize)
            ->select();



        if (IS_POST){
            if(count($data)>0){
                exit(json_encode(array(
                    'status'=> 200, // 格式错误
                    'data'=>$data  // 错误信息
                )));
            }else{
                exit(json_encode(array(
                    'status'=> 404, // 格式错误
                )));
            }
        }else {
            $slideData = M('act')->field('id,title,content')->where("{$prefix}act.id = 1527154848 || {$prefix}act.id = 1527154859 || {$prefix}act.id = 1527154828 || {$prefix}act.id = 1527154865 || {$prefix}act.id = 1527154830")->select();

            $this->assign('slideData', $slideData);
            $this->assign('data', $data);
            $this->assign('current', "行业");
            $this->display('index');
        }
    }
}