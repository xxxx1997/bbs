<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>英雄四组</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="/addbbs/Application/Common/admin/css/style.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="/addbbs/Application/Common/admin/js/jquery.js"></script>
<img src="/addbbs/Application/Common/admin/images/c.jpg" alt="" width="100%" height="150"/>
<script type="text/javascript">
$(function(){	
	//导航切换
	$(".menuson li").click(function(){
		$(".menuson li.active").removeClass("active")
		$(this).addClass("active");
	});
	
	$('.title').click(function(){
		var $ul = $(this).next('ul');
		$('dd').find('ul').slideUp();
		if($ul.is(':visible')){
			$(this).next('ul').slideUp();
		}else{
			$(this).next('ul').slideDown();
		}
	});
})	
</script>
<style type="text/css">
.leftmenu{
	height:1000;
}
</style>

</head>

<body style="background:#f0f9fd;">
    <div class="lefttop" ><span ></span> <div style='margin-left:80%'>欢迎&nbsp;&nbsp;<?php echo session('user')['user_name'];?>&nbsp;&nbsp;登陆&nbsp;&nbsp;<a href="<?php echo U('login/logout');?>"> 退出</a></div></div>
        <dl class="leftmenu" style="float:left">
        
    <dd>
    <div class="title">
    <span><img src="/addbbs/Application/Common/admin/images/leftico01.png" /></span>培训课程
    </div>
    	<ul class="menuson">
        <li <?php if($Think.ACTION_NAME=='course'){ echo "class='active'";} ?>><cite></cite><a href="<?php echo U('admin/course');?>" >课程管理</a><i></i></li>
       
        </ul>
    </dd>
     <dd>
    <div class="title">
    <span><img src="/addbbs/Application/Common/admin/images/leftico01.png" /></span>文章管理
    </div>
    	<ul class="menuson">
        <li <?php if($Think.ACTION_NAME=='article_list'){ echo "class='active'";} ?>><cite></cite><a href="<?php echo U('article/article_list');?>" >文章列表</a><i></i></li>
         <li <?php if($Think.ACTION_NAME=='class_list'){ echo "class='active'";} ?>><cite></cite><a href="<?php echo U('article/class_list');?>" >分类列表</a><i></i></li>
       
        </ul>
    </dd>
    
    <dd>
    <div class="title">
    <span><img src="/addbbs/Application/Common/admin/images/leftico02.png" /></span>视频
    </div>
    <ul class="menuson">
        <li <?php if($Think.ACTION_NAME=='video'){ echo "class='active'";} ?>><cite></cite><a href="<?php echo U('video/video_list');?>">列表</a><i></i></li>
            
       
        </ul>
    </dd> 
    
    
    <dd><div class="title"><span><img src="/addbbs/Application/Common/admin/images/leftico01.png" /></span>师资力量</div>
    <ul class="menuson">
        <li <?php if($Think.ACTION_NAME=='teacher_list'){ echo "class='active'";} ?>><cite></cite><a href="<?php echo U('teacher/teacher_list');?>">列表</a><i></i></li>

    </ul>   
    </dd>
            
            
            
        <dd><div class="title"><span><img src="/addbbs/Application/Common/admin/images/leftico01.png" /></span>就业信息</div>
    <ul class="menuson">
        <li <?php if($Think.ACTION_NAME=='jyjb'){ echo "class='active'";} ?>><cite></cite><a href="<?php echo U('admin/jyjb');?>">列表</a><i></i></li>

    </ul>
    </dd>
            
     
    <dd><div class="title"><span><img src="/addbbs/Application/Common/admin/images/leftico01.png" /></span>常见问题</div>
    <ul class="menuson">
        <li <?php if($Think.ACTION_NAME=='question'){ echo "class='active'";} ?>><cite></cite><a href="<?php echo U('admin/question');?>">列表</a><i></i></li>

    </ul>    
    </dd>
       <dd><div class="title"><span><img src="/addbbs/Application/Common/admin/images/leftico01.png" /></span>系统管理</div>
    <ul class="menuson">
        <li><cite></cite><a href="#">统计</a><i></i></li>
         <li <?php if($Think.ACTION_NAME=='aa'){ echo "class='active'";} ?>><cite></cite><a href="right.html" target="rightFrame">数据列表</a><i></i></li>
        <li><cite></cite><a href="tools.html" target="rightFrame">常用工具</a><i></i></li>
        <li><cite></cite><a href="filelist.html" target="rightFrame">信息管理</a><i></i></li>
        <li><cite></cite><a href="tab.html" target="rightFrame">Tab页</a><i></i></li>
        <li><cite></cite><a href="error.html" target="rightFrame">404页面</a><i></i></li>

    </ul>    
    </dd>
    </dl>
   
        <div style='float: left; margin-top: 188; width: 86%'>
            
             <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加教师</title>
<link href="/addbbs/Application/Common/admin/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>

	<div class="place">
    <span>位置：</span>
    <ul class="placeul">
    <li><a href="#">首页</a></li>
    <li><a href="#">表单</a></li>
    </ul>
    </div>
    
    <div class="formbody">
    
        <div class="formtitle"><a href="/addbbs/Home/Video/video_list"><span>列表</span></a></div>
        <form action="<?php echo U('video/add_do'),array('v_id'=>$_GET['v_id']);?>" method="post" enctype="multipart/form-data">
    <ul class="forminfo">
        <li><label>标题</label><input name="v_name" value="<?php echo ($list["v_name"]); ?>" type="text" class="dfinput" /><i></i></li>
    
    <li><label>作者</label><input name="v_author"value="<?php echo ($list["v_author"]); ?>" type="text" class="dfinput" /></li>
    <li><label>上传封面图片</label><input name="v_thumb" type="file" /><img width='170' height="135" src="/addbbs/Application/Common/Public/<?php echo ($list["v_thumb"]); ?>" /></li>
    <li><label>视频连接</label><textarea name="v_label" cols="" rows="" class="textinput"><?php echo ($list["v_label"]); ?></textarea><i>你可以添加视频地址或者上传视频</i></li>

    <li><label>类别</label>
        <select name='cate_id' class="selected">
            <?php if(is_array($cate)): foreach($cate as $key=>$vo): ?><option value="<?php echo ($vo["cate_id"]); ?>" <?php if($list['cate_id']==$vo['cate_id']){echo 'selected';} ?>><?php echo ($vo["cate_name"]); ?></option><?php endforeach; endif; ?>
        </select>
     <i></i></li>

<li><label>上传视频</label><input name="v_path" type="file" /><i>你可以添加视频连接或者上传视频</i></li>
  <?php
 if($list['v_label']==''){ ?>
      <video width="320" height="260" controls="controls">

      <source src="/addbbs/Application/Common/Public/<?php echo ($list["v_path"]); ?>" type="video/mp4">

     </video>
<?php
 } ?>
    <li><label>&nbsp;</label><input name="" type="submit" class="btn" value="确认保存"/></li>
    </ul>
        </form>
    
    </div>


</body>

</html>

        </div>
</body>
</html>