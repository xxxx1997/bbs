<?php
namespace Index\Controller;
use Think\Controller;
header("content-type='text/html' charset='utf8'");
class ApivideoController extends IndexController {
    public function index(){
        $k=$_GET['key'];
        $res=M('api_user')->where("k='$k'")->find();
       // echo M()->getlastsql();
        //dump($res);
        if($res){
            $list=M('videos')->select();
            foreach($list as $k=>$v){
                $list[$k]['v_path']="http://www.bbs.com/Application/Common/Public/".$v['v_path'];
                $list[$k]['v_thumb']="http://www.bbs.com/Application/Common/Public/".$v['v_thumb'];
            }
            echo $_GET['callback']."(".  json_encode($list).")" ;
            //dump($list);
        }else{
            echo $_GET['callback']."(0)" ;
        }
    }
}