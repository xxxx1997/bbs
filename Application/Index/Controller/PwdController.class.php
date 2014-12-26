<?php
namespace Index\Controller;
use Think\Controller;
class PwdController extends IndexController {
    function __construct() {
        
        parent::__construct();
        layout(false);
    }
            function pwd(){
                $this->display("index");
            }
function phone(){
    $name=$_POST["name"];
    $info=M()->query("select * from pre_ucenter_members where username='$name'");
    if($info[0]['phone']){
        echo $info[0]['phone'];
    }else{
        echo 0;
    }
}
function send(){
    $phone=$_POST["font"];
    $name=$_POST["name"];
   $time=substr(time(),6,10);
   // $time=1234;
   
   $url="http://utf8.sms.webchinese.cn/?Uid=zhaolun&Key=879dfccb74573d62cb28&smsMob=".$phone."&smsText=许浩杰：".$name."正在找回密码，验证码：".$time.",英雄四组网站用户如果不是本人操作，请忽略此短信。【英雄四组】";
   
   $a=file_get_contents($url);
   //$a=1;
   if($a>0){
       echo $time.",".$name;
   }else{
       echo 0;
   }
}

   #验证输入验证码时候正确     
function yan(){
    #输入的验证码
        $yan=$_POST["yan"];
        #发送的验证码
        $v=$_POST["v"];
        $username=$_POST["username"];
        if($yan==$v){
            echo $username;
        }else{
            echo 0;
        }
}
function upd_pwd(){
    $username=$_GET["name"];
    $this->assign("username",$username);
    $this->display("pwd");
}
function upd(){
    $username=$_POST["username"];
   // echo $username;
   // die;
    $info=M()->query("select * from pre_ucenter_members where username='$username'");
    //dump($info);
    //die;
   $password=md5(md5($_POST['password']).$info[0]['salt']);
   //echo $password;
   //die;
   $sql="update pre_ucenter_members set password='$password' where username='$username'";
    $info=M()->execute($sql);
    if($info){
        echo 1;
    }else{
        echo 0;
    }
    
}
  
}