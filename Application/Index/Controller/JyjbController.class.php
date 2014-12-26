<?php
namespace Index\Controller;
use Think\Controller;
class JyjbController extends IndexController {
    public function index(){
        $Emp = M('employment');
        $Video = M('video');
        $Article = M('article');
        $Class = M('class');
        $data=$Emp->where("jy_type=1")->select();
        $data1=$Emp->where("jy_type=2")->select();
        $data2=$Emp->where("jy_type=3")->select();
        $info=$Article->where("t_id=5")->select();
        $info1=$Class->where("class_type=1")->select();
        //echo M()->getlastsql();
        //die;
        $info2=$Class->where("class_type=2")->select();
        $info3=$Class->where("class_type=3")->select();
        $img=$Video->select();
        
        $this->assign('info',$info);
        $this->assign('info1',$info1);
        $this->assign('info2',$info2);
        $this->assign('info3',$info3);
        $this->assign('img',$img);
        $this->assign('data',$data);
        $this->assign('data1',$data1);
        $this->assign('data2',$data2);
        $this->display();
    }
    #查出视屏
    public function video(){
        $Video = M('video');
        $id=$_GET["id"];
        //echo $id;
        //die;
        $video=$Video->where("v_id=$id")->find();
        //dump($video);
        //die;
        $videos=M("videos")->select();
        $this->assign("videos",$videos);
        $this->assign('video',$video);
        $this->display();
    }
    #查文章
    public function detailed(){
        $Acticle = M('article');
        $id=$_GET["id"];
        $info=$Acticle->where("aid=$id")->select();
        $count=M("article_comment")->where("a_id=$id")->count();
        //dump($count);
        //die;
        $Page= new \Think\Page($count,3);// 实例化分页类 传入总记录数和每页显示的记录数(3)
        $show= $Page->show();
        $list =M("article_comment")->where("a_id=$id")->order('start_time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $video=M("videos")->select();
        $this->assign("video",$video);
         $this->assign('data',$info);
          $this->assign('info',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
       $this->display(); 
    }
    #开课
    public function training(){
        $Class=M("class");
        $id=$_GET["id"];
        //echo $id;
        //die;
        $info=$Class->where("id=$id")->select();
        $this->assign('info',$info);
        $this->display();
    }
    #企业招聘的评论
    public function article_comment(){
        $Art_com=M("article_comment");
        $content=$_GET["content"];
        $code=$_GET["code"];
        $region=$_GET["region"];
        $a_id=$_GET["a_id"];
       $start_time=time();
       
      $c= $this->check_verify($code);
               if($c){
            $data['a_id'] = $a_id;
           $data['a_comment'] = $content;
           $data['a_region'] = $region;
           $data['start_time'] = $start_time;
           if($Art_com->add($data)){
              $info=M("article_comment")->where("a_id=$a_id")->limit(3)->order("start_time desc")->select();
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
#验证  验证码
function check_verify($code, $id = ''){       
    $verify = new \Think\Verify();
        return $verify->check($code, $id);  
}
#报名添加
function check(){ 
    //data:{"realname":realname,"phone":phone,"qq":qq,"address":address,"cid":cid},
    $Bao=M("bao");
      $realname=$_GET["realname"];
      $phone=$_GET["phone"];
      $qq=$_GET["qq"];
      $address=$_GET["address"];
      $c_id=$_GET["cid"];
      $start_time=time();
      
      $data["c_id"]=$c_id;
      $data["b_name"]=$realname;
      $data["b_phone"]=$phone;
      $data["b_region"]=$address;
      $data["b_qq"]=$qq;
      $data["start_time"]=$start_time;
      if($Bao->add($data)){
            echo 1;
      }else{
          echo 0;
      }
      
      

      
        
}
  
}           