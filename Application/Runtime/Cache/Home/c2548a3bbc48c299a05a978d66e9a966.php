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
   
        <div style='float: left; margin-top: 188; width: 86%'>
            
             

<input  type="radio" name="red" value="1" id="z" onclick="zhu(1)"/>柱图
<input  type="radio" name="red" value="2" id="y" checked="checked" onclick="zhu(2)"/>饼图



<canvas style="display:none" id="myChart" width="400" height="400"></canvas>
<canvas id="myChart1" width="400" height="400"></canvas>
<script src="/Application/Common/Chart.js-master/Chart.js"></script>
<script src="/Application/Common/jquery.js"></script>
<input type="text" value="<?php echo ($pv); ?>" id="pv">

<script>
function zhu(a){
    if(a==1){
        $("#myChart").show();
        $("#myChart1").hide();
    }else{
        $("#myChart").hide();
        $("#myChart1").show();
    }
}
         var data = {
            
                    labels : [<?php echo ($json); ?>],
                    datasets : [
                            {
                                    fillColor : "rgba(200,20,220,0.5)",
                                    strokeColor : "rgba(21,10,210,1)",
                                    data : [<?php echo ($pv); ?>]
                            }
                    ]
            } 

var ctx = document.getElementById("myChart").getContext("2d"); 
var myNewChart = new Chart(ctx).Bar(data);//new Chart(ctx).PolarArea(data);

p=$("#pv").val();
s=p.split(",")

    var data = [

                      {
		value:50,
		color:"#F38630"
	},

    	

	{
		value : 50,
		color : "#E0E4CC"
	},
	{
		value : 50,
		color : "#69D2E7"
	}			
];
var ctx = document.getElementById("myChart1").getContext("2d"); 
new Chart(ctx).Pie(data);
  
</script>


    





        </div>
</body>
</html>