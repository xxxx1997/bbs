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
            
             
<style>

.aa { width: 800; height: 390px }
</style>
<script type="text/javascript" src="http://sandbox.runjs.cn/uploads/rs/146/73fi1rab/amcharts.js"></script>

<script type="text/javascript" src="/Application/Common/admin/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/Application/Common/admin/js/highcharts.js"></script>
<script type="text/javascript" src="/Application/Common/admin/js/exporting.js"></script>


<canvas style="display:none" id="myChart" width="400" height="400"></canvas>

<div class='aa'  width=800; height=400; id="chartdiv"></div>

<script src="/Application/Common/Chart.js-master/Chart.js"></script>
<script src="/Application/Common/jquery.js"></script>
<input type="hidden" value="<?php echo ($chardata); ?>" id="pv">

<script>
function zhu(a){
    if(a==1){
        $("#myChart").show();
        $("#chartdiv").hide();
    }else{
        $("#myChart").hide();
        $("#chartdiv").show();
    }
}
         var data = {
            
                    labels : [<?php echo ($json); ?>],
                    datasets : [
                            {
                                    fillColor : "rgba(200,20,220,10.5)",
                                    strokeColor : "rgba(21,10,210,1)",
                                    data : [<?php echo ($pv); ?>]
                            }
                    ]
            } 

var ctx = document.getElementById("myChart").getContext("2d"); 
var myNewChart = new Chart(ctx).Bar(data);//new Chart(ctx).PolarArea(data);

p=$("#pv").val();
s=p.split(",")

var chart;
var legend;
var chartData = [<?php echo ($chardata); ?>];
AmCharts.ready(function() {
    // 饼图
    chart = new AmCharts.AmPieChart();
    chart.dataProvider = chartData;
    chart.titleField = "country";
    chart.valueField = "value";
    chart.outlineColor = "";
    chart.outlineAlpha = 0.8;
    chart.outlineThickness = 2;
    // 3D
    chart.depth3D = 20;
    chart.angle = 30;
    // 图形写入
    chart.write("chartdiv");
});


</script>
<br/>

    

<input  type="radio" name="red" value="1" id="z" onclick="zhu(1)"/>柱图
<input  type="radio" name="red" value="2" id="y" checked="checked" onclick="zhu(2)"/>饼图



        </div>
</body>
</html>