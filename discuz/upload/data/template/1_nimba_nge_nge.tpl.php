<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?><?php
$return = <<<EOF

<LINK media=all href="source/plugin/nimba_nge/template/style.css" type=text/css rel=stylesheet>
<style type="text/css">
.nimba_nge_pic .pictitle,.nimba_nge_userlist .usertitle,.nimba_nge_tablist .tab_menu{background-color:{$this->color};}
</style>
<script type="text/javascript">
var tablink_idname = new Array("tablink","anotherlink")
var tabcontent_idname = new Array("tabcontent","anothercontent") 
var tabcount = new Array("5")//tab数量
var loadtabs = new Array("1")//初始位置
var autochangetab_menu = 0;//指定第几个tab自动切换 0关闭
var changespeed = 3;
var stoponhover = 0;
function easytabs(tab_menunr,active){
if(tab_menunr==autochangetab_menu){
currenttab=active;
}
if((tab_menunr == autochangetab_menu)&&(stoponhover==1)){
stop_autochange()
}else if((tab_menunr == autochangetab_menu)&&(stoponhover==0)){
counter=0;
}
tab_menunr = tab_menunr-1;
for(i=1;i<=tabcount[tab_menunr];i++){
document.getElementById(tablink_idname[tab_menunr]+i).className='tab'+i;
document.getElementById(tabcontent_idname[tab_menunr]+i).style.display = 'none';
}
document.getElementById(tablink_idname[tab_menunr]+active).className='tab'+active+' tabactive';
document.getElementById(tabcontent_idname[tab_menunr]+active).style.display = 'block';
}
var timer; counter=0;
var totaltabs=tabcount[autochangetab_menu-1];
var currenttab=loadtabs[autochangetab_menu-1];

function start_autochange(){
counter=counter+1;
timer=setTimeout("start_autochange()",1000);
if(counter == changespeed+1){
currenttab++;
if(currenttab>totaltabs){
currenttab=1;
}
easytabs(autochangetab_menu,currenttab);
restart_autochange();
}
}

function restart_autochange(){
clearTimeout(timer);
counter=0;
start_autochange();
}

function stop_autochange(){
clearTimeout(timer);
counter=0;
}

window.onload=function(){
var tab_menucount=loadtabs.length;
var a = 0;
var b = 1;
do{
easytabs(b,loadtabs[a]);
a++;
b++;
}while(b<=tab_menucount);
if(autochangetab_menu!=0){
start_autochange();
}
}
</script>
<div class="wp mtn">
<div class="nimba_nge_pic"><!--幻灯片 开始-->
<div class="pictitle">
<span>{$itemname['1']}</span>
</div>
<div class="piclist">
<div class="module cl slidebox" style="display: block;">
<ul class="slideshow">
{$piclist}
</ul>
</div>
<script type="text/javascript">runslideshow();</script>
</div>

</div><!--幻灯片 结束-->
<div class="nimba_nge_tablist">
<div class="tab_menu">
<ul>
<li><a href="#" onmouseover="easytabs('1','1');" onfocus="easytabs('1','1');" onclick="return false;"  title="" id="tablink1" class="tabactive">{$itemname['2']}</a></li>
<li><a href="#" onmouseover="easytabs('1','2');" onfocus="easytabs('1','2');" onclick="return false;"  title="" id="tablink2">{$itemname['3']}</a></li>
<li><a href="#" onmouseover="easytabs('1','3');" onfocus="easytabs('1','3');" onclick="return false;"  title="" id="tablink3">{$itemname['4']}</a></li>
<li><a href="#" onmouseover="easytabs('1','4');" onfocus="easytabs('1','4');" onclick="return false;"  title="" id="tablink4">{$itemname['5']}</a></li>
<li><a href="#" onmouseover="easytabs('1','5');" onfocus="easytabs('1','5');" onclick="return false;"  title="" id="tablink5">{$itemname['6']}</a></li>
</ul>
</div>
<div class="tab_choice" id="tabcontent1">
<ul>
{$newthread}
</ul>
</div>
<div class="tab_choice"  id="tabcontent2" style="display:none;">
<ul>
{$newreplies}
</ul>

</div>
<div class="tab_choice" id="tabcontent3" style="display:none;">
<ul>
{$hotthread7}
</ul>

</div>
<div class="tab_choice" id="tabcontent4" style="display:none;">
<ul>
{$hotthread30}
</ul>

</div>
<div class="tab_choice" id="tabcontent5" style="display:none;">
<ul>
{$newdigest}
</ul>

</div>
</div>

<div class="nimba_nge_userlist">
<div class="usertitle">
<span>{$itemname['7']}</span>
</div>
<div class="tab_choice userlist">
<ul>
{$userlist}
</ul>
</div>
</div>
</div>
<div style="clear:both;"/>

EOF;
?>