<?php
namespace Index\Controller;
use Think\Controller;
class CourseController extends IndexController {
	
    public function index(){
		$class=M('class');
		$list=M()->query("select * from __PREFIX__content");
		$ke1=$class->where("class_type=1")->select();
		$ke2=$class->where("class_type=2")->select();
		$ke3=$class->where("class_type=3")->select();
		$this->assign('list',$list);
		$this->assign('ke1',$ke1);
		$this->assign('ke2',$ke2);
		$this->assign('ke3',$ke3);
		$this->display();
    }
  
}