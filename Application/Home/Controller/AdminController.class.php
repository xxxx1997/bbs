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
         
            $this->display();
    }
}