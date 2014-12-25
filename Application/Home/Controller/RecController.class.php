<?php
namespace Home\Controller;
use Think\Controller;
class RecController extends Controller {
	public function rec_list(){
		$info=M()->query("select * from __PREFIX__article where t_id=5");
        $this->assign('info',$info);
		$this->display();
	}
	    public function del_class(){
         $res=M('article')->where('aid='.I('post.id'))->delete(); 
         echo M()->getlastsql();die;
        if($res){
            echo 1;
        }else{
            
            echo 0;
        }
    }
	public function rec_add_do(){
			$article = M("article"); // 实例化User对象// 然后直接给数据对象赋值
			$article->a_title = $_POST['a_title'];
			$article->a_content =  $_POST['a_content'];// 把数据对象添加到数据库$User->add();
			$article->t_id=$_POST['t_id'];
			$article->start_time=$_POST['start_time'];
			$article->state=$_POST['state'];
         if($article->add()){
            $this->success('添加成功',U('rec/rec_list'));
        }else{
            $this->error('添加失败');
        }
	}
	    public function see(){
        $list=M("article")->where("aid=".$_GET['aid'])->find();
        $this->assign('list',$list);
        $this->display();
    }
	    public function update(){
        $res=M('article')->where("aid=".$_GET['aid'])->save($_POST); 
        if($res){
            $this->success('更新成功',U('rec/rec_list'));
        }else{
           
            $this->error('更新失败');
        }
    }
}
?>
