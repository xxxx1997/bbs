<?php
namespace Index\Controller;
use Think\Controller;
header("content-type='textml' charset='utf8'");
class IndexController extends Controller {

	  public function __construct() {
         parent::__construct();
		 $a=M('nav')->select();
        //print_r($info);die;
        $this->assign('a',$a);
   
    }
    public function index(){
		
		
		$video = M('employment');
		$class=M('class');
		$info=M()->query("select * from __PREFIX__article where t_id=1");
		$list=M()->query("select * from __PREFIX__article where t_id=2");
		$rows=M()->query("select * from __PREFIX__article where t_id=3 and state=0");
		$arr=M()->query("select * from __PREFIX__article where t_id=4");
		$zhao=M()->query("select * from __PREFIX__article where t_id=5");
		$chang=M()->query("select * from __PREFIX__article where t_id=6");
	    $ke1=$class->where("class_type=1")->select();
		$ke2=$class->where("class_type=2")->select();
		$ke3=$class->where("class_type=3")->select();
		$info3=M()->query("select * from __PREFIX__employment  limit 0,8");
		//var_dump($info3);die;
		$d=M()->query("select * from pre_forum_post where first=1   order by pid desc limit 6");
		//$d=M("pre_forum_post")->select();

		//print_r($d);die;
		$this->assign("discuz",$d);
		$this->assign('ke1',$ke1);
		$this->assign('ke2',$ke2);
		$this->assign('ke3',$ke3);
		$this->assign('info3',$info3);
		$this->assign('chang',$chang);
		$this->assign('zhao',$zhao);
		$this->assign('arr',$arr);
		$this->assign('list',$list);
		$this->assign('info',$info);
		$this->assign('rows',$rows);
		$this->display();
    }

	public function show(){
		
		$id=$_GET['aid'];
		 if(!empty($info=S('a'))){
		   $this->assign("info",$info);
		   $state="来自缓存";
		   $this->assign("state",$state);
		 }else{
		 $info=M()->query("select * from __PREFIX__article where aid=$id");
		 S('a',$info,10);
		 $this->assign("info",$info);
		 }
		
		 
		 $this->display();
	}
	//登陆
		public function login(){
		$this->display();
		}
	public function login_do(){
			include './config.inc.php';
			include './uc_client/client.php';
			$name=$_POST['name'];
			$pwd=$_POST['pwd'];
			list($uid, $username, $password, $email) = uc_user_login($name,$pwd);
			if($uid > 0) {
				   session('n_name',$name); 
				   //echo session('n_name');die;
				   echo uc_user_synlogin($uid);
			 echo "<script>location.href='index/index'</script>";
			} elseif($uid == -1) {
					echo '用户不存在,或者被删除';
			} elseif($uid == -2) {
					echo '密码错';
			} else {
					echo '未定义';
			}
		}
		//退出
		public function logout(){
			include './config.inc.php';
			include './uc_client/client.php';
			 session('n_name',null);
			echo  uc_user_synlogout();
			 echo "<script>location.href='index/index'</script>";
		    // $this->display();
		}

	//注册
		public function reg(){
		$this->display();
		}
		
		
  
}