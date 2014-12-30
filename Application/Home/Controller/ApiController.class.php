<?php
namespace Home\Controller;
use Think\Controller;
class ApiController extends Controller {
    public function __construct() {
        parent::__construct();
        if(empty(session('user'))){
            $this->success('请先登录',U('login/login'));
            die;
        }
    }

    public function user(){
         $list=M('api_user')->select();
         $this->assign('list',$list);
         $this->display();
    }
    public function url(){
         $list=M('api_url')->select();
         $this->assign('list',$list);
         $this->display();
    }
    public function add_url(){
     
         $this->display();
    }
    public function add_url_do(){
        $_POST['time']=time();
        $res=M('api_url')->data($_POST)->add();
        //echo M()->getlastsql();die;
        if($res){
             $this->success('添加成功',U('api/url'));
        }else {
            $this->error('添加失败');
        }
    }
    public function user_apply(){
        $res=M('api_user')->where("id=".$_GET['id'])->save(array('state'=>$_GET['state']));
        //echo M()->getlastsql();
        //echo $_POST['id'];
        if($res){
             $this->success('修改成功',U('api/user'));
        }else {
            $this->error('审核失败');
        }
    }
    public function user_url_apply(){
        $res=M('api_user_url')->where("a_id=".$_GET['id'])->save(array('a_state'=>$_GET['state']));
        //echo M()->getlastsql();die;
        //echo $_POST['id'];
        if($res){
             $this->success('修改成功',U('api/user_url'));
        }else {
            $this->error('审核失败');
        }
    }
    public function user_url(){
         $list=M()->table('bbs_api_user a,bbs_api_url b,bbs_api_user_url c')->where('a.id=c.user_id and b.id=c.url_id ')->select();
         //dump($list);
         $this->assign('list',$list);
         $this->display();
    }

}