<?php
namespace Index\Controller;
use Think\Controller;
class RegisteredController extends Controller {
    public function index(){
        layout(false);
        $this->display();
    }
	public function reg_do(){
		include_once("mail.class.php");
		$name=$_POST['name'];
		$smtpserver="smtp.163.com";
		$smtpserverport=25;
		$smtpusermail="guosiyi15600520219@163.com";
		$smtpemailto="$name";
		$smtpuser="guosiyi15600520219@163.com";
		$smtppass="15600520219";
		$mailsubject="用户帐号激活";
		$mailbody="亲爱的".$username."：<br/>感谢您在我站注册了新帐号。<br/>请点击链接激活您的帐号。<br/><a href='http://www.helloweba.com/demo/register/active.php?verify=".$token."' target='_blank'>http://www.helloweba.com/demo/register/active.php?verify=".$token."</a><br/>如果以上链接无法点击，请将它复制到你的浏览器地址栏中进入访问，该链接24小时内有效。<br/>如果此次激活请求非你本人所发，请忽略本邮件。<br/><p style='text-align:right'>-------- Hellwoeba.com 敬上</p>";
		$smtpemailfrom=$smtpusermail;
		$mailtype="HTML";
		$smtp=new Smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);
		$smtp->debug=false;
		$rs=$smtp->sendmail($smtpemailto,$smtpemailfrom,$mailsubject,$mailbody,$mailtype);
		if($rs==""){
		   echo "发送失败！！";
		}else{
		  echo "发送成功";
		}
	}
		
}