<?php
namespace Index\Controller;
use Think\Controller;
header("content-type='text/html' charset='utf8'");
//师资力量
class TeacherController extends IndexController {
    public function index(){
        $info=M()->table('bbs_teacher tea,bbs_teacher_cate cate')->where("tea.cate_id=cate.cate_id")->           order('t_id asc')->select();
       

	$this->assign('info',$info);
	$this->display();
    }
    public function det(){
       $t_id=$_GET['t_id'];
     $info=M()->table('bbs_teacher tea,bbs_teacher_cate cate')->where("tea.cate_id=cate.cate_id and t_id=$t_id")->find();
       //echo $info['t_time'];
        //print_r($info);die;
        $this->assign('info',$info);
        $this->display();
        
    }
  
}