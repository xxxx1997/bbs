<?php
namespace Index\Controller;
use Think\Controller;
header("content-type='text/html' charset='utf8'");
class PortalController extends Controller {
    public function __construct() {
        parent::__construct();
		 if(empty(session('user'))){
            $this->success('请先登录',U('login/login'));
            die;
        }
        layout('Bbs/layout');
    }
    public function index(){
            $this->display();
    }
  
}