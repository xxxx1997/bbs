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
<title>无标题文档</title>


<script type="text/javascript">
$(document).ready(function(){
  $(".click").click(function(){
  $(".tip").fadeIn(200);
  });
  
  $(".tiptop a").click(function(){
  $(".tip").fadeOut(200);
});

  $(".sure").click(function(){
  $(".tip").fadeOut(100);
});

  $(".cancel").click(function(){
  $(".tip").fadeOut(100);
});

});
</script>


</head>


<body>

	<div class="place">
    <span>位置：</span>
    <ul class="placeul">
    <li><a href="#">首页</a></li>
    <li><a href="#">数据表</a></li>
    <li><a href="#">基本内容</a></li>
    </ul>
    </div>
    
    <div class="rightinfo">
    
    <div class="tools">
    
    	<ul class="toolbar">
            <li class="click"><a href="<?php echo U('admin/add_course');?>"><span><img src="/addbbs/Application/Common/admin/images/t01.png" /></span>添加</a></li>
        <li class="click"><span><img src="/addbbs/Application/Common/admin/images/t02.png" /></span>修改</li>
        <li><span><img src="/addbbs/Application/Common/admin/images/t03.png" /></span>删除</li>
        <li><span><img src="/addbbs/Application/Common/admin/images/t04.png" /></span>统计</li>
        </ul>
        
        
        <ul class="toolbar1">
        <li><span><img src="/addbbs/Application/Common/admin/images/t05.png" /></span>设置</li>
        </ul>
    
    </div>
 
                      
   
    <table class="tablelist">
        
    	<thead>
    	<tr>
        <th><input name="" type="checkbox" value="" checked="checked"/></th>
        <th>编号<i class="sort"><img src="/addbbs/Application/Common/admin/images/px.gif" /></i></th>
        <th>标题</th>
        <th>用户</th>
        <th>籍贯</th>
        <th>发布时间</th>
        <th>是否审核</th>
        <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <tr>
        <td><input name="" type="checkbox" value="" /></td>
        <td>20130908</td>
        <td>12312的撒萨达四大四大</td>
        <td>admin</td>
        <td>江苏南京</td>
        <td>2013-09-09 15:05</td>
        <td>已审核</td>
        <td><a href="#" class="tablelink">查看</a>     <a href="#" class="tablelink"> 删除</a></td>
        </tr> 
        
        <tr>
        <td><input name="" type="checkbox" value="" /></td>
        <td>20130907</td>
        <td>温州19名小学生中毒流鼻血续：周边部分企业关停</td>
        <td>uimaker</td>
        <td>山东济南</td>
        <td>2013-09-08 14:02</td>
        <td>未审核</td>
        <td><a href="#" class="tablelink">查看</a>     <a href="#" class="tablelink">删除</a></td>
        </tr>
        
        <tr>
        <td><input name="" type="checkbox" value="" /></td>
        <td>20130906</td>
        <td>社科院:电子商务促进了农村经济结构和社会转型</td>
        <td>user</td>
        <td>江苏无锡</td>
        <td>2013-09-07 13:16</td>
        <td>未审核</td>
        <td><a href="#" class="tablelink">查看</a>     <a href="#" class="tablelink">删除</a></td>
        </tr>
        
        <tr>
        <td><input name="" type="checkbox" value="" /></td>
        <td>20130905</td>
        <td>江西&quot;局长违规建豪宅&quot;：局长检讨</td>
        <td>admin</td>
        <td>北京市</td>
        <td>2013-09-06 10:36</td>
        <td>已审核</td>
        <td><a href="#" class="tablelink">查看</a>     <a href="#" class="tablelink">删除</a></td>
        </tr>
        
        <tr>
        <td><input name="" type="checkbox" value="" /></td>
        <td>20130904</td>
        <td>中国2020年或迈入高收入国家行列</td>
        <td>uimaker</td>
        <td>江苏南京</td>
        <td>2013-09-05 13:25</td>
        <td>已审核</td>
        <td><a href="#" class="tablelink">查看</a>     <a href="#" class="tablelink">删除</a></td>
        </tr>
        
        <tr>
        <td><input name="" type="checkbox" value="" /></td>
        <td>20130903</td>
        <td>深圳地铁车门因乘客拉闸打开 3人被挤入隧道</td>
        <td>user</td>
        <td>广东深圳</td>
        <td>2013-09-04 12:00</td>
        <td>已审核</td>
        <td><a href="#" class="tablelink">查看</a>     <a href="#" class="tablelink">删除</a></td>
        </tr>
        
        <tr>
        <td><input name="" type="checkbox" value="" /></td>
        <td>20130902</td>
        <td>33次地表塌陷 村民不敢下地劳作(图)</td>
        <td>admin</td>
        <td>湖南长沙</td>
        <td>2013-09-03 00:05</td>
        <td>未审核</td>
        <td><a href="#" class="tablelink">查看</a>     <a href="#" class="tablelink">删除</a></td>
        </tr>
        
        <tr>
        <td><input name="" type="checkbox" value="" /></td>
        <td>20130901</td>
        <td>医患关系：医生在替改革不彻底背黑锅</td>
        <td>admin</td>
        <td>江苏南京</td>
        <td>2013-09-02 15:05</td>
        <td>未审核</td>
        <td><a href="#" class="tablelink">查看</a>     <a href="#" class="tablelink">删除</a></td>
        </tr>
        
        <tr>
        <td><input name="" type="checkbox" value="" /></td>
        <td>20130900</td>
        <td>山东章丘公车进饭店景点将自动向监控系统报警</td>
        <td>uimaker</td>
        <td>山东滨州</td>
        <td>2013-09-01 10:26</td>
        <td>已审核</td>
        <td><a href="#" class="tablelink">查看</a>     <a href="#" class="tablelink">删除</a></td>
        </tr>        
        </tbody>
    </table>
    
   
    <div class="pagin">
    	<div class="message">共<i class="blue">1256</i>条记录，当前显示第&nbsp;<i class="blue">2&nbsp;</i>页</div>
        <ul class="paginList">
        <li class="paginItem"><a href="javascript:;"><span class="pagepre"></span></a></li>
        <li class="paginItem"><a href="javascript:;">1</a></li>
        <li class="paginItem current"><a href="javascript:;">2</a></li>
        <li class="paginItem"><a href="javascript:;">3</a></li>
        <li class="paginItem"><a href="javascript:;">4</a></li>
        <li class="paginItem"><a href="javascript:;">5</a></li>
        <li class="paginItem more"><a href="javascript:;">...</a></li>
        <li class="paginItem"><a href="javascript:;">10</a></li>
        <li class="paginItem"><a href="javascript:;"><span class="pagenxt"></span></a></li>
        </ul>
    </div>
    
    
    <div class="tip">
    	<div class="tiptop"><span>提示信息</span><a></a></div>
        
      <div class="tipinfo">
        <span><img src="/addbbs/Application/Common/admin/images/ticon.png" /></span>
        <div class="tipright">
        <p>是否确认对信息的修改 ？</p>
        <cite>如果是请点击确定按钮 ，否则请点取消。</cite>
        </div>
        </div>
        
        <div class="tipbtn">
        <input name="" type="button"  class="sure" value="确定" />&nbsp;
        <input name="" type="button"  class="cancel" value="取消" />
        </div>
    
    </div>
    
    
    
    
    </div>
    
    <script type="text/javascript">
	$('.tablelist tbody tr:odd').addClass('odd');
	</script>

</body>

</html>

        </div>
</body>
</html>