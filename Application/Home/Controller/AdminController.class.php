<?php
namespace Home\Controller;
use Think\Controller;
class AdminController extends Controller {
    public function __construct() {
        parent::__construct();
        if(empty(session('user'))){
            $this->success('请先登录',U('login/login'));
            die;
        }
    }

    public function index(){
    
            $this->display();
    }

    public function course(){
            $list=M('class')->select();
            $this->assign($list);
            $this->display();
    }
    public function add_course(){
    
            $this->display();
    }
    public function verify_c(){  
        $Verify = new \Think\Verify();  
        $Verify->fontSize = 18;  
        $Verify->length   = 4;  
        $Verify->useNoise = false;  
        $Verify->codeSet = '0123456789';  
        $Verify->imageW = 130;  
        $Verify->imageH = 50;  
        //$Verify->expire = 600;  
        $Verify->entry();  
    } 
}