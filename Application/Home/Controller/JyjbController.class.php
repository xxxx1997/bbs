<?php
namespace Home\Controller;
use Think\Controller;
class JyjbController extends Controller {
    
    public function __construct() {
        parent::__construct();
        if(empty(session('user'))){
            $this->success('请先登录',U('login/login'));
            die;
        }
    }
    function index(){
        $count =M("video")->count();
        $Page= new \Think\Page($count,4);// 实例化分页类 传入总记录数和每页显示的记录数(3)
          $show= $Page->show();
        $list =M("video")->limit($Page->firstRow.','.$Page->listRows)->select();
        
          $this->assign('info',$list);// 赋值数据集
          $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }
    function del(){
        $v_id=$_POST["id"];
         $del=M("video")->where("v_id=$v_id")->delete();
         if($del){
             echo 1;
         }else{
             echo 2;
         }
    }
    function sel(){
         $id=$_GET["id"];
         $info=M("video")->where("v_id=$id")->find();
         //dump($info);
         $this->assign("info",$info);
         $this->display("select");
     }
     function upd(){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg','mp4');// 设置附件上传类型
        $upload->rootPath = COMMON_PATH.'/Public/';
        $upload->savePath  =  'Images/'; // 设置附件上传目录
        //$upload->savename = time();

        $info   =   $upload->upload();
      
        if($info) {// 上传错误提示错误信息

           $_POST['v_image']=$info['v_image']['savepath'].$info['v_image']['savename'];   
           $_POST['v_path']=$info['v_path']['savepath'].$info['v_path']['savename'];   
           $_POST['v_time']=time();
           $res=M('video')->data($_POST)->save();
           if($res){
               $this->success('修改成功',U('jyjb/index'));    
           }else{
               $this->error($res->getError());    
           }
        }else{
               // 上传失败
            $this->error($upload->getError());    
            
        }
         
     }
     function add(){
         
         $this->display();
     }
     function add_do(){
        // dump($_FILES);
        // die;
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     100 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg','mp4');// 设置附件上传类型
        $upload->rootPath = COMMON_PATH.'/Public/';
        $upload->savePath  =  'Images/'; // 设置附件上传目录
        //$upload->savename = time();

        $info   =   $upload->upload();
      
        if($info) {// 上传错误提示错误信息

           $_POST['v_image']=$info['v_image']['savepath'].$info['v_image']['savename'];   
           $_POST['v_path']=$info['v_path']['savepath'].$info['v_path']['savename'];   
           $res=M('video')->data($_POST)->add();
           if($res){
               $this->success('添加成功',U('jyjb/index'));    
           }else{
               $this->error($res->getError());    
           }
        }else{
               // 上传失败
            $this->error($upload->getError());    
            
        }
     }
}