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
            $count=M('class')->count();

            $this->assign("count",$count);
            $this->assign("list",$list);
           
            //dump($list);
            //die;
            $this->display();
    }
    public function add_course(){
            $this->display();
    }
    function add_do(){
        $res=M('class')->data($_POST)->add();
         if($res){
               $this->success('添加成功',U('admin/course'));    
           }else{
               $this->error('添加失败');    
         }
    }
    function del(){
         $id=$_POST["id"];
         $del=M("class")->where("id=$id")->delete();
         if($del){
             echo 1;
         }else{
             echo 2;
         }
     }
      function upd(){
        //dump($_POST);
      //  die;
         $id=$_POST["id"];
        // echo $id;
        // die;
         $res=M('class')->where("id=$id")->save($_POST);
         if($res){
            $this->success('更新成功',U('admin/course'),3);
         }else{
              $this->error('更新失败');
         }
     }
     function sel(){
         $id=$_GET["id"];
         $info=M("class")->where("id=$id")->find();
         //dump($info);
         $this->assign("info",$info);
         $this->display("select");
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