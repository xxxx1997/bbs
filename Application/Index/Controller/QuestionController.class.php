<?php
namespace Index\Controller;
use Think\Controller;
class QuestionController extends Controller {
    public function index(){
        $Prob=M("problem");
        $info=$Prob->where("t_id=1")->select();
        //duMP($info);
        $data=$Prob->where("t_id=2")->select();
        $this->assign("data",$data);
        $this->assign("info",$info);
        $this->display();
    }
    public function answer(){
        $Prob=M("problem");
        $id=$_GET["id"];
        $res=$Prob->where("p_id=$id")->select();
        $this->assign("data",$res);
          $this->display();
    }
  
}