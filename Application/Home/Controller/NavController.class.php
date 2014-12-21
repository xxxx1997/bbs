<?php
namespace Home\Controller;
use Think\Controller;
class NavController extends Controller {
    
    public function __construct() {
        parent::__construct();
        if(empty(session('user'))){
            $this->success('请先登录',U('login/login'));
            die;
        }
    }
        //导航列表
    public function nav_list(){
        $info=M('nav')->select();
       // print_r($info);die;
        $this->assign('info',$info);
        $this->display();

    }
        //添加导航
    public function nav_add(){
   
  
        $this->display();

    }
            //添加导航
    public function nav_add_do(){
     $nav = M("nav"); // 实例化User对象// 然后直接给数据对象赋值
     $nav->n_name = $_POST['name'];
    $nav->n_url =   $_POST['url'];// 把数据对象添加到数据库$User->add();
         if($nav->add()){
            $this->success('添加成功',U('nav/nav_list'));
        }else{
           
            $this->error('添加失败');
        }
 

    }


}
?>