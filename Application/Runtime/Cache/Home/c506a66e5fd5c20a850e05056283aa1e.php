<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>英雄四组</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<<<<<<< HEAD
<link href="/Application/Common/admin/css/style.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="/Application/Common/admin/js/jquery.js"></script>
<img src="/Application/Common/admin/images/c.jpg" alt="" width="100%" height="150"/>
=======
<link href="/two/Application/Common/admin/css/style.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="/two/Application/Common/admin/js/jquery.js"></script>
<img src="/two/Application/Common/admin/images/c.jpg" alt="" width="100%" height="150"/>
>>>>>>> 6599f6b847b396825cf87220a11cc29d4c42918c
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
<<<<<<< HEAD
    <span><img src="/Application/Common/admin/images/leftico01.png" /></span>培训课程
=======
    <span><img src="/two/Application/Common/admin/images/leftico01.png" /></span>培训课程
>>>>>>> 6599f6b847b396825cf87220a11cc29d4c42918c
    </div>
    	<ul class="menuson">
        <li <?php if($Think.ACTION_NAME=='course'){ echo "class='active'";} ?>><cite></cite><a href="<?php echo U('admin/course');?>" >课程管理</a><i></i></li>
       
        </ul>
    </dd>
     <dd>
    <div class="title">
<<<<<<< HEAD
    <span><img src="/Application/Common/admin/images/leftico01.png" /></span>文章管理
=======
    <span><img src="/two/Application/Common/admin/images/leftico01.png" /></span>文章管理
>>>>>>> 6599f6b847b396825cf87220a11cc29d4c42918c
    </div>
    	<ul class="menuson">
        <li <?php if($Think.ACTION_NAME=='article_list'){ echo "class='active'";} ?>><cite></cite><a href="<?php echo U('article/article_list');?>" >文章列表</a><i></i></li>
         <li <?php if($Think.ACTION_NAME=='class_list'){ echo "class='active'";} ?>><cite></cite><a href="<?php echo U('article/class_list');?>" >分类列表</a><i></i></li>
       
        </ul>
    </dd>
    
    <dd>
    <div class="title">
<<<<<<< HEAD
    <span><img src="/Application/Common/admin/images/leftico02.png" /></span>视频
=======
    <span><img src="/two/Application/Common/admin/images/leftico02.png" /></span>视频
>>>>>>> 6599f6b847b396825cf87220a11cc29d4c42918c
    </div>
    <ul class="menuson">
        <li <?php if($Think.ACTION_NAME=='video'){ echo "class='active'";} ?>><cite></cite><a href="<?php echo U('video/video_list');?>">列表</a><i></i></li>
            
       
        </ul>
    </dd> 
    
    
<<<<<<< HEAD
    <dd><div class="title"><span><img src="/Application/Common/admin/images/leftico01.png" /></span>师资力量</div>
=======
    <dd><div class="title"><span><img src="/two/Application/Common/admin/images/leftico01.png" /></span>师资力量</div>
>>>>>>> 6599f6b847b396825cf87220a11cc29d4c42918c
    <ul class="menuson">
        <li <?php if($Think.ACTION_NAME=='teacher_list'){ echo "class='active'";} ?>><cite></cite><a href="<?php echo U('teacher/teacher_list');?>">列表</a><i></i></li>

    </ul>   
    </dd>
            
            
            
<<<<<<< HEAD
        <dd><div class="title"><span><img src="/Application/Common/admin/images/leftico01.png" /></span>就业信息</div>
=======
        <dd><div class="title"><span><img src="/two/Application/Common/admin/images/leftico01.png" /></span>就业信息</div>
>>>>>>> 6599f6b847b396825cf87220a11cc29d4c42918c
    <ul class="menuson">
        <li <?php if($Think.ACTION_NAME=='jyjb'){ echo "class='active'";} ?>><cite></cite><a href="<?php echo U('admin/jyjb');?>">列表</a><i></i></li>

    </ul>
    </dd>
            
     
<<<<<<< HEAD
    <dd><div class="title"><span><img src="/Application/Common/admin/images/leftico01.png" /></span>常见问题</div>
=======
    <dd><div class="title"><span><img src="/two/Application/Common/admin/images/leftico01.png" /></span>常见问题</div>
>>>>>>> 6599f6b847b396825cf87220a11cc29d4c42918c
    <ul class="menuson">
        <li <?php if($Think.ACTION_NAME=='question'){ echo "class='active'";} ?>><cite></cite><a href="<?php echo U('admin/question');?>">列表</a><i></i></li>

    </ul>    
    </dd>
<<<<<<< HEAD
    <dd><div class="title"><span><img src="/Application/Common/admin/images/leftico01.png" /></span>导航管理</div>
=======
    <dd><div class="title"><span><img src="/two/Application/Common/admin/images/leftico01.png" /></span>导航管理</div>
>>>>>>> 6599f6b847b396825cf87220a11cc29d4c42918c
    <ul class="menuson">
        <li <?php if($Think.ACTION_NAME=='nav'){ echo "class='active'";} ?>><cite></cite><a href="<?php echo U('nav/nav_list');?>">列表</a><i></i></li>

    </ul>    
    </dd>
<<<<<<< HEAD
       <dd><div class="title"><span><img src="/Application/Common/admin/images/leftico01.png" /></span>系统管理</div>
=======
       <dd><div class="title"><span><img src="/two/Application/Common/admin/images/leftico01.png" /></span>系统管理</div>
>>>>>>> 6599f6b847b396825cf87220a11cc29d4c42918c
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
<title>无标题文档</title>
<<<<<<< HEAD
<link href="/Application/Common/admin/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/Application/Common/admin/js/jquery.js"></script>
=======
<link href="/two/Application/Common/admin/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/two/Application/Common/admin/js/jquery.js"></script>
>>>>>>> 6599f6b847b396825cf87220a11cc29d4c42918c

</head>


<body>

	<div class="place">
    <span>位置：</span>
    <ul class="placeul">
    <li><a href="#">首页</a></li>
    </ul>
    </div>
    
    <div class="mainindex">
    
    
    <div class="welinfo">
<<<<<<< HEAD
    <span><img src="/Application/Common/admin/images/sun.png" alt="天气" /></span>
=======
    <span><img src="/two/Application/Common/admin/images/sun.png" alt="天气" /></span>
>>>>>>> 6599f6b847b396825cf87220a11cc29d4c42918c
    <b>Admin早上好，欢迎使用信息管理系统</b>(admin@uimaker.com)
    <a href="#">帐号设置</a>
    </div>
    
    <div class="welinfo">
<<<<<<< HEAD
    <span><img src="/Application/Common/admin/images/time.png" alt="时间" /></span>
=======
    <span><img src="/two/Application/Common/admin/images/time.png" alt="时间" /></span>
>>>>>>> 6599f6b847b396825cf87220a11cc29d4c42918c
    <i>您上次登录的时间：2013-10-09 15:22</i> （不是您登录的？<a href="#">请点这里</a>）
    </div>
    
    <div class="xline"></div>
    
    <ul class="iconlist">
    
<<<<<<< HEAD
    <li><img src="/Application/Common/admin/images/ico01.png" /><p><a href="#">管理设置</a></p></li>
    <li><img src="/Application/Common/admin/images/ico02.png" /><p><a href="#">发布文章</a></p></li>
    <li><img src="/Application/Common/admin/images/ico03.png" /><p><a href="#">数据统计</a></p></li>
    <li><img src="/Application/Common/admin/images/ico04.png" /><p><a href="#">文件上传</a></p></li>
    <li><img src="/Application/Common/admin/images/ico05.png" /><p><a href="#">目录管理</a></p></li>
    <li><img src="/Application/Common/admin/images/ico06.png" /><p><a href="#">查询</a></p></li> 
            
    </ul>
    
    <div class="ibox"><a class="ibtn"><img src="/Application/Common/admin/images/iadd.png" />添加新的快捷功能</a></div>
=======
    <li><img src="/two/Application/Common/admin/images/ico01.png" /><p><a href="#">管理设置</a></p></li>
    <li><img src="/two/Application/Common/admin/images/ico02.png" /><p><a href="#">发布文章</a></p></li>
    <li><img src="/two/Application/Common/admin/images/ico03.png" /><p><a href="#">数据统计</a></p></li>
    <li><img src="/two/Application/Common/admin/images/ico04.png" /><p><a href="#">文件上传</a></p></li>
    <li><img src="/two/Application/Common/admin/images/ico05.png" /><p><a href="#">目录管理</a></p></li>
    <li><img src="/two/Application/Common/admin/images/ico06.png" /><p><a href="#">查询</a></p></li> 
            
    </ul>
    
    <div class="ibox"><a class="ibtn"><img src="/two/Application/Common/admin/images/iadd.png" />添加新的快捷功能</a></div>
>>>>>>> 6599f6b847b396825cf87220a11cc29d4c42918c
    
    <div class="xline"></div>
    <div class="box"></div>
    
    <div class="welinfo">
<<<<<<< HEAD
    <span><img src="/Application/Common/admin/images/dp.png" alt="提醒" /></span>
=======
    <span><img src="/two/Application/Common/admin/images/dp.png" alt="提醒" /></span>
>>>>>>> 6599f6b847b396825cf87220a11cc29d4c42918c
    <b>Uimaker信息管理系统使用指南</b>
    </div>
    
    <ul class="infolist">
    <li><span>您可以快速进行文章发布管理操作</span><a class="ibtn">发布或管理文章</a></li>
    <li><span>您可以快速发布产品</span><a class="ibtn">发布或管理产品</a></li>
    <li><span>您可以进行密码修改、账户设置等操作</span><a class="ibtn">账户管理</a></li>
    </ul>
    
    <div class="xline"></div>
    
    <div class="uimakerinfo"><b>查看Uimaker网站使用指南，您可以了解到多种风格的B/S后台管理界面,软件界面设计，图标设计，手机界面等相关信息。来源：<a href="http://www.mycodes.net/" target="_blank">源码之家</a></b></div>
    
    <ul class="umlist">
    <li><a href="#">如何发布文章</a></li>
    <li><a href="#">如何访问网站</a></li>
    <li><a href="#">如何管理广告</a></li>
    <li><a href="#">后台用户设置(权限)</a></li>
    <li><a href="#">系统设置</a></li>
    </ul>
    
    
    </div>
    
    

</body>

</html>

        </div>
</body>
</html>