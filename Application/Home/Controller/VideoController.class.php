<?php
namespace Home\Controller;
use Think\Controller;
class VideoController extends Controller {
    
    public function __construct() {
        parent::__construct();
        if(empty(session('user'))){
            $this->success('请先登录',U('login/login'));
            die;
        }
    }
    
    public function video_list(){
        $User = M('Videos'); // 实例化User对象
        $count      = $User->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $User->limit($Page->firstRow.','.$Page->listRows)->select();

        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板      
    }
    public function del(){
        $res=M('Videos')->where('v_id='.I('post.id'))->delete(); 
        if($res){
            echo 1;
        }else{
            
            echo 0;
        }
    }
    public function add(){
        $list=M('Videos_cate')->select();
        $this->assign('list',$list);
        $this->display();
    }
    public function see(){
        //echo $_GET['t_id'];
        $list=M("videos")->where("v_id=".$_GET['v_id'])->find();
        $cate=M('videos_cate')->select();
        
        //dump($cate);die;
        $this->assign('list',$list);
        $this->assign('cate',$cate);
        $this->display();
    }
    public function update(){
        $res=M('videos')->where("v_id=".$_GET['t_id'])->save($_POST); 
        if($res){
            $this->success('更新成功',U('video/video_list'));
        }else{
           
            $this->error('更新失败');
        }
    }
    public function add_do(){
       // dump($_POST);
       // dump($_FILES);
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg','mp4');// 设置附件上传类型
        $upload->rootPath = COMMON_PATH.'/Public/';
        $upload->savePath  =  'Images/'; // 设置附件上传目录
        //$upload->savename = time();

        $info   =   $upload->upload();
      
        if($info) {// 上传错误提示错误信息

           $_POST['v_thumb']=$info['v_thumb']['savepath'].$info['v_thumb']['savename'];   
           $_POST['v_path']=$info['v_path']['savepath'].$info['v_path']['savename'];   
           $_POST['time']=time();
           $res=M('videos')->data($_POST)->add();
           if($res){
               $this->success('添加成功',U('video/video_list'));    
           }else{
               $this->error($res->getError());    
           }
            
        }else{
               // 上传成功        
            $this->error($upload->getError());    
            
        }
            
        
        
    }
}