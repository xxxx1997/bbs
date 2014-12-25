<?php
namespace Index\Controller;
use Think\Controller;
header("content-type='textml' charset='utf8'");
class IndexController extends Controller {

	  public function __construct() {
         parent::__construct();
		 $a=M('nav')->select();
        //print_r($info);die;
        $this->assign('a',$a);
   
    }
    public function index(){
		$video = M('employment');
		$class=M('class');
		$info=M()->query("select * from __PREFIX__article where t_id=1");
		$list=M()->query("select * from __PREFIX__article where t_id=2");
		$rows=M()->query("select * from __PREFIX__article where t_id=3 and state=0");
		$arr=M()->query("select * from __PREFIX__article where t_id=4");
		$zhao=M()->query("select * from __PREFIX__article where t_id=5");
		$chang=M()->query("select * from __PREFIX__article where t_id=6");
	    $ke1=$class->where("class_type=1")->select();
		$ke2=$class->where("class_type=2")->select();
		$ke3=$class->where("class_type=3")->select();
		$info3=M()->query("select * from __PREFIX__employment  limit 0,8");
		//var_dump($info3);die;
		$d=M()->query("select * from pre_forum_post where first=1   order by pid desc limit 6");
		//$d=M("pre_forum_post")->select();

		print_r($d);die;
		$this->assign("discuz",$d);
		$this->assign('ke1',$ke1);
		$this->assign('ke2',$ke2);
		$this->assign('ke3',$ke3);
		$this->assign('info3',$info3);
		$this->assign('chang',$chang);
		$this->assign('zhao',$zhao);
		$this->assign('arr',$arr);
		$this->assign('list',$list);
		$this->assign('info',$info);
		$this->assign('rows',$rows);
		$this->display();
    }

	public function show(){
		$id=$_GET['aid'];
		 $info=M()->query("select * from __PREFIX__article where aid=$id");
		 $this->assign("info",$info);
		 $this->display();
	}
  
}