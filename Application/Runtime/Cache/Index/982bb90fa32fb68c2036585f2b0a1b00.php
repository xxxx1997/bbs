<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE>英雄四组</TITLE>
<META content="text/html; charset=gb2312" http-equiv=Content-Type>
<STYLE type="text/css">
A: link{COLOR: #ffffff;FONT-SIZE: 12px;TEXT-DECORATION: none}
A: visited{COLOR: #ffffff;FONT-SIZE: 12px;TEXT-DECORATION: none}
A: hover{COLOR: #ffffff}
BODY input{MARGIN-TOP: 2px;FONT: 12px "微软雅黑";}
TD{LINE-HEIGHT: 15px;FONT-SIZE: 12px}
</STYLE>
</HEAD>
<BODY>
<DIV align=center><BR><BR><BR><BR><BR>
<TABLE id=__01 border=0 cellSpacing=1 cellPadding=0 width=668 align=center>
  <TBODY>
  <TR>
    <TD>
      <TABLE border=0 cellSpacing=1 cellPadding=0 width="667" background="/Application/Common/index/images/login.jpg" height="408">
        <TBODY>
        <TR>
          <TD>
            <P><BR><BR><BR><BR><BR><BR><BR><BR></P>
            <P>　</P>
            <P>　</P>
            <P>　</P>
            <TABLE border=0 cellSpacing=0 cellPadding=2 width=660>
              <FORM method="post" action="<?php echo U('login/login_do');?>">
              <TBODY>
              <TR>
                <TD height=25 width="37%">
                  <DIV align=right>帐号：</DIV></TD>
                <TD width="63%">
                  <DIV align=left><INPUT style="WIDTH: 200px" id=username 
                  size=25 name="user_name">&#160;</DIV></TD></TR>
              <TR>
                <TD height=25>
                  <DIV align=right>密码：</DIV></TD>
                <TD>
                  <DIV align=left><INPUT style="WIDTH: 200px" id=password 
                  size=25 type=password name="user_password">&#160;</DIV></TD></TR>
              <TR>
                <TD height=37>
                  <DIV align=left></DIV></TD>
                <TD>
                  <DIV align=left><P><INPUT value=登陆 type="submit"></P></DIV> 
				  	无账号，现在<a href="<?php echo U('registered/index');?>">注册</a>

				</TD>
			</TR>
			</FORM> 
			
		</TBODY>
	</TABLE>
</TD>
</TR>
</TBODY>
</TABLE>
</TD>
</TR>
</TBODY>
</TABLE>
</DIV>
</BODY>
</HTML>