<?php
namespace Index\Controller;
use Think\Controller;
header("content-type='text/html' charset='utf8'");
//师资力量api
class ApiteacherController extends IndexController {
	function  show(){
		$k=$_GET['key'];
        $res=M('api_user')->where("k='$k'")->find();
		if($res){
			$info=M()->query("select t_id,t_name,t_desc,t_photo from bbs_teacher ");
			foreach($info as $k=>$v){
                $info[$k]['t_photo']=__ROOT__."/Application/Common/Public/".$v['t_photo'];
             
            }
			echo $_GET['callback']."(".json_encode($info).")" ;
		}else{
            echo $_GET['callback']."(0)" ;
        }
	}
	//最新十条帖子接口
	function tiezi(){
	   $k=$_GET['key'];
       $res=M('api_user')->where("k='$k'")->find();
		// $res=1;
		if($res){
		$info=M()->query("select tid,subject from pre_forum_post where first=1 order by pid desc limit 10");
		foreach($info as $k=>$v){
           $info[$k]['url']="http://www.discuz.com/upload/forum.php?mod=viewthread&tid=".$v['tid'];
             }
		        echo $_GET['callback']."(".json_encode($info).")" ;
          }else{
            echo $_GET['callback']."(0)" ;
        }
	}
	
	
	
  
}