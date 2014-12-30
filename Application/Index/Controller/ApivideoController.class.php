<?php
namespace Index\Controller;
use Think\Controller;
header("content-type='text/html' charset='utf8'");
class ApivideoController extends IndexController {
    public function index(){
        $k=$_GET['key'];
        $res=M('api_user')->where('key='.$k)->find();
        if($res){
            $list=M('videos')->select();
            echo $_GET['callback']."(".  json_encode($list).")" ;
            //dump($list);
        }else{
            echo $_GET['callback']."(0)" ;
        }
    }
}