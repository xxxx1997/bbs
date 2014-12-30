<?php
namespace Index\Controller;
use Think\Controller;
header("content-type='text/html' charset='utf8'");
class ApiarticleController extends Controller {
	function article_show(){
		$info=M()->query("select * from __PREFIX__article where state=0");
		$callback=$GET['callback'];
		echo json_encode($info);
	}
	function article_find(){
		$title="通知";
		$rews=M()->query("select * from __PREFIX__article where a_title like '%".$title."%'");
	 	//var_dump($rews);
		$callback=$GET['callback'];
		echo json_encode($rews);
	}
}
?>