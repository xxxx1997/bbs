<?php
namespace Home\Controller;
use Think\Controller;
class ArticleController extends Controller {
    
    public function __construct() {
        parent::__construct();
        if(empty(session('user'))){
            $this->success('请先登录',U('login/login'));
            die;
        }
    }
    
    public function article_list(){
        //$User = M('article'); // 实例化User对象
        $list=M()->table('bbs_article a,bbs_type t')->where("a.t_id=t.id")->order('a.t_id asc')->select();
        $this->assign('list',$list);// 赋值数据集
        //dump($list);die;
        $this->display(); // 输出模板      
    }
    public function del(){
        $res=M('article')->where('aid='.I('post.id'))->delete(); 
        if($res){
            echo 1;
        }else{
            
            echo 0;
        }
    }
    public function add(){
        $list=M('type')->select();
        $this->assign('cate',$list);
        $this->display();
    }
    public function see(){
        //echo $_GET['t_id'];
        $list=M("article")->where("aid=".$_GET['aid'])->find();
        $cate=M('type')->select();
//        /dump($list);die;
        $this->assign('list',$list);
        $this->assign('cate',$cate);
        $this->display();
    }
    public function update(){
        $res=M('article')->where("aid=".$_GET['aid'])->save($_POST); 
        if($res){
            $this->success('更新成功',U('article/article_list'));
        }else{
           
            $this->error('更新失败');
        }
    }
    public function class_list(){
        $list=M('type')->select();
        $this->assign('list',$list);// 赋值数据集
        //dump($list);die;
        $this->display();
    }
    public function add_class(){
       
        $this->display();
    }
     public function see_class(){
        $list=M("type")->where("id=".$_GET['id'])->find();
        $this->assign('list',$list);
       
        $this->display();
    }
    public function upd_class(){
         $res=M('type')->where("id=".$_GET['id'])->save($_POST); 
        if($res){
            $this->success('更新成功',U('article/class_list'));
        }else{
           
            $this->error('更新失败');
        }
    }
    public function del_class(){
         $res=M('type')->where('id='.I('post.id'))->delete(); 
         echo M()->getlastsql();die;
        if($res){
            echo 1;
        }else{
            
            echo 0;
        }
    }
    public function add_class_do(){
       $res=M('type')->data($_POST)->add();
         if($res){
               $this->success('添加成功',U('article/class_list'));    
           }else{
               $this->error('添加失败');    
         }
    }
    public function add_do(){
       // dump($_POST);
       // dump($_FILES);
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath = COMMON_PATH.'/Public/';
        $upload->savePath  =  'Images/'; // 设置附件上传目录
        //$upload->savename = time();

        $info   =   $upload->upload();
          
        if($info) {// 上传错误提示错误信息
           
           foreach($info as $file){  
               $_POST['a_thumb']=$file['savepath'].$file['savename'];   
           }
           $_POST['start_time']=time();
           $res=M('article')->data($_POST)->add();
           if($res){
               $this->success('添加成功',U('article/article_list'));    
           }else{
               $this->error($res->getError());    
           }
            
        }else{
               // 上传成功        
            $this->error($upload->getError());    
            
        }
            
        
        
    }
}