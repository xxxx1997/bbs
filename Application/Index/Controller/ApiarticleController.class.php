<?php
namespace Index\Controller;
use Think\Controller;
header("content-type='text/html' charset='utf8'");
class ApiarticleController extends Controller {
	function article_show(){
		$key=$_GET['key'];
		$find=M("api_user")->where("k='$key'")->find();
		if($find){
			$info=M()->table("bbs_article,bbs_type")->where("bbs_article.t_id=bbs_type.id")->select();
			echo $_GET['callback']."(".json_encode($info).")";
		 }else{
			echo $_GET['callback']."(-1)";
		}
	}
	function article_find(){
		$key=$_GET['key'];
		$title=$_GET['title'];
		$find=M("api_user")->where("k='$key'")->find();
		if($find){
			$rews=M()->table("bbs_article,bbs_type")->where("bbs_article.t_id=bbs_type.id and a_title like '%".$title."%'")->select();
			echo $_GET['callback']."(".json_encode($rews).")";
		}else{
			echo $_GET['callback']."(-1)";
		}
	}
}
?>