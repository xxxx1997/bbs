<?php
namespace Index\Controller;
use Think\Controller;
class JyjbController extends Controller {
    public function index(){
        $Emp = M('employment');
        $Video = M('video');
        $Article = M('article');
        $Class = M('class');
        $data=$Emp->where("jy_type=1")->select();
        $data1=$Emp->where("jy_type=2")->select();
        $data2=$Emp->where("jy_type=3")->select();
        $info=$Article->where("t_id=5")->select();
        $info1=$Class->where("class_type=1")->select();
        //echo M()->getlastsql();
        //die;
        $info2=$Class->where("class_type=2")->select();
        $info3=$Class->where("class_type=3")->select();
        $img=$Video->select();
        
        $this->assign('info',$info);
        $this->assign('info1',$info1);
        $this->assign('info2',$info2);
        $this->assign('info3',$info3);
        $this->assign('img',$img);
        $this->assign('data',$data);
        $this->assign('data1',$data1);
        $this->assign('data2',$data2);
        $this->display();
    }
    #查出视屏
    public function video(){
        $Video = M('video');
        $id=$_GET["id"];
        //echo $id;
        //die;
        $video=$Video->where("v_id=$id")->select();
        //dump($video);
        //die;
        $this->assign('video',$video);
        $this->display();
    }
    #查文章
    public function detailed(){
        $Acticle = M('article');
        $id=$_GET["id"];
        $info=$Acticle->where("aid=$id")->select();
        //dump($info);
        //die;
         $this->assign('info',$info);
       $this->display(); 
    }
    #开课
    public function training(){
        $Class=M("class");
        $id=$_GET["id"];
        //echo $id;
        //die;
        $info=$Class->where("id=$id")->select();
        $this->assign('info',$info);
        $this->display();
    }
  
  
}           