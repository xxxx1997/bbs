<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BBS api 接口</title>
<meta name="generator" content="" />
<meta name="copyright" content="" />
<meta name="Author" content="BBS api 接口" />
<meta name="keywords" content="" />
<meta name="description" content="BBS api 接口" />
<link rel="stylesheet" type="text/css" href="/Application/Common/api/css/style.css" />
<style type="text/css">

</style>
</head>

<body>
<div class="main">
	<div class="header hide">BBS api 接口</div>
	<div class="content">
		<div class="title hide">管理登录</div>
		<div style='float:right'><span width='127' height='37'><a href="<?php echo U('api/registration');?>"><img src="/Application/Common/api/images/Registration.jpg" alt="" /></a></span></div>
		<form name="login" action="<?php echo U('api/login_do');?>" method="post">
			<fieldset>
				<div class="input">
					<input class="input_all name" name="username" id="name" placeholder="用户名" type="text" onFocus="this.className='input_all name_now';" onBlur="this.className='input_all name'" maxLength="24" />
				</div>
				<div class="input">
					<input class="input_all password" name="password" id="password" type="password" placeholder="密码" onFocus="this.className='input_all password_now';" onBlur="this.className='input_all password'" maxLength="24" />
				</div>
	
				<div class="enter">
					<input class="button hide" name="" type="submit" value="" />
				</div>
			</fieldset>
		</form>
	</div>
</div>
<script type="text/javascript" src="/Application/Common/api/js/placeholder.js"></script>
<!--[if IE 6]>
<script type="text/javascript" src="js/belatedpng.js" ></script>
<script type="text/javascript">
	DD_belatedPNG.fix("*");
</script>
<![endif]--></body>
</html>