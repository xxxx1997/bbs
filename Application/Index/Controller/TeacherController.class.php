<?php
namespace Index\Controller;
use Think\Controller;
header("content-type='text/html' charset='utf8'");
//师资力量
class TeacherController extends Controller {
    public function index(){
        $info=M()->table('bbs_teacher tea,bbs_teacher_cate cate')->where("tea.cate_id=cate.cate_id")->           order('t_id asc')->select();
       

	$this->assign('info',$info);
	$this->display();
    }
  
}