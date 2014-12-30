<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>英雄四组</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="/Application/Common/admin/css/style.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="/Application/Common/admin/js/jquery.js"></script>
<img src="/Application/Common/admin/images/c.jpg" alt="" width="100%" height="150"/>
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
    <span><img src="/Application/Common/admin/images/leftico01.png" /></span>培训课程
    </div>
    	<ul class="menuson">
        <li <?php if($Think.ACTION_NAME=='course'){ echo "class='active'";} ?>><cite></cite><a href="<?php echo U('admin/course');?>" >课程管理</a><i></i></li>
       
        </ul>
    </dd>
     <dd>
    <div class="title">
    <span><img src="/Application/Common/admin/images/leftico01.png" /></span>文章管理
    </div>
    	<ul class="menuson">
        <li <?php if($Think.ACTION_NAME=='article_list'){ echo "class='active'";} ?>><cite></cite><a href="<?php echo U('article/article_list');?>" >文章列表</a><i></i></li>
         <li <?php if($Think.ACTION_NAME=='class_list'){ echo "class='active'";} ?>><cite></cite><a href="<?php echo U('article/class_list');?>" >分类列表</a><i></i></li>
       
        </ul>
    </dd>
    
    <dd>
    <div class="title">
    <span><img src="/Application/Common/admin/images/leftico02.png" /></span>视频
    </div>
    <ul class="menuson">
        <li <?php if($Think.ACTION_NAME=='video'){ echo "class='active'";} ?>><cite></cite><a href="<?php echo U('video/video_list');?>">列表</a><i></i></li>
            
       
        </ul>
    </dd> 
    
    
    <dd><div class="title"><span><img src="/Application/Common/admin/images/leftico01.png" /></span>师资力量</div>
    <ul class="menuson">
        <li <?php if($Think.ACTION_NAME=='teacher_list'){ echo "class='active'";} ?>><cite></cite><a href="<?php echo U('teacher/teacher_list');?>">列表</a><i></i></li>

    </ul>   
    </dd>
            
            
            
        <dd><div class="title"><span><img src="/Application/Common/admin/images/leftico01.png" /></span>就业信息</div>
    <ul class="menuson">
        <li <?php if($Think.ACTION_NAME=='jyjb'){ echo "class='active'";} ?>><cite></cite><a href="<?php echo U('jyjb/index');?>">列表</a><i></i></li>

    </ul>
    </dd>
            
     
    <dd><div class="title"><span><img src="/Application/Common/admin/images/leftico01.png" /></span>常见问题</div>
    <ul class="menuson">
        <li <?php if($Think.ACTION_NAME=='question'){ echo "class='active'";} ?>><cite></cite><a href="<?php echo U('question/question');?>">列表</a><i></i></li>

    </ul>    
    </dd>
    <dd><div class="title"><span><img src="/Application/Common/admin/images/leftico01.png" /></span>导航管理</div>
    <ul class="menuson">
        <li <?php if($Think.ACTION_NAME=='nav'){ echo "class='active'";} ?>><cite></cite><a href="<?php echo U('nav/nav_list');?>">列表</a><i></i></li>

    </ul>    
    </dd>
	  <dd><div class="title"><span><img src="/Application/Common/admin/images/leftico01.png" /></span>企业招聘</div>
    <ul class="menuson">
        <li <?php if($Think.ACTION_NAME=='rec'){ echo "class='active'";} ?>><cite></cite><a href="<?php echo U('rec/rec_list');?>">列表</a><i></i></li>
    </ul>    
    </dd>
       <dd><div class="title"><span><img src="/Application/Common/admin/images/leftico01.png" /></span>系统管理</div>
    <ul class="menuson">
        <li><cite></cite><a href="<?php echo U('pv/pv');?>">统计</a><i></i></li>
         <li <?php if($Think.ACTION_NAME=='aa'){ echo "class='active'";} ?>><cite></cite><a href="right.html" target="rightFrame">数据列表</a><i></i></li>
        <li><cite></cite><a href="<?php echo U('game/game');?>" target="rightFrame">娱乐</a><i></i></li>
        <li><cite></cite><a href="filelist.html" target="rightFrame">信息管理</a><i></i></li>
        <li><cite></cite><a href="tab.html" target="rightFrame">Tab页</a><i></i></li>
        <li><cite></cite><a href="error.html" target="rightFrame">404页面</a><i></i></li>

    </ul>    
    </dd>
    </dl>
   
        <div style='float: left; margin-top: 188; width: 85%'>
            
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
<<<<<<< HEAD
            <li><a href="<?php echo U('admin/add_course');?>"><span><img src="/Application/Common/admin/images/t01.png" /></span>添加</a></li>
        <li class="click"><span><img src="/Application/Common/admin/images/t02.png" /></span>修改</li>
        <li><span><img src="/Application/Common/admin/images/t03.png" /></span>删除</li>
        <li><span><img src="/Application/Common/admin/images/t04.png" /></span>统计</li>
=======
            <li><a href="<?php echo U('admin/add_course');?>"><span><img src="/addbbs/Application/Common/admin/images/t01.png" /></span>添加</a></li>
        <li class="click"><span><img src="/addbbs/Application/Common/admin/images/t02.png" /></span>修改</li>
        <li><span><img src="/addbbs/Application/Common/admin/images/t03.png" /></span>删除</li>
        <li><span><img src="/addbbs/Application/Common/admin/images/t04.png" /></span>统计</li>
>>>>>>> 6eb127d491f373a15c07f467ace829fd08ebf610
        </ul>
        
        
        <ul class="toolbar1">
        <li><span><img src="/Application/Common/admin/images/t05.png" /></span>设置</li>
        </ul>
    
    </div>
 
                      
   
    <table class="tablelist">
        
    	<thead>
    	<tr>
            <th>编号</th>
        <th>开班名称</th>
        <th>发布时间</th>
        <th>开班类型</th>
        <th>是否开班</th>
        <th>操作</th>
        </tr>
        </thead>
        <tbody>
            <?php if(is_array($list)): foreach($list as $key=>$it): ?><tr id="tr<?php echo ($it["id"]); ?>">
        <td><?php echo ($it["id"]); ?></td>
        <td><?php echo ($it["class_title"]); ?></td>
        <td><?php echo ($it["start_time"]); ?></td>
        <td><?php  if($it['class_type']==1){ echo "php基础班"; }else if($it['class_type']==2){ echo "php就业班"; }else{ echo "php远程班"; }?></td>
        <td><?php if($it['class_state']==1){ echo "预约报名"; }else{ echo "<font color='blue'>爆满已开班</font>"; }?></td>
        <td><a href="/addbbs/Home/Admin/sel?id=<?php echo ($it["id"]); ?>" class="tablelink">查看</a>     <a href="#" class="tablelink" onclick="del('<?php echo ($it["id"]); ?>')"> 删除</a></td>
        </tr><?php endforeach; endif; ?>
        </tbody>
    </table>
    
   
    <div class="pagin">
    	<div class="message">共<i class="blue"><?php echo ($count); ?></i>条记录，当前显示第&nbsp;<i class="blue">2&nbsp;</i>页</div>
       
    </div>
        <script>
            function del(id){
                //alert(id);
                //return false;
                if(confirm('确认删除么?')){
                    $.ajax({
                        type: "POST",
                        url: "/addbbs/Home/Admin/del",
                        data: "id="+id,
                        success: function(msg){ 
                          if(msg==1){
                              $("#tr"+id).remove()
                          }else{
                              alert('删除失败');
                          }
                        }
                     }); 
                }
            }
        </script>
    
    
    <div class="tip">
    	<div class="tiptop"><span>提示信息</span><a></a></div>
        
      <div class="tipinfo">
        <span><img src="/Application/Common/admin/images/ticon.png" /></span>
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