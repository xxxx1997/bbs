<?php
namespace Index\Controller;
use Think\Controller;
header("content-type='text/html' charset='utf8'");
class VideoController extends Controller {
    public function index(){
      $info=M()->table('bbs_videos v,bbs_videos_cate c')->where("v.cate_id=c.cate_id")->order('v_id ')->       select();
        //print_r($info);die;
        $this->assign('info',$info);
        
	$this->display();
    }
    //详情页
    public function details(){
        $v_id=$_GET['v_id'];
        $info=M()->table('bbs_videos v,bbs_videos_cate c')->where("v.cate_id=c.cate_id and v_id=$v_id")->        order('v_id ')->find();
        //print_r($info);die;
        $this->assign('info',$info);
        $this->display();
    }
  
}