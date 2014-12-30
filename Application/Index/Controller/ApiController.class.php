<?php
namespace Index\Controller;
use Think\Controller;
header("content-type='text/html' charset='utf8'");
class ApiController extends IndexController {
    public function __construct() {
        parent::__construct();
        layout(false);
    }
    public function login(){
	$this->display();
    }
    
    public function login_do(){ 
        //dump($_POST);
        $res=M('api_user')->where("username='".$_POST['username']."' and password='".$_POST['password']."'")->find();
        //echo M()->getlastsql();
        if($res){
            session('api_user',$res);
            $this->success('登录成功',U('api/api_list'));    
        }else{
            $this->error('用户名或密码错误'); 
        }
        //
	
    
        
    }
    public function api_apply(){
         
         $res=M('api_user_url')->data($_POST)->add();
         if($res){
             echo 1;
         }else{
             echo 0;
         }
         
    }
    public function api_list(){
        layout('layout');
        $res=M('api_user')->where("id=".session('api_user')['id'])->find();
        if(session('api_user')){
             if($res['state']==1){
                $list=M()->table('bbs_api_user a,bbs_api_url b,bbs_api_user_url c')->where('a.id=c.user_id and b.id=c.url_id and a.id='.session('api_user')['id'])->select();
                //echo M()->getlastsql();
                //dump($list);die;
                $api_list=M('api_url')->select();
                //dump($api_list);die;
                $this->assign('api_list',$api_list);
                $this->assign('list',$list);
                $this->display();

            }else{
                echo '请等待审核通过....';
            }
        }else{
            $this->error('请先登录',U('api/login')); 
        }
       
    }
    
    
    public function registration(){
	$this->display();
    }
    
    public function registration_do(){
	//dump($_POST);
         $_POST['time'] = time();
         $r=rand(rand(0,100),rand(50,60000));
         $c=$r+time();
         $key=sha1(md5($c));
         $_POST['k']=$key;
         $res=M('api_user')->data($_POST)->add();
         if($res){
            $this->success('注册成功,请登录..',U('api/login'));    
         }else{
            $this->error('注册失败');    
         }
    }
}