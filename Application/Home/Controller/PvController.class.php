<?php
namespace Home\Controller;
use Think\Controller;
class PvController extends Controller {
    
    public function __construct() {
        parent::__construct();
        if(empty(session('user'))){
            $this->success('请先登录',U('login/login'));
            die;
        }
        //layout(false);
    }
    function pv(){
        $str="";
        $pv="";
        $list=M("pv")->select();
        foreach($list as $k=>$v){
          $str.="'".$v["start_time"]."',";
            $pv.="".$v["pv"].",";  
        }
        //echo $pv;
        //die;
        $chartdata="";
         foreach($list as $k=>$v){
           $chartdata.="{country: '".$v['start_time']."', value: ".$v['pv']."},";  
        }
        
      
                    
        $c=trim($chartdata,',');
        $a=trim($str,",");
        $b=trim($pv,",");
        $this->assign('list',$list);
        $this->assign(array("json"=>$a,'pv'=>$b,'chardata'=>$c));
        $this->display();
    }

}