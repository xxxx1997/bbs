<?php if (!defined('THINK_PATH')) exit();?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "/www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="/www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="keywords" content="php培训,php教程,php视频,php下载,php视频教程" />
<meta name="description" content="php培训的龙头老大,口碑最好的php培训机构,进来看看同学们的呐喊，就会知道我们是个怎么样的学校,问天下php培训机构谁与争锋?php培训课程内容包含目前最流行的zendframework、thinkphp框架、ECShop、dedecms等产品的二次开发" />
<title>英雄四组</title>
<link href="http://php.itcast.cn/style/css.css" type="text/css" rel="stylesheet" />
<link href="http://php.itcast.cn/style/nav/nav_main.css" type="text/css" rel="stylesheet" />
<link href="http://php.itcast.cn/style/image/imageswitch.css" type="text/css" rel="stylesheet" />
<link href="http://php.itcast.cn/style/webim.css" type="text/css" rel="stylesheet" />
<link type="image/x-icon" rel="shortcut icon" href="http://php.itcast.cn/favicon.ico" /> 
<script type="text/javascript" src="http://php.itcast.cn/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="http://php.itcast.cn/js/imageschange.js"></script>
<script type="text/javascript" id="bdshare_js" data="type=tools" ></script>
<script type="text/javascript" id="bdshell_js"></script>
</head>

<body>	
	<div id="header">
	<!-- 页面顶部 -->
<div class="top1">
	<p class="fl" style="background:url(/images/hot.png) 107px 10px no-repeat; padding-right:35px;"><span class="blue">专业的IT培训机构！</span></p>
	<p class="fr"><a href="http://www.itcast.cn/channel/job.shtml" target="_blank">就业宣言</a><a href="http://www.itcast.cn/channel/flow.shtml" target="_blank">报名流程</a><a href="http://open.itcast.cn" target="_blank">免费公开课</a><a href="http://dvd.itcast.cn" target="_blank">免费学习光盘</a><a href="http://www.itcast.cn/channel/book.shtml" target="_blank">原创教材</a><a href="http://bbs.itcast.cn/zine.php" target="_blank">传智特刊</a><a target="_blank" href="http://www.itcast.cn/channel/personnel.shtml">人才服务</a><a href="http://bbs.itcast.cn" target="_blank">技术论坛</a></p>
</div>

	<div class="clear"></div>
	<div class="top2">
		<h1 class="fl"><a href="http://www.itcast.cn"><img src="/Application/Common/index/images/logo.png" alt="传智播客php培训学院" border="0"  class="png"/></a></h1>
		<div class="fl toubu">
		<div class="toubu-font1">PHP学院</div>
			 <!-- 校区 -->
<p><a href="http://www.itcast.cn" target="_blank">北京校区</a></p>
<p><a target="_blank" href="http://sh.itcast.cn">上海校区</a></p>
<p><a href="http://gz.itcast.cn" target="_blank">广州校区</a></p><br />
<p><a target="_blank" href="http://wh.itcast.cn">武汉校区</a></p>
<p><a href="http://cd.itcast.cn" target="_blank">成都校区</a></p>
<p><a href="http://zz.itcast.cn" target="_blank">郑州校区</a></p><br />
<p><a href="http://xa.itcast.cn" target="_blank">西安校区</a></p>
<!-- 校区 --> 
		</div>
		<p class="fr"><img src="http://php.itcast.cn/images/topword.gif" alt="改变中国教育，我们正在行动..." class="png"/></p>
	</div>
	<div class="clear"></div>
	<ul id="nav">
	<?php foreach($a as $k=>$v){ ?>

	<li><a href="<?php echo U($v['n_url']) ?>" ><?php echo $v['n_name']?></a></li>
	 
   <?php }?>
	</ul>

	</div>
<!--输出-->
 
<div id="box">
  <div id="left" class="fl"  style="margin-top:3px; overflow:hidden;">
    <div class="clear"></div>
    <div><img src="/Application/Common/index/images/lefttop.gif"/></div>
    <div class="left_content3">
<a href="http://dvd.itcast.cn/?php" target="_blank"><font color="red"><h4>下载网速不给力，来申请免费PHP学习光盘吧！全新2014版JAVA/.NET/PHP/网页平面UI设计/iOS入门必备教程光盘免费申领中！</h4></font></a>
      <div class="zhanshi">
        <h4 class="videotitle"><span class="fl">PHP视频下载(如果视频无法下载，请联系QQ:2449444817)</span></h4>
		<div class="blueline1">
<div class="blueline1">
    <?php if(is_array($info)): foreach($info as $key=>$it): ?><table bgcolor="#e2f1f8" border="0" cellpadding="0" cellspacing="1" class="videodown" width="100%">
<tbody>
	<tr>
	<td bgcolor="#ffffff" class="downpic" rowspan="2" width="106"><img alt="" height="71" src="/Application/Common/Public/<?php echo ($it["v_thumb"]); ?>" width="96" /></td>
	<td bgcolor="#ffffff" width="272">
	<div class="jiaochengmz"><a href="<?php echo U('Video/details',array('v_id'=>$it['v_id']));?>"><?php echo ($it["v_name"]); ?></a></div>
	</td>
	<td align="right" bgcolor="#ffffff" width="215"><a href="http://www.itcast.cn/news/20120913/18063829105.shtml"><img border="0" height="26" src="/Application/Common/index/images/download.jpg" width="56" /></a></td>
	</tr>
	<tr>
	<td bgcolor="#ffffff">
	<div class="jianshi">主讲：<?php echo ($it["v_author"]); ?> <span class="blue"><?php echo ($it["cate_name"]); ?> </span></div>
        </td>
        <td align="right" bgcolor="#ffffff">
	<div class="bdshare_t bds_tools get-codes-bdshare" id="bdshare">
          <span class="bds_more">分享到：</span>
        <a class="bds_qzone" title="分享到QQ空间" href="#"></a>
        <a class="bds_tsina" title="分享到新浪微博" href="#"></a>
        <a class="bds_tqq" title="分享到腾讯微博" href="#"></a>
        <a class="bds_renren" title="分享到人人网" href="#"></a>
        <a class="shareCount" href="#" title="累计分享755次">755</a>  
        </div>
	</td>
	<td align="right" bgcolor="#ffffff">
	<div class="bdshare_t bds_tools get-codes-bdshare" id="bdshare"></div>
	</td>
	</tr>
</tbody>
</table><?php endforeach; endif; ?>


</div>
<br />

        </div>
      </div>
    </div>
    <div><img src="/Application/Common/index/images/leftbottom.gif"/></div>
    <div></div>
  </div>
  <div id="right" class="fl">
    <h4 class="righttitle1 zhaopin"><span class="blue">常见</span>问题</h4>
    <div class="rightkuang1">
      <ul class="zhaopinlist wenti">
        <!--<ul>
<li><a href="#">正辰科技招聘Java工程师 </a></li>
<li><a href="#">伟鹏科技招聘动画工程师 </a></li>
<li><a href="#">正辰科技招聘网页设计师</a></li>
<li><a href="#">伟鹏科技招聘动画工程师</a></li>
<li><a href="#">正辰科技招聘Java工程师 </a></li>
<li><a href="#">伟鹏科技招聘动画工程师 </a></li>
<li><a href="#">伟鹏科技招聘动画工程师 </a></li>
</ul>-->
<ul class="zhaopinlist wenti">
<?php if(is_array($arr)): foreach($arr as $key=>$it): ?><li><a href="<?php echo U('Question/answer',array('id'=>$it['p_id']));?>" target="_blank"><?php echo ($it["p_title"]); ?></a></li><?php endforeach; endif; ?>
</ul>

      </ul>
      <div class="clear"></div>
     
    </div>
    <div class="rightbottom"><img src="/Application/Common/index/images/bottom1.gif"/></div>
    <h4 class="righttitle1 zhaopin"><span class="blue">工具</span>下载</h4>
         <div class="rightkuang1">
		  	<div style="width:275px; height:100px;">
<p class="download" style="width:85px; height:100px; float:left;"><a href="http://player.qq.com/" target="_blank"><img alt="QQ影音" src="http://www.itcast.cn/files/image/201308/20130801111312850.jpg" style="width: 74px; height: 75px;" /><br />
QQ影音</a></p>
<p class="download" style="width:85px; height:100px; float:left;"><a href="http://www.emule.org.cn/download/" target="_blank"><img alt="电驴" src="/images/dianlv.jpg" /><br />
电驴</a></p>
<p class="download" style="width:85px; height:100px; float:left;"><a href="http://dl.xunlei.com/" target="_blank"><img alt="迅雷" src="/images/tengxun.jpg" /><br />
迅雷</a></p>
</div>

		 </div>
   
    
    <h4 class="righttitle1 zhaopin"><span class="blue">最新</span>企业招聘</h4>
    <div class="rightkuang1">
      <p class="cent"> <img src="/Application/Common/Public/Images/2014-12-18/select.jpg"  width="256" height="66"/></p>
       <table border="0" cellpadding="0" cellspacing="0" class="zhaopinlist" height="124" style="margin-top: 5px" width="98%">
<tbody>
	<tr>
	<td class="td1" width="73%"><a href="http://www.itcast.cn/news/20141215/14223392440.shtml" target="_blank">中科软科技股份公司招聘</a></td>
	<td width="11%">若干</td>
	<td width="16%">12.12</td>
	</tr>
	<tr>
	<td class="td1" width="73%"><a href="http://www.itcast.cn/news/20141215/14353014587.shtml" target="_blank">北京智胜终端互联市场招聘</a></td>
	<td width="11%">若干</td>
	<td width="16%">12.12</td>
	</tr>
	<tr>
	<td class="td1" width="73%"><a href="http://www.itcast.cn/news/20141215/14410738814.shtml" target="_blank">北京因脉科技有限公司招聘</a></td>
	<td width="11%">若干</td>
	<td width="16%">12.12</td>
	</tr>
	<tr>
	<td class="td1" width="73%"><a href="http://www.itcast.cn/news/20141215/1442323039.shtml" target="_blank">深圳一路捞互联网公司招聘</a></td>
	<td width="11%">若干</td>
	<td width="16%">12.12</td>
	</tr>
	<tr>
	<td class="td1" width="73%"><a href="http://www.itcast.cn/news/20141215/14442192258.shtml" target="_blank">北京创信软通科技公司招牌</a></td>
	<td width="11%">若干</td>
	<td width="16%">12.12</td>
	</tr>
	<tr>
	<td class="td1" width="73%"><a href="http://www.itcast.cn/news/20141215/14491633920.shtml" target="_blank">北京四汇奥思科技公司招聘</a></td>
	<td width="11%">若干</td>
	<td width="16%">12.12</td>
	</tr>
	<tr>
	<td class="td1" width="73%"><a href="http://www.itcast.cn/news/20141215/14552676212.shtml" target="_blank">时趣Social Touch公司招聘</a></td>
	<td width="11%">若干</td>
	<td width="16%">12.12</td>
	</tr>
	<tr>
	<td class="td1" width="73%"><a href="http://www.itcast.cn/news/20141215/15014353245.shtml" target="_blank">北京瑞友科技股份公司招聘</a></td>
	<td width="11%">若干</td>
	<td width="16%">12.12</td>
	</tr>
	<tr>
	<td class="td1" width="73%"><a href="http://www.itcast.cn/news/20141215/15024358385.shtml" target="_blank">北京软通科技有限公司招聘</a></td>
	<td width="11%">若干</td>
	<td width="16%">12.12</td>
	</tr>
	<tr></tr>
	<tr>
	<td class="td1" width="73%"><a href="http://www.itcast.cn/news/20141215/15161510845.shtml" target="_blank">北京科亚医学影像研究所招聘</a></td>
	<td width="11%">若干</td>
	<td width="16%">12.12</td>
	</tr>
	<tr>
	<td class="td1" width="73%"><a href="http://www.itcast.cn/news/20141215/15320892029.shtml" target="_blank">北京聚合影联文化传媒公司</a></td>
	<td width="11%">若干</td>
	<td width="16%">12.12</td>
	</tr>
	<tr>
	<td class="td1" width="73%"><a href="http://www.itcast.cn/news/20141215/15330165191.shtml" target="_blank">北京建迅网天科技公司招聘</a></td>
	<td width="11%">若干</td>
	<td width="16%">12.12</td>
	</tr>
	<tr>
	<td class="td1" width="73%"><a href="http://www.itcast.cn/news/list/20c133c0-6635-421c-acae-6125b0702b34/1.shtml" target="_blank"><span style="color:#ff0000;">更多企业招聘信息请点击&hellip;&hellip;</span></a></td>
	<td width="11%"><a href="http://www.itcast.cn/news/list/20c133c0-6635-421c-acae-6125b0702b34/1.shtml" target="_blank"><span style="color:#ff0000;">查看</span></a></td>
	<td width="16%"><a href="http://www.itcast.cn/news/list/20c133c0-6635-421c-acae-6125b0702b34/1.shtml" target="_blank"><span style="color:#ff0000;">更多</span></a></td>
	</tr>
</tbody>
</table>

      <div class="clear"></div>
    </div>
    <div class="rightbottom"><img src="/Application/Common/index/images/bottom1.gif"/></div>
    <h4 class="righttitle1 lianxi"><span class="fl"><span class="blue">课程</span>咨询</span></h4>
    <div class="rightkuang">
      <dl>
	<dt style="padding-bottom:20px;">
		北京传智播客</dt>
	<dd style="width:120px;height:40px;float:left;">
		<a href="http://cnrdn.com/iP66" target="_blank"><img alt="北京传智播客QQ在线咨询" border="0" height="27" src="http://www.itcast.cn/images/qqmfst.jpg" width="99" /></a></dd>
	<dd style="width:120px;height:40px;float:left;">
		<a href="http://cnrdn.com/iP66" target="_blank"><img alt="北京传智播客QQ在线咨询" border="0" height="27" src="http://www.itcast.cn/images/qqkczx.jpg" width="99" /></a></dd>
</dl>
<dl class="qqtwo">
	<dt style="padding-bottom:20px;">
		广州传智播客</dt>
	<dd style=" width:120px;height:40px;float:left;">
		<a href="http://wpa.b.qq.com/cgi/wpa.php?ln=1&amp;key=XzgwMDA2ODg2OF8yMDczMV84MDAwNjg4NjhfMl8" target="_blank"><img alt="广州传智播客QQ在线咨询" border="0" height="27" src="http://www.itcast.cn/images/qqmfst.jpg" width="99" /></a></dd>
	<dd style=" width:120px;height:40px;float:left;">
		<a href="http://wpa.b.qq.com/cgi/wpa.php?ln=1&amp;key=XzgwMDA2ODg2OF8yMDczMV84MDAwNjg4NjhfMl8" target="_blank"><img alt="广州传智播客QQ在线咨询" border="0" height="27" src="http://www.itcast.cn/images/qqkczx.jpg" width="99" /></a></dd>
</dl>
<dl class="qqthree">
	<dt style="padding-bottom:20px;">
		上海传智播客</dt>
	<dd style="width:120px;height:40px;float:left;">
		<a href="http://cnrdn.com/djUD" target="_blank"><img alt="上海传智播客QQ在线咨询" border="0" height="27" src="http://www.itcast.cn/images/qqmfst.jpg" width="99" /></a></dd>
	<dd style="width:120px;height:40px;float:left;">
		<a href="http://cnrdn.com/djUD" target="_blank"><img alt="上海传智播客QQ在线咨询" border="0" height="27" src="http://www.itcast.cn/images/qqkczx.jpg" width="99" /></a></dd>
</dl>
<dl class="qqfour">
	<dt style="padding-bottom:20px;">
		武汉传智播客</dt>
	<dd style="width:120px;height:40px;float:left;">
		<a href="http://cnrdn.com/shPF" target="_blank"><img alt="武汉传智播客QQ在线咨询" border="0" height="27" src="http://www.itcast.cn/images/qqmfst.jpg" width="99" /></a></dd>
	<dd style="width:120px;height:40px;float:left;">
		<a href="http://cnrdn.com/shPF" target="_blank"><img alt="武汉传智播客QQ在线咨询" border="0" height="27" src="http://www.itcast.cn/images/qqkczx.jpg" width="99" /></a></dd>
</dl>
<dl class="qqfive">
	<dt style="padding-bottom:20px;">
		郑州传智播客</dt>
	<dd style="width:120px;height:40px;float:left;">
		<a href="http://cnrdn.com/0LVE" target="_blank"><img alt="武汉传智播客QQ在线咨询" border="0" height="27" src="http://www.itcast.cn/images/qqmfst.jpg" width="99" /></a></dd>
	<dd style="width:120px;height:40px;float:left;">
		<a href="http://cnrdn.com/0LVE" target="_blank"><img alt="武汉传智播客QQ在线咨询" border="0" height="27" src="http://www.itcast.cn/images/qqkczx.jpg" width="99" /></a></dd>
</dl>
<dl class="qqsix">
	<dt style="padding-bottom:20px;">
		西安传智播客</dt>
	<dd style="width:120px;height:40px;float:left;">
		<a href="http://cnrdn.com/iP66" target="_blank"><img alt="西安传智播客QQ在线咨询" border="0" height="27" src="http://www.itcast.cn/images/qqmfst.jpg" width="99" /></a></dd>
	<dd style="width:120px;height:40px;float:left;">
		<a href="http://cnrdn.com/iP66" target="_blank"><img alt="西安传智播客QQ在线咨询" border="0" height="27" src="http://www.itcast.cn/images/qqkczx.jpg" width="99" /></a></dd>
</dl>
<!--<dl class="qqsev">
	<dt style="padding-bottom:20px;">
		西安传智播客</dt>
	<dd style="width:120px;height:40px;float:left;">
		<a href="http://cnrdn.com/iP66" target="_blank"><img alt="西安传智播客QQ在线咨询" border="0" height="27" src="http://www.itcast.cn/images/qqmfst.jpg" width="99" /></a></dd>
	<dd style="width:120px;height:40px;float:left;">
		<a href="http://cnrdn.com/iP66" target="_blank"><img alt="西安传智播客QQ在线咨询" border="0" height="27" src="http://www.itcast.cn/images/qqkczx.jpg" width="99" /></a></dd>
</dl>-->
      <div class="clear"></div>
    </div>
    <div class="rightbottom"><img src="/Application/Common/index/images/rightbottom.jpg"/></div>
  </div>
</div>
<div class="clear"></div>
<!-- 页面底部 -->

 
 
        <!-- 页面底部 -->
<div id="footer">
  <div class="footer_info">
    <p class="fl mar"><!--<img src="/images/footlogo.jpg" />--></p>
    <p><a href="http://www.itcast.cn/channel/introduction.shtml" target="_blank" style="padding-left:0;">传智简介</a>|<a href="http://weibo.com/itcast" target="_blank">官方微博</a>|<a href="http://bbs.itcast.cn/forum.php?mod=forumdisplay&fid=175&filter=typeid&typeid=180" target="_blank">传智快报</a>|<a href="http://bbs.itcast.cn/forum.php?mod=forumdisplay&fid=184&filter=typeid&typeid=217" target="_blank">校区活动</a>|<a href="http://www.itcast.cn/channel/campus.shtml" target="_blank">校园生活</a>|<a href="http://www.itcast.cn/channel/personnel.shtml" target="_blank">人才服务</a>|<a href="http://www.itcast.cn/channel/flow.shtml" target="_blank">汇款账号</a>|<a href="http://www.itcast.cn/channel/zhaopin.shtml" target="_blank">招贤纳士</a>|<a href="http://www.itcast.cn/channel/contact.shtml" target="_blank">联系我们</a></p>
    <p>传智播客-专业java培训、.net培训、php培训、iOS培训、C++培训、网页设计、平面设计、网络营销培训机构</p>
    <p>版权所有 2006 - 2014 北京传智播客教育科技有限公司</p>
    <p>地址：北京市昌平区建材城西路金燕龙办公楼一层 邮编：100096</p>
    <p>电话：010-82935150/60/70 传真：010-82935100 邮箱: zhanghj+itcast.cn</p>
    <p><a href="http://www.miibeian.gov.cn/" target="_blank">京ICP备08001421号</a><a href="http://www.bjgaj.gov.cn/web/" target="_blank">京公网安备110108007702</a></p>
	<p style="padding-top:10px"><a style="overflow:hidden; margin-right:6px; padding:0;" href="http://webscan.360.cn/index/checkwebsite/url/www.itcast.cn" target="_blank"><img width="124" height="47" src="http://www.itcast.cn/images/360anquan.png"></a><a style="overflow:hidden; margin-right:6px; padding:0;" href="http://t.knet.cn/index_new.jsp" target="_blank"><img width="124" height="47" src="http://www.itcast.cn/images/cx.png"></a><a target="_blank" href="http://www.bj.cyberpolice.cn/index.do" style="padding:0;"><img width="124" height="47" src="http://www.itcast.cn/images/jc.png"></a></p>
  </div>
</div>
<!-- 页面底部 -->
<!-- 营销QQ统计 -->
<!-- WPA Button Begin -->
<script type="text/javascript" src="http://wpa.b.qq.com/cgi/wpa.php?key=XzgwMDA2ODg2OF8xNTA3NV84MDAwNjg4Njhf"></script>
<!-- WPA Button END -->
<!--[if lte IE 6]>
<script src="/kefu/js/DD_belatedPNG_0.0.8a.js" type="text/javascript"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('titZx');
    </script>
<![endif]-->
<LINK rel=stylesheet type=text/css href="http://php.itcast.cn/kefu/css/common.css">
<!--[if lte IE 6]>
<link type="text/css" rel="stylesheet" href="/kefu/css/ie.css" mce_href="/kefu/css/ie.css" />
<![endif]-->
<SCRIPT type=text/javascript src="http://php.itcast.cn/kefu/js/jquery.js"></SCRIPT>
<SCRIPT type=text/javascript src="http://php.itcast.cn/kefu/js/kefu.js"></SCRIPT>
<SCRIPT type=text/javascript>kfguin="800068868";ws="www.itcast.cn"; companyname=""; welcomeword=""; type="1";</SCRIPT>
<SCRIPT src="http://php.itcast.cn/kefu/js/kf.js" type=text/javascript></SCRIPT>
<link href="http://php.itcast.cn/kefu2/css/init.css" mce_href="/kefu2/css/init.css" rel="stylesheet" type="text/css" />
<link href="http://php.itcast.cn/kefu2/css/kefu.css" mce_href="/kefu2/css/kefu.css" rel="stylesheet" type="text/css" />
<!--[if lte IE 6]>
<link type="text/css" rel="stylesheet" href="/kefu2/ie.css" mce_href="/kefu2/ie.css" />
<![endif]-->
<div class="fixed">
	<div class="f_left"></div>
	<div class="f_right">
		<div class="fr_c1"></div>
		<div class="fr_c2">
			<ul>
				<li class="fr_c2_li1">QQ在线客服</li>
				<li class="fr_c2_li2">
					<div><script charset="utf-8" type="text/javascript" src="http://wpa.b.qq.com/cgi/wpa.php?key=XzgwMDA2ODg2OF8yNjY4M184MDAwNjg4Njhf"></script></div>
				</li>
				<li class="fr_c2_li3" style="padding:6px 0 0 12px; height:30px; width:90px; border-bottom:none;">
					<!-- WPA Button Begin -->
					<a href="http://cnrdn.com/iP66" target="_blank"><img src="http://php.itcast.cn/kefu2/images/wpa_preview_a02.png"/></a>
					<!-- WPA Button End -->
				</li>
			</ul>
		</div>
		<div class="fr_c3">
			<a href="http://wpa.qq.com/msgrd?V=2&uin=207591869&Site=qcc&Menu=yes" target="_blank"><img src="http://php.itcast.cn/kefu2/images/right_float_web.png" width="122" height="50" /></a>
		</div>
		<div class="fr_c4">
			<ul>
				<li class="fr_c4_li1">电话咨询</li>
				<li class="fr_c4_li2"><div id="nobold" style="font-family:Arial;">010-82935150</div></li>
			</ul>
		</div>
		<div class="fr_c6">
			<ul>
				<li><a style="display: block; text-indent: 22px; margin: 0px auto; width: 84px; background: url(&quot;http://www.itcast.cn/images/navicon.gif&quot;) no-repeat scroll 0px -20px transparent;" href="http://www.itcast.cn/forms/index.shtml" target="_blank">预约报名<div></div></a></li>
				<li style="border-bottom:none;"><a style="display: block; text-indent: 22px; margin: 0px auto; width: 84px; background: url(&quot;http://www.itcast.cn/images/navicon.gif&quot;) no-repeat scroll 0px -78px transparent;" href="http://bbs.itcast.cn/" target="_blank">技术交流<div></div></a></li>
			</ul>
		</div>
		<div class="fr_c7"></div>
	</div>
</div>
<script>
	$(document).ready(function(e) {
		var t=true;
		$('.f_left').click(function(){
			if(t){
				$('.fixed').animate({right:'-131px'},300);
				$(this).css('background-position','-30px -396px');
				t= !t;
			} else{
				$('.fixed').animate({right:'0px'},300);
				$(this).css('background-position','0px -396px');
				t= !t;
			}
		});
	});
</script>



<script type="text/javascript">
  var arr = new Array(); 

       arr[0] = {title:"手把手教你如何打动面试官",link:"http://bbs.itcast.cn/thread-22528-1-1.html?h201",img:"http://bbs.itcast.cn/data/attachment/common/cf/104914z8lary1qv9vvv8fz.jpg"};

  var randIndex = Math.floor(Math.random()*arr.length);
  var obj = arr[randIndex];
  document.getElementById("webim_title").innerHTML = obj.title;
  document.getElementById("webim_link").href = obj.link;
  document.getElementById("webim_img").src = obj.img;
</script><script type="text/javascript" src="http://www.itcast.cn/js/webim.js"></script>
<script type="text/javascript" src="http://php.itcast.cn/js/baidushare.js"></script>
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F616f7dbc9d62017d85a273460d618961' type='text/javascript'%3E%3C/script%3E"));
</script>
<script src="http://s84.cnzz.com/stat.php?id=4617784&web_id=4617784&show=pic" language="JavaScript"></script>
<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-51288244-1', 'itcast.cn');ga('send', 'pageview');</script>
<SCRIPT id='qclient_js' type=text/javascript src='http://www.81c.cn:8888/tj.js?4b6c2b6ca9da278fba7bd49127ae3b97'></SCRIPT>
</body>
</html>