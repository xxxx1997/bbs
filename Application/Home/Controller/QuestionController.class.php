<?php
namespace Home\Controller;
use Think\Controller;
class QuestionController extends Controller {
    public function __construct() {
        parent::__construct();
        if(empty(session('user'))){
            $this->success('请先登录',U('login/login'));
            die;
        }
    }
    function question(){
        $count=M("problem")->count();
         $Page= new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(3)
         $show= $Page->show();
         $list =M("problem")->limit($Page->firstRow.','.$Page->listRows)->select();
          $this->assign('info',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }
    
     function sel(){
         $id=$_GET["id"];
         $info=M("problem")->where("p_id=$id")->find();
         //dump($info);
         $this->assign("info",$info);
         $this->display("select");
     }
     function upd(){
        //dump($_POST);
      //  die;
         $id=$_POST["p_id"];
         $res=M('problem')->where("p_id=$id")->save($_POST);
         if($res){
            $this->success('更新成功',U('question/question'),3);
         }else{
              $this->error('更新失败');
         }
     }
     function del(){
         $p_id=$_POST["id"];
         $del=M("problem")->where("p_id=$p_id")->delete();
         if($del){
             echo 1;
         }else{
             echo 2;
         }
     }
     function addd(){
        $this->display();
     }
     
     function add_do(){
       // dump($_POST);
       //dump($_FILES);
      // die;
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath = COMMON_PATH.'/Public/';
        $upload->savePath  =  'Images/'; // 设置附件上传目录
        //$upload->savename = time();

        $info   =   $upload->upload();
          
        if($info) {// 上传错误提示错误信息
           
           foreach($info as $file){  
               $_POST['p_image']=$file['savepath'].$file['savename'];   
           }
           $res=M('problem')->data($_POST)->add();
           if($res){
               $this->success('添加成功',U('question/question'));    
           }else{
               $this->error($res->getError());    
           }
        }else{
               // 上传成功        
            $this->error($upload->getError());    
        }
     }
}