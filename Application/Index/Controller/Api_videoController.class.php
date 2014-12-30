<?php
namespace Index\Controller;
use Think\Controller;
header("content-type='text/html' charset='utf8'");
class Api_videoController extends IndexController {
    public function index(){
      $info=M()->table('bbs_videos v,bbs_videos_cate c')->where("v.cate_id=c.cate_id")->order('v_id ')->       select();
        //print_r($info);die;
      // 常见问题
        $Prob=M("problem");
        $arr=$Prob->order('start_time desc')->limit('5')->select();
       
        $this->assign("arr",$arr);
        $this->assign('info',$info);
        
	$this->display();
    }
}