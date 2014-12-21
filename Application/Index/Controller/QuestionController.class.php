<?php
namespace Index\Controller;
use Think\Controller;
<<<<<<< HEAD
class QuestionController extends IndexController {
=======
class QuestionController extends Controller {
    #显示常见问题的列表
>>>>>>> 0eb3888630779aca000b2a0064eb4a949cf1bc52
    public function index(){
        $Prob=M("problem");
        $info=$Prob->where("t_id=1")->select();
        //duMP($info);
        $data=$Prob->where("t_id=2")->select();
        $video=M("videos")->select();
        $this->assign("video",$video);
        $this->assign("data",$data);
        $this->assign("info",$info);
        $this->display();
    }
    #显示问题的对应答案
    public function answer(){
        $id=$_GET["id"];
        $res=M("problem")->where("p_id=$id")->select();
        $count=M("comment")->where("a_id=$id")->count();
        $Page= new \Think\Page($count,3);// 实例化分页类 传入总记录数和每页显示的记录数(3)
        $show= $Page->show();
        $list =M("comment")->where("a_id=$id")->order('start_time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        //dump($list);
        //die;
        $video=M("videos")->select();
        $this->assign("video",$video);
        $this->assign('info',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->assign("data",$res);
        $this->display();
    }
    #添加评论
    public function comment(){
        $Com=M("comment");
        $content=$_GET["content"];
        $code=$_GET["code"];
        $region=$_GET["region"];
        $a_id=$_GET["a_id"];
       $start_time=time();
       
      $c= $this->check_verify($code);
      
               if($c){
            $data['a_id'] = $a_id;
           $data['c_comment'] = $content;
           $data['c_region'] = $region;
           $data['start_time'] = $start_time;
        
           if($Com->add($data)){
               $info=M("comment")->where("a_id=$a_id")->limit(3)->order("start_time desc")->select();
               foreach($info as $k=>$v){
                  $info[$k]["start_time"]=date("Y-m-d H:i",$info[$k]["start_time"]);
               }
              echo json_encode($info);
           }else{
               echo 0;
           }
      }else{
          echo 3;
      } 
    }
    
    #验证码
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
function check_verify($code, $id = ''){       
    $verify = new \Think\Verify();
        return $verify->check($code, $id);
        
}
}