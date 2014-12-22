<?php
namespace Index\Controller;
use Think\Controller;
header("content-type='text/html' charset='utf8'");
class PluginController extends Controller {
    public function __construct() {
        parent::__construct();
        layout('Bbs/layout');
    }
    public function index(){
            $this->display();
    }
    //详情页

  
}