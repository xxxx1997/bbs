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
            <dd><div class="title"><span><img src="/Application/Common/admin/images/leftico01.png" /></span>API</div>
    <ul class="menuson">
        <li <?php if($Think.ACTION_NAME=='rec'){ echo "class='active'";} ?>><cite></cite><a href="<?php echo U('api/user');?>">用户列表</a><i></i></li>
         <li <?php if($Think.ACTION_NAME=='rec'){ echo "class='active'";} ?>><cite></cite><a href="<?php echo U('api/url');?>">接口列表</a><i></i></li>
          <li <?php if($Think.ACTION_NAME=='rec'){ echo "class='active'";} ?>><cite></cite><a href="<?php echo U('api/user_url');?>">用户接口列表</a><i></i></li>
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
<link href="/Application/Common/admin/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/Application/Common/admin/js/jquery.js"></script>

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
            <li class="click"><a href="<?php echo U('teacher/add');?>"><span><img src="/Application/Common/admin/images/t01.png" /></span>添加</a></li>
        <li class="click"><span><img src="/Application/Common/admin/images/t02.png" /></span>修改</li>
        <li><span><img src="/Application/Common/admin/images/t03.png" /></span>删除</li>
        <li><span><img src="/Application/Common/admin/images/t04.png" /></span>统计</li>
        </ul>
        
        
        <ul class="toolbar1">
        <li><span><img src="/Application/Common/admin/images/t05.png" /></span>设置</li>
        </ul>
    
    </div>
    
    
    <table class="tablelist">
    	<thead>
    	<tr>
        <th><input name="" type="checkbox" value="" checked="checked"/></th>
        <th>编号<i class="sort"><img src="/Application/Common/admin/images/px.gif" /></i></th>
        <th>姓名</th>
        <th>key</th>
        <th>状态</th>
        <th>time</th>
          
        <th>操作</th>
        </tr>
        </thead>
        <tbody>
            <?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr id='tr<?php echo ($vo["id"]); ?>'>
        <td><input name="" type="checkbox" value="" /></td>
        <td><?php echo ($vo["id"]); ?></td>
        <td><?php echo ($vo["username"]); ?></td>
       <td><?php echo ($vo["k"]); ?></td>
       <td><?php
 if($vo['state']==1){ ?>
                <a href="/Home/Api/user_apply?state=0&id=<?php echo ($vo["id"]); ?>" >审核通过</a>
                <?php
 }else{ ?>
                <a href="/Home/Api/user_apply?state=1&id=<?php echo ($vo["id"]); ?>">未审核</a>
                <?php
 } ?>
            </td>
       <script>
           function apply(state,id){
               //alert(id)
               $.ajax({
                    url:"<?php echo U('api/user_apply');?>",
                    type:'post',
                    dataType:'json',
                    data:'state='+state+"&id="+id,
                    success:function(e){
                        if(e){
                            str='';
                            for(a in e){
                                str+="";
                            }
                        }
                    }
                })
           }
       </script>
        <td><?php echo date('Y-m-d H:i:s',$vo['time']) ?></td>
              
        <td><a href="<?php echo U('teacher/see',array('t_id'=>$vo['t_id']));?>" class="tablelink">查看</a>     <a href="#" onclick="del('<?php echo ($vo["t_id"]); ?>')" class="tablelink"> 删除</a></td>
        </tr><?php endforeach; endif; ?> 
        </tbody>
    </table>
        <script>
            function del(id){

                if(confirm('确认删除么?')){
                    $.ajax({
                        type: "POST",
                        url: "<?php echo U('teacher/del');?>",
                        data: "id="+id,
                        success: function(msg){ 
                          if(msg){
                              $("#tr"+id).remove()
                          }else{
                              alert('删除失败');
                          }
                        }
                     }); 
                }
            }
        </script>
   
    <div class="pagin">
    	<div class="message"><?php echo ($page); ?></div>

            
        
    </div>
    
    
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