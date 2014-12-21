<?php
namespace Index\Controller;
use Think\Controller;
class QuestionController extends IndexController {
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