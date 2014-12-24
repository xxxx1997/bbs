<?php
namespace Index\Controller;
use Think\Controller;
header("content-type='text/html' charset='utf8'");
class LoginController extends Controller {
    public function login(){
		    layout(false);
            $this->display();
    }
	 public function login_do(){
      $data['user_name']=I('post.user_name'); 
      $data['user_password']=  md5(I('post.user_password')); 
      $res=M('user')->where($data)->select();
      
      if ($res) {
          session('user',$res[0]);
          $this->success('登陆成功',U('portal/index'));
      }
    }
	    public function logout(){
          session('user',null);
          $this->success('退出成功',U('portal/index'));
     
    }
}