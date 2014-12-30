<?php
namespace Index\Controller;
use Think\Controller;
class ApiuserController extends Controller {
            
              function user_show(){
                 $info=M("problem")->select();
                 //dump($info);
                 //die;
                 $callback = $_GET['callback'];
                echo  json_encode($info);  
              }
                function user_search(){
                       $name='xuhaojie';
                       $search=M()->query("select  username from pre_ucenter_members where username='$name'");
                       $callback = $_GET['callback'];
                       echo  json_encode($search);    
              }
}